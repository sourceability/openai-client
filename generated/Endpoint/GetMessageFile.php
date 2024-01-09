<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\MessageFileObject;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class GetMessageFile extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $thread_id The ID of the thread to which the message and File belong.
     * @param string $message_id The ID of the message the file belongs to.
     * @param string $file_id The ID of the file being retrieved.
     */
    public function __construct(
        protected string $thread_id,
        protected string $message_id,
        protected string $file_id
    ) {
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{thread_id}', '{message_id}', '{file_id}'], [$this->thread_id, $this->message_id, $this->file_id], '/threads/{thread_id}/messages/{message_id}/files/{file_id}');
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
     * @return null|MessageFileObject
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, MessageFileObject::class, 'json');
        }
    }
}
