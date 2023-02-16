<?php

namespace Sourceability\OpenAIClient\Generated\Endpoint;

class ListFineTuneEvents extends \Sourceability\OpenAIClient\Generated\Runtime\Client\BaseEndpoint implements \Sourceability\OpenAIClient\Generated\Runtime\Client\Endpoint
{
    protected $fine_tune_id;
    /**
    * 
    *
    * @param string $fineTuneId The ID of the fine-tune job to get events for.
    
    * @param array $queryParameters {
    *     @var bool $stream Whether to stream events for the fine-tune job. If set to true,
    events will be sent as data-only
    [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format)
    as they become available. The stream will terminate with a
    `data: [DONE]` message when the job is finished (succeeded, cancelled,
    or failed).
    
    If set to false, only events generated so far will be returned.
    
    * }
    */
    public function __construct(string $fineTuneId, array $queryParameters = array())
    {
        $this->fine_tune_id = $fineTuneId;
        $this->queryParameters = $queryParameters;
    }
    use \Sourceability\OpenAIClient\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{fine_tune_id}'), array($this->fine_tune_id), '/fine-tunes/{fine_tune_id}/events');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('stream'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('stream' => false));
        $optionsResolver->addAllowedTypes('stream', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ListFineTuneEventsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Sourceability\\OpenAIClient\\Generated\\Model\\ListFineTuneEventsResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}