<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sourceability\OpenAIClient\Generated\Endpoint\CancelFineTune;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateChatCompletion;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateCompletion;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateEdit;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateEmbedding;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateFile;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateFineTune;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateImage;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateImageEdit;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateImageVariation;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateModeration;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateTranscription;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateTranslation;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteFile;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteModel;
use Sourceability\OpenAIClient\Generated\Endpoint\DownloadFile;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFiles;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFineTuneEvents;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFineTunes;
use Sourceability\OpenAIClient\Generated\Endpoint\ListModels;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFile;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFineTune;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveModel;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateFileRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteFileResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteModelResponse;
use Sourceability\OpenAIClient\Generated\Model\FineTune;
use Sourceability\OpenAIClient\Generated\Model\ImagesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFilesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTuneEventsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTunesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListModelsResponse;
use Sourceability\OpenAIClient\Generated\Model\Model;
use Sourceability\OpenAIClient\Generated\Model\OpenAIFile;
use Sourceability\OpenAIClient\Generated\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends \Sourceability\OpenAIClient\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateCompletionResponse|ResponseInterface
     */
    public function createCompletion(CreateCompletionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateCompletion($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateChatCompletionResponse|ResponseInterface
     */
    public function createChatCompletion(CreateChatCompletionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateChatCompletion($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateEditResponse|ResponseInterface
     */
    public function createEdit(CreateEditRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateEdit($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|ImagesResponse|ResponseInterface
     */
    public function createImage(CreateImageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateImage($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|ImagesResponse|ResponseInterface
     */
    public function createImageEdit(CreateImageEditRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateImageEdit($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|ImagesResponse|ResponseInterface
     */
    public function createImageVariation(CreateImageVariationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateImageVariation($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateEmbeddingResponse|ResponseInterface
     */
    public function createEmbedding(CreateEmbeddingRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateEmbedding($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateTranscriptionResponse|ResponseInterface
     */
    public function createTranscription(CreateTranscriptionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateTranscription($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateTranslationResponse|ResponseInterface
     */
    public function createTranslation(CreateTranslationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateTranslation($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListFilesResponse|ResponseInterface
     */
    public function listFiles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListFiles(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|OpenAIFile|ResponseInterface
     */
    public function createFile(CreateFileRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateFile($requestBody), $fetch);
    }

    /**
     * @param string $fileId The ID of the file to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeleteFileResponse|ResponseInterface
     */
    public function deleteFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteFile($fileId), $fetch);
    }

    /**
     * @param string $fileId The ID of the file to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|OpenAIFile|ResponseInterface
     */
    public function retrieveFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RetrieveFile($fileId), $fetch);
    }

    /**
     * @param string $fileId The ID of the file to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function downloadFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DownloadFile($fileId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListFineTunesResponse|ResponseInterface
     */
    public function listFineTunes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListFineTunes(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|FineTune|ResponseInterface
     */
    public function createFineTune(CreateFineTuneRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateFineTune($requestBody), $fetch);
    }

    /**
     * @param string $fineTuneId The ID of the fine-tune job
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FineTune|ResponseInterface
     */
    public function retrieveFineTune(string $fineTuneId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RetrieveFineTune($fineTuneId), $fetch);
    }

    /**
     * @param string $fineTuneId The ID of the fine-tune job to cancel
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FineTune|ResponseInterface
     */
    public function cancelFineTune(string $fineTuneId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CancelFineTune($fineTuneId), $fetch);
    }

    /**
     * @param string $fineTuneId The ID of the fine-tune job to get events for.
     * @param array $queryParameters {
     *     @var bool Whether to stream events for the fine-tune job. If set to true,
    If set to false, only events generated so far will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListFineTuneEventsResponse|ResponseInterface
     */
    public function listFineTuneEvents(string $fineTuneId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListFineTuneEvents($fineTuneId, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListModelsResponse|ResponseInterface
     */
    public function listModels(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListModels(), $fetch);
    }

    /**
     * @param string $model The model to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeleteModelResponse|ResponseInterface
     */
    public function deleteModel(string $model, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteModel($model), $fetch);
    }

    /**
     * @param string $model The ID of the model to use for this request
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model|ResponseInterface
     */
    public function retrieveModel(string $model, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RetrieveModel($model), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|CreateModerationResponse|ResponseInterface
     */
    public function createModeration(CreateModerationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateModeration($requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = []): static
    {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.openai.com/v1');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new ArrayDenormalizer(), new JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new Serializer($normalizers, [new JsonEncoder(new JsonEncode(), new JsonDecode([
            'json_decode_associative' => true,
        ]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
