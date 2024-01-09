<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\ListMessageFilesResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class ListMessageFiles extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string $thread_id The ID of the thread that the message and files belong to.
     * @param string $message_id The ID of the message that the files belongs to.
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     */
    public function __construct(
        protected string $thread_id,
        protected string $message_id,
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
        return str_replace(['{thread_id}', '{message_id}'], [$this->thread_id, $this->message_id], '/threads/{thread_id}/messages/{message_id}/files');
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
        $optionsResolver->setDefined(['limit', 'order', 'after', 'before']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([
            'limit' => 20,
            'order' => 'desc',
        ]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('after', ['string']);
        $optionsResolver->addAllowedTypes('before', ['string']);
        return $optionsResolver;
    }

    /**
     * @return null|ListMessageFilesResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, ListMessageFilesResponse::class, 'json');
        }
    }
}
