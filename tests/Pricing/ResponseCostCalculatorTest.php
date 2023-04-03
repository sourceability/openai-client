<?php

namespace Sourceability\OpenAIClient\Tests;

use PHPUnit\Framework\TestCase;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseUsage;
use Sourceability\OpenAIClient\Pricing\ResponseCostCalculator;

class ResponseCostCalculatorTest extends TestCase
{
    public function testChatTurbo()
    {
        $response = new CreateChatCompletionResponse();
        $response->setUsage(new CreateChatCompletionResponseUsage(523, 873));
        $response->setModel('gpt-3.5-turbo');

        $calculator = new ResponseCostCalculator();

        $responseCost = $calculator->calculate($response);

        self::assertSame('0.002792', (string) $responseCost->getTotal()->getAmount());
        self::assertSame('0.001046', (string) $responseCost->getPrompt()->getAmount());
        self::assertSame('0.001746', (string) $responseCost->getCompletion()->getAmount());
    }

    public function testAda()
    {
        $response = new CreateChatCompletionResponse();
        $response->setUsage(new CreateChatCompletionResponseUsage(245, 75));
        $response->setModel('text-ada-001');

        $calculator = new ResponseCostCalculator();

        $responseCost = $calculator->calculate($response);

        self::assertSame('0.0001280', (string) $responseCost->getTotal()->getAmount());
        self::assertSame('0.0000980', (string) $responseCost->getPrompt()->getAmount());
        self::assertSame('0.0000300', (string) $responseCost->getCompletion()->getAmount());
    }
}
