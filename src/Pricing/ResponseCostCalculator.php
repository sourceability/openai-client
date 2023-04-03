<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Pricing;

use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse;

class ResponseCostCalculator
{
    private ModelPricingRepository $modelPricingRepository;

    public function __construct(?ModelPricingRepository $modelPricingRepository = null)
    {
        $this->modelPricingRepository = $modelPricingRepository ?? new ModelPricingRepository();
    }

    public function calculate(CreateCompletionResponse|CreateChatCompletionResponse $response): ResponseCost
    {
        $pricing = $this->modelPricingRepository->getPricing(
            $response->getModel()
        );

        return new ResponseCost(
            $pricing->getPrompt()->calculatePrice(
                $response->getUsage()->getPromptTokens()
            ),
            $pricing->getCompletion()->calculatePrice(
                $response->getUsage()->getCompletionTokens()
            ),
        );
    }
}
