<?php

namespace Sourceability\OpenAIClient\Tests;

use Brick\Money\Context\CustomContext;
use Brick\Money\Money;
use PHPUnit\Framework\TestCase;
use Sourceability\OpenAIClient\Pricing\TokenPricing;

class TokenPricingTest extends TestCase
{
    public function test()
    {
        $moneyContext = new CustomContext(5);

        $gpt35TurboPricing = new TokenPricing(Money::of('0.002', 'USD', $moneyContext), 1000);
        $gpt4_8kPromptPricing = new TokenPricing(Money::of('0.03', 'USD', $moneyContext), 1000);

        self::assertSame(
            '0.00300',
            (string) $gpt35TurboPricing->calculatePrice(1500)->getAmount()
        );
        self::assertSame(
            '0.00001',
            (string) $gpt35TurboPricing->calculatePrice(1)->getAmount()
        );
        self::assertSame(
            '0.02169',
            (string) $gpt4_8kPromptPricing->calculatePrice(723)->getAmount()
        );
    }
}
