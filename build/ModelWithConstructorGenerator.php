<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Build;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\OpenApiCommon\Generator\ModelGenerator;
use PhpParser\Comment\Doc;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Expression;

class ModelWithConstructorGenerator extends ModelGenerator
{
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

        $methods = [
            $this->createConstructorMethod($class->getLocalProperties()),
            ...$methods,
        ];

        return parent::doCreateModel($class, $properties, $methods);
    }

    protected function createConstructorArgumentDoc(Property $property): string
    {
        $docTypeHint = $property->getType()->getDocTypeHint('');
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
            $constructorStatements[] = new Expression(
                new Assign(
                    new PropertyFetch(
                        new Variable('this'),
                        $property->getPhpName()
                    ),
                    new Variable($property->getPhpName())
                )
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
