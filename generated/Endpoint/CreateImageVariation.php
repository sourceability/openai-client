<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class CreateImageVariation extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest $requestBody 
     */
    public function __construct(\Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/images/variations';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return array(array('Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""'))), $bodyBuilder->build());
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ImagesResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Sourceability\\OpenAIClient\\Generated\\Model\\ImagesResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}