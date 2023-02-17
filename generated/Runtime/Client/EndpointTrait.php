<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Runtime\Client;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

trait EndpointTrait
{
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;
        return $this->transformResponseBody($response, $serializer, $contentType);
    }

    abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);
}
