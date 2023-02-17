<?php

require __DIR__ . '/vendor/autoload.php';

use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Sourceability\OpenAIClient\Client;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse;
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
    new CreateCompletionRequest(
        model: 'text-davinci-003',
        temperature: 0,
        maxTokens: 512,
        prompt: 'The jane php library is very useful because'
    ),
    new CreateCompletionRequest(
        model: 'text-davinci-003',
        temperature: 0,
        maxTokens: 512,
        prompt: 'Symfony symfony symfony is like sourceability on a'
    ),
];
$completionResponses = $apiClient->createCompletions($requests);

var_dump(
    array_map(
        fn (CreateCompletionResponse $response) => $response->getChoices()[0]->getText(),
        $completionResponses
    )
);
