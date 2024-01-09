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
use Sourceability\OpenAIClient\Generated\Endpoint\CancelFineTuningJob;
use Sourceability\OpenAIClient\Generated\Endpoint\CancelRun;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateAssistant;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateAssistantFile;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateChatCompletion;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateCompletion;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateEdit;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateEmbedding;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateFile;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateFineTune;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateFineTuningJob;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateImage;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateImageEdit;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateImageVariation;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateMessage;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateModeration;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateRun;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateSpeech;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateThread;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateThreadAndRun;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateTranscription;
use Sourceability\OpenAIClient\Generated\Endpoint\CreateTranslation;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteAssistant;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteAssistantFile;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteFile;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteModel;
use Sourceability\OpenAIClient\Generated\Endpoint\DeleteThread;
use Sourceability\OpenAIClient\Generated\Endpoint\DownloadFile;
use Sourceability\OpenAIClient\Generated\Endpoint\GetAssistant;
use Sourceability\OpenAIClient\Generated\Endpoint\GetAssistantFile;
use Sourceability\OpenAIClient\Generated\Endpoint\GetMessage;
use Sourceability\OpenAIClient\Generated\Endpoint\GetMessageFile;
use Sourceability\OpenAIClient\Generated\Endpoint\GetRun;
use Sourceability\OpenAIClient\Generated\Endpoint\GetRunStep;
use Sourceability\OpenAIClient\Generated\Endpoint\GetThread;
use Sourceability\OpenAIClient\Generated\Endpoint\ListAssistantFiles;
use Sourceability\OpenAIClient\Generated\Endpoint\ListAssistants;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFiles;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFineTuneEvents;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFineTunes;
use Sourceability\OpenAIClient\Generated\Endpoint\ListFineTuningEvents;
use Sourceability\OpenAIClient\Generated\Endpoint\ListMessageFiles;
use Sourceability\OpenAIClient\Generated\Endpoint\ListMessages;
use Sourceability\OpenAIClient\Generated\Endpoint\ListModels;
use Sourceability\OpenAIClient\Generated\Endpoint\ListPaginatedFineTuningJobs;
use Sourceability\OpenAIClient\Generated\Endpoint\ListRuns;
use Sourceability\OpenAIClient\Generated\Endpoint\ListRunSteps;
use Sourceability\OpenAIClient\Generated\Endpoint\ModifyAssistant;
use Sourceability\OpenAIClient\Generated\Endpoint\ModifyMessage;
use Sourceability\OpenAIClient\Generated\Endpoint\ModifyRun;
use Sourceability\OpenAIClient\Generated\Endpoint\ModifyThread;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFile;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFineTune;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveFineTuningJob;
use Sourceability\OpenAIClient\Generated\Endpoint\RetrieveModel;
use Sourceability\OpenAIClient\Generated\Endpoint\SubmitToolOuputsToRun;
use Sourceability\OpenAIClient\Generated\Model\AssistantFileObject;
use Sourceability\OpenAIClient\Generated\Model\AssistantObject;
use Sourceability\OpenAIClient\Generated\Model\CreateAssistantFileRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateAssistantRequest;
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
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuningJobRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateMessageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateRunRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateSpeechRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateThreadAndRunRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateThreadRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteAssistantFileResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteAssistantResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteFileResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteModelResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteThreadResponse;
use Sourceability\OpenAIClient\Generated\Model\FineTune;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJob;
use Sourceability\OpenAIClient\Generated\Model\ImagesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListAssistantFilesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListAssistantsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFilesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTuneEventsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTunesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTuningJobEventsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListMessageFilesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListMessagesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListModelsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListPaginatedFineTuningJobsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListRunsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListRunStepsResponse;
use Sourceability\OpenAIClient\Generated\Model\MessageFileObject;
use Sourceability\OpenAIClient\Generated\Model\MessageObject;
use Sourceability\OpenAIClient\Generated\Model\Model;
use Sourceability\OpenAIClient\Generated\Model\ModifyAssistantRequest;
use Sourceability\OpenAIClient\Generated\Model\ModifyMessageRequest;
use Sourceability\OpenAIClient\Generated\Model\ModifyRunRequest;
use Sourceability\OpenAIClient\Generated\Model\ModifyThreadRequest;
use Sourceability\OpenAIClient\Generated\Model\OpenAIFile;
use Sourceability\OpenAIClient\Generated\Model\RunObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepObject;
use Sourceability\OpenAIClient\Generated\Model\SubmitToolOutputsRunRequest;
use Sourceability\OpenAIClient\Generated\Model\ThreadObject;
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
     * @return null|CreateChatCompletionResponse|ResponseInterface
     */
    public function createChatCompletion(CreateChatCompletionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateChatCompletion($requestBody), $fetch);
    }

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
     * @return null|ResponseInterface
     */
    public function createSpeech(CreateSpeechRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateSpeech($requestBody), $fetch);
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
     * @param array $queryParameters {
     *     @var string Only return files with the given purpose.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListFilesResponse|ResponseInterface
     */
    public function listFiles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListFiles($queryParameters), $fetch);
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
     * @param string $fileId The ID of the file to use for this request.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeleteFileResponse|ResponseInterface
     */
    public function deleteFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteFile($fileId), $fetch);
    }

    /**
     * @param string $fileId The ID of the file to use for this request.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|OpenAIFile|ResponseInterface
     */
    public function retrieveFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RetrieveFile($fileId), $fetch);
    }

    /**
     * @param string $fileId The ID of the file to use for this request.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function downloadFile(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DownloadFile($fileId), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var string Identifier for the last job from the previous pagination request.
     *     @var int Number of fine-tuning jobs to retrieve.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListPaginatedFineTuningJobsResponse|ResponseInterface
     */
    public function listPaginatedFineTuningJobs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListPaginatedFineTuningJobs($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|FineTuningJob|ResponseInterface
     */
    public function createFineTuningJob(CreateFineTuningJobRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateFineTuningJob($requestBody), $fetch);
    }

    /**
     * @param string $fineTuningJobId The ID of the fine-tuning job.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FineTuningJob|ResponseInterface
     */
    public function retrieveFineTuningJob(string $fineTuningJobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RetrieveFineTuningJob($fineTuningJobId), $fetch);
    }

    /**
     * @param string $fineTuningJobId The ID of the fine-tuning job to get events for.
     * @param array $queryParameters {
     *     @var string Identifier for the last event from the previous pagination request.
     *     @var int Number of events to retrieve.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListFineTuningJobEventsResponse|ResponseInterface
     */
    public function listFineTuningEvents(string $fineTuningJobId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListFineTuningEvents($fineTuningJobId, $queryParameters), $fetch);
    }

    /**
     * @param string $fineTuningJobId The ID of the fine-tuning job to cancel.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FineTuningJob|ResponseInterface
     */
    public function cancelFineTuningJob(string $fineTuningJobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CancelFineTuningJob($fineTuningJobId), $fetch);
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

    /**
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListAssistantsResponse|ResponseInterface
     */
    public function listAssistants(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListAssistants($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|AssistantObject|ResponseInterface
     */
    public function createAssistant(CreateAssistantRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateAssistant($requestBody), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant to delete.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeleteAssistantResponse|ResponseInterface
     */
    public function deleteAssistant(string $assistantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteAssistant($assistantId), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AssistantObject|ResponseInterface
     */
    public function getAssistant(string $assistantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAssistant($assistantId), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant to modify.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|AssistantObject|ResponseInterface
     */
    public function modifyAssistant(string $assistantId, ModifyAssistantRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ModifyAssistant($assistantId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ThreadObject|ResponseInterface
     */
    public function createThread(?CreateThreadRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateThread($requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to delete.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeleteThreadResponse|ResponseInterface
     */
    public function deleteThread(string $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteThread($threadId), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ThreadObject|ResponseInterface
     */
    public function getThread(string $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetThread($threadId), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to modify. Only the `metadata` can be modified.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|ThreadObject|ResponseInterface
     */
    public function modifyThread(string $threadId, ModifyThreadRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ModifyThread($threadId, $requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) the messages belong to.
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListMessagesResponse|ResponseInterface
     */
    public function listMessages(string $threadId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListMessages($threadId, $queryParameters), $fetch);
    }

    /**
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) to create a message for.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|MessageObject|ResponseInterface
     */
    public function createMessage(string $threadId, CreateMessageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateMessage($threadId, $requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) to which this message belongs.
     * @param string $messageId The ID of the message to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|MessageObject|ResponseInterface
     */
    public function getMessage(string $threadId, string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMessage($threadId, $messageId), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to which this message belongs.
     * @param string $messageId The ID of the message to modify.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|MessageObject|ResponseInterface
     */
    public function modifyMessage(string $threadId, string $messageId, ModifyMessageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ModifyMessage($threadId, $messageId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|RunObject|ResponseInterface
     */
    public function createThreadAndRun(CreateThreadAndRunRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateThreadAndRun($requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread the run belongs to.
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListRunsResponse|ResponseInterface
     */
    public function listRuns(string $threadId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListRuns($threadId, $queryParameters), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to run.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|RunObject|ResponseInterface
     */
    public function createRun(string $threadId, CreateRunRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateRun($threadId, $requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) that was run.
     * @param string $runId The ID of the run to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|RunObject|ResponseInterface
     */
    public function getRun(string $threadId, string $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRun($threadId, $runId), $fetch);
    }

    /**
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) that was run.
     * @param string $runId The ID of the run to modify.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|RunObject|ResponseInterface
     */
    public function modifyRun(string $threadId, string $runId, ModifyRunRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ModifyRun($threadId, $runId, $requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) to which this run belongs.
     * @param string $runId The ID of the run that requires the tool output submission.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|RunObject|ResponseInterface
     */
    public function submitToolOuputsToRun(string $threadId, string $runId, SubmitToolOutputsRunRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SubmitToolOuputsToRun($threadId, $runId, $requestBody), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to which this run belongs.
     * @param string $runId The ID of the run to cancel.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|RunObject|ResponseInterface
     */
    public function cancelRun(string $threadId, string $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CancelRun($threadId, $runId), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread the run and run steps belong to.
     * @param string $runId The ID of the run the run steps belong to.
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListRunStepsResponse|ResponseInterface
     */
    public function listRunSteps(string $threadId, string $runId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListRunSteps($threadId, $runId, $queryParameters), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to which the run and run step belongs.
     * @param string $runId The ID of the run to which the run step belongs.
     * @param string $stepId The ID of the run step to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|RunStepObject|ResponseInterface
     */
    public function getRunStep(string $threadId, string $runId, string $stepId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetRunStep($threadId, $runId, $stepId), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant the file belongs to.
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListAssistantFilesResponse|ResponseInterface
     */
    public function listAssistantFiles(string $assistantId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListAssistantFiles($assistantId, $queryParameters), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant for which to create a File.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|AssistantFileObject|ResponseInterface
     */
    public function createAssistantFile(string $assistantId, CreateAssistantFileRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CreateAssistantFile($assistantId, $requestBody), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant that the file belongs to.
     * @param string $fileId The ID of the file to delete.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeleteAssistantFileResponse|ResponseInterface
     */
    public function deleteAssistantFile(string $assistantId, string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteAssistantFile($assistantId, $fileId), $fetch);
    }

    /**
     * @param string $assistantId The ID of the assistant who the file belongs to.
     * @param string $fileId The ID of the file we're getting.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AssistantFileObject|ResponseInterface
     */
    public function getAssistantFile(string $assistantId, string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAssistantFile($assistantId, $fileId), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread that the message and files belong to.
     * @param string $messageId The ID of the message that the files belongs to.
     * @param array $queryParameters {
     *     @var int A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
     *     @var string Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
     *     @var string A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
     *     @var string A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListMessageFilesResponse|ResponseInterface
     */
    public function listMessageFiles(string $threadId, string $messageId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ListMessageFiles($threadId, $messageId, $queryParameters), $fetch);
    }

    /**
     * @param string $threadId The ID of the thread to which the message and File belong.
     * @param string $messageId The ID of the message the file belongs to.
     * @param string $fileId The ID of the file being retrieved.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|MessageFileObject|ResponseInterface
     */
    public function getMessageFile(string $threadId, string $messageId, string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetMessageFile($threadId, $messageId, $fileId), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = []): static
    {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.openai.com/v1');
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
