<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class DeleteFile extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
{
    protected $file_id;
    /**
     * 
     *
     * @param string $fileId The ID of the file to use for this request
     */
    public function __construct(string $fileId)
    {
        $this->file_id = $fileId;
    }
    use \Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{file_id}'), array($this->file_id), '/files/{file_id}');
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
     * @return null|\Sourceability\OpenAIClient\Generated\Model\DeleteFileResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Sourceability\\OpenAIClient\\Generated\\Model\\DeleteFileResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}