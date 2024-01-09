<?php

require __DIR__ . '/vendor/autoload.php';

use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Sourceability\OpenAIClient\Client;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartImage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartImageImageUrl;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartText;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestUserMessage;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\ConsoleOutput;

$apiClient = Client::create(
    additionalPlugins: [
        new LoggerPlugin(
            new ConsoleLogger(new ConsoleOutput(ConsoleOutput::VERBOSITY_DEBUG)),
            new FullHttpMessageFormatter()
        )
    ],
    baseUri: 'https://api.together.xyz/v1',
    apiKey: getenv('TOGETHER_API_KEY')
);

$completionResponse = $apiClient->createChatCompletion(new CreateChatCompletionRequest(
    model: 'mistralai/Mixtral-8x7B-Instruct-v0.1',
    temperature: 0,
    messages: [
        new ChatCompletionRequestUserMessage('The jane php library is very useful because')
    ]
));

var_dump(
    $completionResponse->getChoices()[0]->getMessage()->getContent()
);
