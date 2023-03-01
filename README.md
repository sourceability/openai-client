# sourceability/openai-client

PHP 8.0+ [OpenAI API][openai_api] client with fully typed/documented requests+responses models,
`guzzlehttp/guzzle` + `symfony/http-client` support through [HTTPPug][httplug], and async/parallel requests.

The client is generated using [openai's OpenAPI][openai_openapi] with [jane-php][janephp].

Features:
- The requests models are typed and include descriptions from the OpenAPI documentation.
- Uses [HTTPPug][httplug] as the HTTP Abstraction
  - [Many supported http clients like `guzzlehttp/guzzle` or `symfony/http-client`][httplug_adapters]
  - [A lot of useful plugins like Cache or Retry][httplug_plugins]
  - [Symfony Bundle][httplug_sf_bundle]
- Async/parallel requests.

## Installation

```
composer require sourceability/openai-client
```

## Getting started

```php
require __DIR__ . '/vendor/autoload.php';

use Sourceability\OpenAIClient\Client;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;

$apiClient = Client::create(
    apiKey: getenv('OPENAI_API_KEY')
);

$requests = [
    (new CreateCompletionRequest())
        ->setModel('text-davinci-003')
        ->setTemperature(0)
        ->setMaxTokens(512)
        ->setPrompt('The jane php library is very useful because'),
    new CreateCompletionRequest(
        model: 'text-davinci-003',
        temperature: 0,
        maxTokens: 512,
        prompt: 'Symfony symfony symfony is like sourceability on a'
    ),
];
$completionResponses = $apiClient->createCompletions($requests);

var_dump($completionResponses);
```

ChatGPT with `/v1/chat/completions`:
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Sourceability\OpenAIClient\Client;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessage;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;

$apiClient = Client::create(
    apiKey: getenv('OPENAI_API_KEY')
);

$requests = [
    new CreateChatCompletionRequest(
        model: 'gpt-3.5-turbo',
        temperature: 0,
        messages: [
            new ChatCompletionRequestMessage(
                role: 'user',
                content: 'The jane php library is very useful because'
            )
        ],
    ),
    new CreateChatCompletionRequest(
        model: 'gpt-3.5-turbo',
        temperature: 0,
        messages: [
            new ChatCompletionRequestMessage(
                role: 'user',
                content: 'Symfony symfony symfony is like sourceability on a'
            )
        ],
    ),
];
$completionResponses = $apiClient->createChatCompletions($requests);

var_dump($completionResponses);
```

[janephp]: https://github.com/janephp/janephp
[openai_api]: https://platform.openai.com/docs/
[openai_openapi]: https://github.com/openai/openai-openapi
[httplug]: http://httplug.io
[httplug_adapters]: https://docs.php-http.org/en/latest/clients.html
[httplug_plugins]: https://docs.php-http.org/en/latest/plugins/index.html
[httplug_sf_bundle]: https://docs.php-http.org/en/latest/integrations/symfony-bundle.html
