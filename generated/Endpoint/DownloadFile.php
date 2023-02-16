<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class DownloadFile extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{file_id}'), array($this->file_id), '/files/{file_id}/content');
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
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}