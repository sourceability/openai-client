<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\RunStepObject;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class GetRunStep extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $thread_id The ID of the thread to which the run and run step belongs.
     * @param string $run_id The ID of the run to which the run step belongs.
     * @param string $step_id The ID of the run step to retrieve.
     */
    public function __construct(
        protected string $thread_id,
        protected string $run_id,
        protected string $step_id
    ) {
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{thread_id}', '{run_id}', '{step_id}'], [$this->thread_id, $this->run_id, $this->step_id], '/threads/{thread_id}/runs/{run_id}/steps/{step_id}');
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
     * @return null|RunStepObject
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, RunStepObject::class, 'json');
        }
    }
}
