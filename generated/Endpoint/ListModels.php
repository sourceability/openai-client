<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\ListModelsResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class ListModels extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/models';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return [
            'Accept' => ['application/json'],
        ];
    }

    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }

    /**
     * @return null|ListModelsResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, ListModelsResponse::class, 'json');
        }
    }
}
