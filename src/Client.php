<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpAsyncClient;
use Http\Discovery\HttpAsyncClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\Authentication\Bearer;
use Http\Promise\Promise;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Sourceability\OpenAIClient\Generated\Client as BaseClient;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateChatCompletion;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateCompletion;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Symfony\Component\Serializer\SerializerInterface;

class Client extends BaseClient
{
    public function __construct(
        private HttpAsyncClient $httpAsyncClient,
        RequestFactoryInterface $requestFactory,
        SerializerInterface $serializer,
        StreamFactoryInterface $streamFactory
    ) {
        $this->requestFactory = $requestFactory;
        $this->serializer = $serializer;
        $this->streamFactory = $streamFactory;
    }

    /**
     * @template K of array-key
     *
     * @param array<K, CreateCompletionRequest> $requests
     *
     * @return array<K, null|CreateCompletionResponse>
     */
    public function createCompletions(array $requests): array
    {
        return $this->executeEndpoints(
            array_map(
                fn (CreateCompletionRequest $request): CreateCompletion => new CreateCompletion($request),
                $requests
            )
        );
    }

    /**
     * @template K of array-key
     *
     * @param array<K, CreateChatCompletionRequest> $requests
     *
     * @return array<K, null|CreateChatCompletionResponse>
     */
    public function createChatCompletions(array $requests): array
    {
        return $this->executeEndpoints(
            array_map(
                fn (CreateChatCompletionRequest $request): CreateChatCompletion => new CreateChatCompletion($request),
                $requests
            )
        );
    }

    public function executeEndpoint(Endpoint $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        if ($fetch === self::FETCH_RESPONSE) {
            trigger_deprecation('jane-php/open-api-common', '7.3', 'Using %s::%s method with $fetch parameter equals to response is deprecated, use %s::%s instead.', self::class, __METHOD__, self::class, 'executeRawEndpoint');
            return $this->executeRawEndpoint($endpoint);
        }
        return $endpoint->parseResponse($this->processEndpoint($endpoint)->wait(), $this->serializer, $fetch);
    }

    /**
     * @param array<Endpoint> $endpoints
     * @return mixed[]
     */
    public function executeEndpoints(array $endpoints): array
    {
        $promises = array_map(
            [$this, 'processEndpoint'],
            $endpoints
        );

        $results = [];
        foreach ($endpoints as $index => $endpoint) {
            $response = $promises[$index]->wait();

            $results[$index] = $endpoint->parseResponse($response, $this->serializer);
        }

        return $results;
    }

    public function executeRawEndpoint(Endpoint $endpoint): ResponseInterface
    {
        return $this->processEndpoint($endpoint)->wait();
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], ?string $apiKey = null, ?string $baseUri = null): static
    {
        if ($apiKey !== null) {
            $additionalPlugins[] = new AuthenticationPlugin(new Bearer($apiKey));
        }

        if ($httpClient === null) {
            $httpClient = HttpAsyncClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($baseUri ?? 'https://api.openai.com/v1');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }

        return parent::create($httpClient, $additionalPlugins, $additionalNormalizers);
    }

    private function processEndpoint(Endpoint $endpoint): Promise
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer, $this->streamFactory);
        $queryString = $endpoint->getQueryString();
        $uriGlue = ! str_contains($endpoint->getUri(), '?') ? '?' : '&';
        $uri = $queryString !== '' ? $endpoint->getUri() . $uriGlue . $queryString : $endpoint->getUri();
        $request = $this->requestFactory->createRequest($endpoint->getMethod(), $uri);
        if ($body) {
            if ($body instanceof StreamInterface) {
                $request = $request->withBody($body);
            } elseif (is_resource($body)) {
                $request = $request->withBody($this->streamFactory->createStreamFromResource($body));
            } elseif (strlen($body) <= 4000 && @file_exists($body)) {
                // more than 4096 chars will trigger an error
                $request = $request->withBody($this->streamFactory->createStreamFromFile($body));
            } else {
                $request = $request->withBody($this->streamFactory->createStream($body));
            }
        }
        foreach ($endpoint->getHeaders($bodyHeaders) as $name => $value) {
            $request = $request->withHeader($name, $value);
        }
        if (count($endpoint->getAuthenticationScopes()) > 0) {
            $scopes = [];
            foreach ($endpoint->getAuthenticationScopes() as $scope) {
                $scopes[] = $scope;
            }
            $request = $request->withHeader(AuthenticationRegistry::SCOPES_HEADER, $scopes);
        }
        return $this->httpAsyncClient->sendAsyncRequest($request);
    }
}
