<?php

require __DIR__ . '/vendor/autoload.php';

use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Sourceability\OpenAIClient\Client;
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
    apiKey: getenv('OPENAI_API_KEY')
);

$requests = [
    new CreateChatCompletionRequest(
        model: 'gpt-3.5-turbo',
        temperature: 0,
        messages: [
            new ChatCompletionRequestUserMessage('The jane php library is very useful because')
        ],
    ),
    new CreateChatCompletionRequest(
        model: 'gpt-3.5-turbo',
        temperature: 0,
        messages: [
            new ChatCompletionRequestUserMessage('Symfony symfony symfony is like sourceability on a')
        ],
    ),
];
$completionResponses = $apiClient->createChatCompletions($requests);

var_dump(
    array_map(
        fn (CreateChatCompletionResponse $response) => $response->getChoices()[0]->getMessage()->getContent(),
        $completionResponses
    )
);
