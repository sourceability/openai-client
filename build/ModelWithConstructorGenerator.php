<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Build;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\ModelGenerator;
use PhpParser\Comment\Doc;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\BinaryOp\NotIdentical;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\If_;

class ModelWithConstructorGenerator extends ModelGenerator
{
    public function generate(\Jane\Component\JsonSchema\Registry\Schema $schema, string $className, Context $context): void
    {
        foreach ($schema->getClasses() as $class) {
            if ($class->getName() === 'CreateChatCompletionResponse') {
                // allow null
                $class->getProperty('system_fingerprint')->getType()->getObject()->setNullable(true);
                //                dd($class->getProperty('system_fingerprint')->getType());
                $class->getProperty('system_fingerprint')->getType()->getObject()->setDefault(null);
                $properties = $class->getLocalProperties();
                foreach ($properties as $index => $property) {
                    if ($property->getName() === 'system_fingerprint') {
                        $properties[$index] = $this->getPropertyWithNullable($property, true);
                    }
                }
                $class->setProperties($properties);
            }
        }

        parent::generate($schema, $className, $context);
    }

    /**
     * @param array<Stmt\Property> $properties
     */
    protected function doCreateModel(BaseClassGuess $class, array $properties, array $methods): Class_
    {
        foreach ($properties as $property) {
            if ($property->props[0]->default !== null) {
                continue;
            }

            $property->props[0]->default = new Name('null');
        }

        // Move properties with a default value to the end of the list
        // That way objects with discriminator like properties will have the discriminator property last
        // To avoid having to use named arguments
        $localProperties = $class->getLocalProperties();
        usort(
            $localProperties,
            function (Property $a, Property $b): int {
                if ($a->getType()->getObject()->getDefault() === null && $b->getType()->getObject()->getDefault() !== null) {
                    return -1;
                }

                if ($a->getType()->getObject()->getDefault() !== null && $b->getType()->getObject()->getDefault() === null) {
                    return 1;
                }

                return 0;
            }
        );

        // Remove logprobs default value which causes issues with vision api calls
        if ($class->getName() === 'CreateChatCompletionRequest') {
            foreach ($properties as $property) {
                if ($property->props[0]->name->toString() === 'logprobs') {
                    $property->props[0]->default = new Name('null');
                }
            }
            foreach ($localProperties as &$localProperty) {
                if ($localProperty->getName() === 'logprobs') {
                    $localProperty = $this->getPropertyWithDefault($localProperty, null);
                }
            }
        }
        $class->setProperties($localProperties);

        $methods = [
            $this->createConstructorMethod($localProperties),
            ...$methods,
        ];

        return parent::doCreateModel($class, $properties, $methods);
    }

    protected function createConstructorArgumentDoc(Property $property): string
    {
        $docTypeHint = $property->getType()->getDocTypeHint('');
        if ($docTypeHint instanceof Name) {
            $docTypeHint = $docTypeHint->toString();
        }
        if ($property->isNullable() && ! str_contains($docTypeHint, 'null')) {
            $docTypeHint .= '|null';
        }

        $descriptionLines = explode("\n", $property->getDescription());

        $prefix = ' * ';
        $docBlock = sprintf(
            '%s@param %s $%s',
            $prefix,
            $docTypeHint,
            $property->getPhpName()
        );
        $docBlockLength = strlen($docBlock);
        $docBlock = sprintf('%s %s', $docBlock, array_shift($descriptionLines));
        foreach ($descriptionLines as $descriptionLine) {
            if (strlen(trim($descriptionLine)) < 1) {
                continue;
            }

            $docBlock .= join(
                '',
                [
                    "\n",
                    str_pad($prefix, $docBlockLength + 1, ' '),
                    $descriptionLine,
                ]
            );
        }

        return $docBlock;
    }

    protected function createProperty(Property $property, string $namespace, $default = null, bool $strict = true): Stmt
    {
        if ($property->getType()->getName() === 'string'
            && $property->getType()->getObject() instanceof Schema
            && count($property->getType()->getObject()->getEnum() ?? []) === 1
            && $property->getType()->getObject()->getDefault() === null
        ) {
            // Useful for completion message role properties which are defined as enums with a single value
            $newDefault = $property->getType()->getObject()->getEnum()[0];

            $property = $this->getPropertyWithDefault($property, $newDefault);
        }

        return parent::createProperty($property, $namespace, $default, $strict);
    }

    private function getPropertyWithDefault(Property $property, $newDefault): Property
    {
        $property->getType()->getObject()->setDefault($newDefault);
        $newProperty = new Property(
            $property->getObject(),
            $property->getName(),
            $property->getReference(),
            $property->isNullable(),
            $property->isRequired(),
            $property->getType(),
            $property->getDescription(),
            $newDefault,
            $property->isReadOnly()
        );
        $newProperty->setPhpName($property->getName());
        $newProperty->setAccessorName($property->getAccessorName());
        $newProperty->setDeprecated($property->isDeprecated());

        return $newProperty;
    }

    private function getPropertyWithNullable(Property $property, bool $newNullable): Property
    {
        $property->getType()->getObject()->setNullable($newNullable);
        $newProperty = new Property(
            $property->getObject(),
            $property->getName(),
            $property->getReference(),
            $newNullable,
            $property->isRequired(),
            $property->getType(),
            $property->getDescription(),
            $property->getDefault(),
            $property->isReadOnly()
        );
        $newProperty->setPhpName($property->getName());
        $newProperty->setAccessorName($property->getAccessorName());
        $newProperty->setDeprecated($property->isDeprecated());

        return $newProperty;
    }

    /**
     * @param array<Property> $properties
     */
    private function createConstructorMethod(array $properties): ClassMethod
    {
        $constructorParams = [];
        $constructorStatements = [];
        $constructorDocumentation = [];

        foreach ($properties as $property) {
            $constructorParams[] = new Param(
                new Variable($property->getPhpName()),
                $this->getDefaultAsExpr($property->getDefault())->expr
            );

            $constructorStatements[] = new If_(
                new NotIdentical(
                    new Variable($property->getPhpName()),
                    new ConstFetch(new Name('null'))
                ),
                [
                    'stmts' => [
                        new Expression(
                            new MethodCall(
                                new Variable('this'),
                                sprintf('set%s', ucfirst($property->getPhpName())),
                                [
                                    new Arg(
                                        new Variable($property->getPhpName())
                                    ),
                                ]
                            )
                        ),
                    ],
                ]
            );
            $constructorDocumentation[] = $this->createConstructorArgumentDoc($property);
        }

        $methodParamsDoc = <<<EOD
/**
EOD
            . "\n" . implode("\n", $constructorDocumentation);

        return new ClassMethod(
            '__construct',
            [
                'type' => Class_::MODIFIER_PUBLIC,
                'params' => $constructorParams,
                'stmts' => $constructorStatements,
            ],
            [
                'comments' => [
                    new Doc($methodParamsDoc . "\n */"),
                ],
            ]
        );
    }

    private function getDefaultAsExpr($value): Expression
    {
        return $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];
    }
}
