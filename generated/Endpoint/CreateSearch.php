<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateSearchResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CreateSearch extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $engine_id The ID of the engine to use for this request.  You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    public function __construct(
        protected string $engine_id,
        CreateSearchRequest $requestBody
    ) {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{engine_id}'], [$this->engine_id], '/engines/{engine_id}/search');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CreateSearchRequest) {
            return [[
                'Content-Type' => ['application/json'],
            ], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }

    /**
     * @return array{Accept: string[]}
     */
    public function getExtraHeaders(): array
    {
        return [
            'Accept' => ['application/json'],
        ];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    /**
     * @return null|CreateSearchResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, CreateSearchResponse::class, 'json');
        }
    }
}
