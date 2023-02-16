<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class DeleteModel extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
{
    protected $model;
    /**
     * 
     *
     * @param string $model The model to delete
     */
    public function __construct(string $model)
    {
        $this->model = $model;
    }
    use \Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{model}'), array($this->model), '/models/{model}');
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
     * @return null|\Sourceability\OpenAIClient\Generated\Model\DeleteModelResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Sourceability\\OpenAIClient\\Generated\\Model\\DeleteModelResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}