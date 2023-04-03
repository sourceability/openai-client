<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Pricing;

use Brick\Math\BigDecimal;
use Brick\Money\Context\CustomContext;
use Brick\Money\Money;
use InvalidArgumentException;

class ModelPricingRepository
{
    // See https://openai.com/pricing
    /**
     * @var array<string, string|array{prompt: string, completion: string}>
     */
    private const PRICING_PER_MODEL = [
        'gpt-4' => [
            'prompt' => '0.03',
            'completion' => '0.06',
        ],
        'gpt-4-32k' => [
            'prompt' => '0.06',
            'completion' => '0.12',
        ],
        'gpt-3.5-turbo' => '0.002',
        'davinci' => '0.02',
        'curie' => '0.002',
        'babbage' => '0.0005',
        'ada' => '0.0004',
    ];

    private const TOKENS_PER_PRICE = 1000;

    public function getPricing(string $requestedModel): ModelPricing
    {
        $pricing = null;
        foreach (self::PRICING_PER_MODEL as $model => $modelPricing) {
            if (! str_starts_with($requestedModel, $model)
                && ! str_starts_with($requestedModel, 'text-' . $model)
            ) {
                continue;
            }

            $pricing = $modelPricing;
        }

        if ($pricing === null) {
            throw new InvalidArgumentException(sprintf('Pricing for model "%s" not found.', $requestedModel));
        }

        if (is_array($pricing)) {
            $prompt = $pricing['prompt'];
            $completion = $pricing['completion'];
        } else {
            $prompt = $completion = $pricing;
        }

        // Make sure the price of a single token can be accurately modeled
        // Same as \Brick\Money\Context\AutoContext::applyTo
        $scale = max(
            BigDecimal::of($prompt)
                ->toBigDecimal()
                ->stripTrailingZeros()
                ->getScale(),
            BigDecimal::of($completion)
                ->toBigDecimal()
                ->stripTrailingZeros()
                ->getScale(),
        ) + 3; // +3 because self::TOKENS_PER_PRICE

        $moneyContext = new CustomContext($scale);

        return new ModelPricing(
            new TokenPricing(
                Money::of($prompt, 'USD', $moneyContext),
                self::TOKENS_PER_PRICE
            ),
            new TokenPricing(
                Money::of($completion, 'USD', $moneyContext),
                self::TOKENS_PER_PRICE
            )
        );
    }
}
