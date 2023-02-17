<?php

require __DIR__ . '/vendor/autoload.php';

use Sourceability\OpenAIClient\Client;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;

$apiClient = Client::create(
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

var_dump($completionResponses);
