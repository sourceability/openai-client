<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Build;

use Jane\Component\JsonSchema\Registry\RegistryInterface;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand as BaseGenerateCommand;
use Jane\Component\OpenApiCommon\Registry\Registry;

class GenerateCommand extends BaseGenerateCommand
{
    protected function newRegistry(string $schemaFile, array $options): RegistryInterface
    {
        $registry = parent::newRegistry($schemaFile, $options);
        assert($registry instanceof Registry);
        $registry->setOpenApiClass(JaneOpenApi::class);

        return $registry;
    }
}
