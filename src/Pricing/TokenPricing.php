<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Pricing;

use Brick\Math\RoundingMode;
use Brick\Money\Money;

class TokenPricing
{
    public function __construct(
        private Money $price,
        private int $tokens
    ) {
    }

    public function calculatePrice(int $tokens, int $roudingMode = RoundingMode::UP): Money
    {
        return $this->price->toRational()
            ->dividedBy($this->tokens)
            ->multipliedBy($tokens)
            ->to($this->price->getContext(), $roudingMode)
        ;
    }
}
