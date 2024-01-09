<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\ListFineTuneEventsResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class ListFineTuneEvents extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $fine_tune_id The ID of the fine-tune job to get events for.
     * @param array $queryParameters {
     *     @var bool Whether to stream events for the fine-tune job. If set to true,
    If set to false, only events generated so far will be returned.

     * }
     */
    public function __construct(
        protected string $fine_tune_id,
        array $queryParameters = []
    ) {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{fine_tune_id}'], [$this->fine_tune_id], '/fine-tunes/{fine_tune_id}/events');
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

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['stream']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([
            'stream' => false,
        ]);
        $optionsResolver->addAllowedTypes('stream', ['bool']);
        return $optionsResolver;
    }

    /**
     * @return null|ListFineTuneEventsResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, ListFineTuneEventsResponse::class, 'json');
        }
    }
}
