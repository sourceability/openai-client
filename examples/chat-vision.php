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
    apiKey: getenv('OPENAI_API_KEY')
);

$completionResponse = $apiClient->createChatCompletion(new CreateChatCompletionRequest(
    model: 'gpt-4-vision-preview',
    temperature: 0,
    messages: [
        new ChatCompletionRequestUserMessage(
            [
                new ChatCompletionRequestMessageContentPartImage(
                    new ChatCompletionRequestMessageContentPartImageImageUrl(
                        'https://symfony.com/screenshots/symfony-profiler.png'
                    )
                ),
                new ChatCompletionRequestMessageContentPartText(
                    'Reply with a JSON object describing the timeline shown.'
                )
            ]
        )
    ],
    maxTokens: 2000,
));

$content = $completionResponse->getChoices()[0]->getMessage()->getContent();
$content = preg_replace('#^\S*```json#', '', $content);
$content = trim($content, "`\n ");

var_dump(
    json_decode($content, true)
);
