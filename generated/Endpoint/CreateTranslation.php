<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Endpoint;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint;
use Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CreateTranslation extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    public function __construct(CreateTranslationRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/audio/translations';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CreateTranslationRequest) {
            $bodyBuilder = new MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return [[
                'Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')],
            ], $bodyBuilder->build()];
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
     * @return null|CreateTranslationResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (($contentType === null) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, CreateTranslationResponse::class, 'json');
        }
    }
}
