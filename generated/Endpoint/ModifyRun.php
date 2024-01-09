<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\ModifyRunRequest;
use Sourceability\OpenAIClient\Generated\Model\RunObject;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class ModifyRun extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $thread_id The ID of the [thread](/docs/api-reference/threads) that was run.
     * @param string $run_id The ID of the run to modify.
     */
    public function __construct(
        protected string $thread_id,
        protected string $run_id,
        ModifyRunRequest $requestBody
    ) {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{thread_id}', '{run_id}'], [$this->thread_id, $this->run_id], '/threads/{thread_id}/runs/{run_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof ModifyRunRequest) {
            return [[
                'Content-Type' => ['application/json'],
            ], $serializer->serialize($this->body, 'json')];
        }
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
     * @return null|RunObject
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, RunObject::class, 'json');
        }
    }
}
