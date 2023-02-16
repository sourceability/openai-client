<?php

require __DIR__ . '/vendor/autoload.php';

use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Message\Authentication\Bearer;
use Sourceability\OpenAIClient\Client;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;

$apiClient = Client::create(
    null,
    [
        new AuthenticationPlugin(new Bearer(getenv('OPENAI_API_KEY')))
    ]
);

$requests = [
    (new CreateCompletionRequest())
        ->setModel('text-davinci-003')
        ->setTemperature(0)
        ->setMaxTokens(512)
        ->setPrompt('The jane php library is very useful because'),
    (new CreateCompletionRequest())
        ->setModel('text-davinci-003')
        ->setTemperature(0.7)
        ->setMaxTokens(512)
        ->setPrompt('Symfony symfony symfony is like sourceability on a'),
];
$completionResponses = $apiClient->createCompletions($requests);

var_dump($completionResponses);
