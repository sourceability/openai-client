<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Pricing;

class ModelPricing
{
    public function __construct(
        private TokenPricing $prompt,
        private TokenPricing $completion
    ) {
    }

    public function getPrompt(): TokenPricing
    {
        return $this->prompt;
    }

    public function getCompletion(): TokenPricing
    {
        return $this->completion;
    }
}
