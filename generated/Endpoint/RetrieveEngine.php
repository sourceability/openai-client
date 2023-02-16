<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class RetrieveEngine extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
{
    protected $engine_id;
    /**
     * 
     *
     * @param string $engineId The ID of the engine to use for this request
     */
    public function __construct(string $engineId)
    {
        $this->engine_id = $engineId;
    }
    use \Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{engine_id}'), array($this->engine_id), '/engines/{engine_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\Sourceability\OpenAIClient\Generated\Model\Engine
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Sourceability\\OpenAIClient\\Generated\\Model\\Engine', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}