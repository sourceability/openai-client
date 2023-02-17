<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
