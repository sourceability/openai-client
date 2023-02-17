# sourceability/openai-client

An [OpenAI API][openai_api] client generated using [jane-php][janephp] from [openai's OpenAPI][openai_openapi].

Features:
- The requests models are typed and include descriptions from the OpenAPI documentation.
- Uses [HTTPPug][httplug] as the HTTP Abstraction. The library also includes:
  - [Many http clients like guzzle or symfony/http-client][httplug_adapters]
  - [A lot of useful plugins like Cache or Retry][httplug_plugins]
  - [A Symfony Bundle][httplug_sf_bundle]
- Async/parallel requests.

## Installation

```
composer require sourceability/openai-client
```

## Getting started

```php
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
```

[janephp]: https://github.com/janephp/janephp
[openai_api]: https://platform.openai.com/docs/
[openai_openapi]: https://github.com/openai/openai-openapi
[httplug]: http://httplug.io
[httplug_adapters]: https://docs.php-http.org/en/latest/clients.html
[httplug_plugins]: https://docs.php-http.org/en/latest/plugins/index.html
[httplug_sf_bundle]: https://docs.php-http.org/en/latest/integrations/symfony-bundle.html
