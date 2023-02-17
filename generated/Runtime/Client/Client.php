<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Client
{
    public const FETCH_RESPONSE = 'response';

    public const FETCH_OBJECT = 'object';

    public function __construct(
        protected ClientInterface $httpClient,
        protected RequestFactoryInterface $requestFactory,
        protected SerializerInterface $serializer,
        protected StreamFactoryInterface $streamFactory
    ) {
    }

    public function executeEndpoint(Endpoint $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        if ($fetch === self::FETCH_RESPONSE) {
            trigger_deprecation('jane-php/open-api-common', '7.3', 'Using %s::%s method with $fetch parameter equals to response is deprecated, use %s::%s instead.', self::class, __METHOD__, self::class, 'executeRawEndpoint');
            return $this->executeRawEndpoint($endpoint);
        }
        return $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer, $fetch);
    }

    public function executeRawEndpoint(Endpoint $endpoint): ResponseInterface
    {
        return $this->processEndpoint($endpoint);
    }

    private function processEndpoint(Endpoint $endpoint): ResponseInterface
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
        return $this->httpClient->sendRequest($request);
    }
}
