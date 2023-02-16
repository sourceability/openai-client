<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class CreateSearch extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
{
    protected $engine_id;
    /**
     * 
     *
     * @param string $engineId The ID of the engine to use for this request.  You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest $requestBody 
     */
    public function __construct(string $engineId, \Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest $requestBody)
    {
        $this->engine_id = $engineId;
        $this->body = $requestBody;
    }
    use \Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{engine_id}'), array($this->engine_id), '/engines/{engine_id}/search');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateSearchResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateSearchResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}