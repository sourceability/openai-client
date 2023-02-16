<?php

namespace Sourceability\OpenAIClient\Generated;

class Client extends \Sourceability\OpenAIClient\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ListEnginesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listEngines(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\ListEngines(), $fetch);
    }
    /**
     * 
     *
     * @param string $engineId The ID of the engine to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\Engine|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveEngine(string $engineId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\RetrieveEngine($engineId), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createCompletion(\Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateCompletion($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateEditRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateEditResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createEdit(\Sourceability\OpenAIClient\Generated\Model\CreateEditRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateEdit($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateImageRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ImagesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createImage(\Sourceability\OpenAIClient\Generated\Model\CreateImageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateImage($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateImageEditRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ImagesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createImageEdit(\Sourceability\OpenAIClient\Generated\Model\CreateImageEditRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateImageEdit($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ImagesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createImageVariation(\Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateImageVariation($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createEmbedding(\Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateEmbedding($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $engineId The ID of the engine to use for this request.  You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateSearchResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createSearch(string $engineId, \Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateSearch($engineId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ListFilesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listFiles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\ListFiles(), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateFileRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\OpenAIFile|\Psr\Http\Message\ResponseInterface
     */
    public function createFile(\Sourceability\OpenAIClient\Generated\Model\CreateFileRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateFile($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $fileId The ID of the file to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\DeleteFileResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\DeleteFile($fileId), $fetch);
    }
    /**
     * 
     *
     * @param string $fileId The ID of the file to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\OpenAIFile|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFile($fileId), $fetch);
    }
    /**
     * 
     *
     * @param string $fileId The ID of the file to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\DownloadFile($fileId), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateAnswerRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateAnswerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createAnswer(\Sourceability\OpenAIClient\Generated\Model\CreateAnswerRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateAnswer($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateClassificationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateClassificationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createClassification(\Sourceability\OpenAIClient\Generated\Model\CreateClassificationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateClassification($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ListFineTunesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listFineTunes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\ListFineTunes(), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\FineTune|\Psr\Http\Message\ResponseInterface
     */
    public function createFineTune(\Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateFineTune($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $fineTuneId The ID of the fine-tune job
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\FineTune|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveFineTune(string $fineTuneId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFineTune($fineTuneId), $fetch);
    }
    /**
     * 
     *
     * @param string $fineTuneId The ID of the fine-tune job to cancel
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\FineTune|\Psr\Http\Message\ResponseInterface
     */
    public function cancelFineTune(string $fineTuneId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CancelFineTune($fineTuneId), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sourceability\OpenAIClient\Generated\Model\ListFineTuneEventsResponse|\Psr\Http\Message\ResponseInterface
    */
    public function listFineTuneEvents(string $fineTuneId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\ListFineTuneEvents($fineTuneId, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\ListModelsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listModels(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\ListModels(), $fetch);
    }
    /**
     * 
     *
     * @param string $model The model to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\DeleteModelResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteModel(string $model, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\DeleteModel($model), $fetch);
    }
    /**
     * 
     *
     * @param string $model The ID of the model to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\Model|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveModel(string $model, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\RetrieveModel($model), $fetch);
    }
    /**
     * 
     *
     * @param \Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sourceability\OpenAIClient\Generated\Model\CreateModerationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function createModeration(\Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sourceability\OpenAIClient\Generated\Endpoint\CreateModeration($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.openai.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sourceability\OpenAIClient\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}