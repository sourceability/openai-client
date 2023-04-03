<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Pricing;

use Brick\Money\Money;

class ResponseCost
{
    public function __construct(
        private Money $prompt,
        private Money $completion,
    ) {
    }

    public function getPrompt(): Money
    {
        return $this->prompt;
    }

    public function getCompletion(): Money
    {
        return $this->completion;
    }

    public function getTotal(): Money
    {
        return $this->prompt->plus($this->completion);
    }
}
