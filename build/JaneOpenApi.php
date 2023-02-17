<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Build;

use Generator;
use Jane\Component\JsonSchema\Generator\ModelGenerator;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\OpenApi3\JaneOpenApi as BaseJaneOpenApi;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class JaneOpenApi extends BaseJaneOpenApi
{
    protected static function generators(DenormalizerInterface $denormalizer, array $options = []): Generator
    {
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);

        foreach (parent::generators($denormalizer, $options) as $generator) {
            if ($generator instanceof ModelGenerator) {
                yield new ModelWithConstructorGenerator($naming, $parser);

                continue;
            }

            yield $generator;
        }
    }
}
