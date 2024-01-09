<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\ListFineTuningJobEventsResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class ListFineTuningEvents extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $fine_tuning_job_id The ID of the fine-tuning job to get events for.
     * @param array $queryParameters {
     *     @var string Identifier for the last event from the previous pagination request.
     *     @var int Number of events to retrieve.
     * }
     */
    public function __construct(
        protected string $fine_tuning_job_id,
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
        return str_replace(['{fine_tuning_job_id}'], [$this->fine_tuning_job_id], '/fine_tuning/jobs/{fine_tuning_job_id}/events');
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
        $optionsResolver->setDefined(['after', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([
            'limit' => 20,
        ]);
        $optionsResolver->addAllowedTypes('after', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }

    /**
     * @return null|ListFineTuningJobEventsResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, ListFineTuningJobEventsResponse::class, 'json');
        }
    }
}
