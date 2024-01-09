<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\AssistantFileObject;
use Sourceability\OpenAIClient\Generated\Model\AssistantObject;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsCode;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsFunction;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsRetrieval;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionFunctionCallOption;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionFunctions;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionMessageToolCall;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionMessageToolCallChunk;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionMessageToolCallChunkFunction;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionMessageToolCallFunction;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionNamedToolChoice;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionNamedToolChoiceFunction;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestAssistantMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestAssistantMessageFunctionCall;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestFunctionMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartImage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartImageImageUrl;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartText;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestSystemMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestToolMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestUserMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionResponseMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionResponseMessageFunctionCall;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionStreamResponseDelta;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionStreamResponseDeltaFunctionCall;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionTokenLogprob;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionTokenLogprobTopLogprobsItem;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionTool;
use Sourceability\OpenAIClient\Generated\Model\CompletionUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateAssistantFileRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateAssistantRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionFunctionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionFunctionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequestResponseFormat;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionStreamResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionStreamResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionStreamResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Model\CreateEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponseUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateFileRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequestHyperparameters;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuningJobRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuningJobRequestHyperparameters;
use Sourceability\OpenAIClient\Generated\Model\CreateImageEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateMessageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItem;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategories;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategoryScores;
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
use Sourceability\OpenAIClient\Generated\Model\DeleteMessageResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteModelResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteThreadResponse;
use Sourceability\OpenAIClient\Generated\Model\Embedding;
use Sourceability\OpenAIClient\Generated\Model\Error;
use Sourceability\OpenAIClient\Generated\Model\ErrorResponse;
use Sourceability\OpenAIClient\Generated\Model\FineTune;
use Sourceability\OpenAIClient\Generated\Model\FineTuneEvent;
use Sourceability\OpenAIClient\Generated\Model\FineTuneHyperparams;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJob;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJobError;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJobEvent;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJobHyperparameters;
use Sourceability\OpenAIClient\Generated\Model\FunctionObject;
use Sourceability\OpenAIClient\Generated\Model\Image;
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
use Sourceability\OpenAIClient\Generated\Model\ListThreadsResponse;
use Sourceability\OpenAIClient\Generated\Model\MessageContentImageFileObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentImageFileObjectImageFile;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFileCitationObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFileCitationObjectFileCitation;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFilePathObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFilePathObjectFilePath;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextObjectText;
use Sourceability\OpenAIClient\Generated\Model\MessageFileObject;
use Sourceability\OpenAIClient\Generated\Model\MessageObject;
use Sourceability\OpenAIClient\Generated\Model\Model;
use Sourceability\OpenAIClient\Generated\Model\ModifyAssistantRequest;
use Sourceability\OpenAIClient\Generated\Model\ModifyMessageRequest;
use Sourceability\OpenAIClient\Generated\Model\ModifyRunRequest;
use Sourceability\OpenAIClient\Generated\Model\ModifyThreadRequest;
use Sourceability\OpenAIClient\Generated\Model\OpenAIFile;
use Sourceability\OpenAIClient\Generated\Model\RunObject;
use Sourceability\OpenAIClient\Generated\Model\RunObjectLastError;
use Sourceability\OpenAIClient\Generated\Model\RunObjectRequiredAction;
use Sourceability\OpenAIClient\Generated\Model\RunObjectRequiredActionSubmitToolOutputs;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsMessageCreationObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsMessageCreationObjectMessageCreation;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsCodeObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsCodeObjectCodeInterpreter;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsCodeOutputImageObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsCodeOutputImageObjectImage;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsCodeOutputLogsObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsFunctionObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsFunctionObjectFunction;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepDetailsToolCallsRetrievalObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepObjectLastError;
use Sourceability\OpenAIClient\Generated\Model\RunToolCallObject;
use Sourceability\OpenAIClient\Generated\Model\RunToolCallObjectFunction;
use Sourceability\OpenAIClient\Generated\Model\SubmitToolOutputsRunRequest;
use Sourceability\OpenAIClient\Generated\Model\SubmitToolOutputsRunRequestToolOutputsItem;
use Sourceability\OpenAIClient\Generated\Model\ThreadObject;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ReferenceNormalizer;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    protected array $normalizers = [
        Error::class => ErrorNormalizer::class,
        ErrorResponse::class => ErrorResponseNormalizer::class,
        ListModelsResponse::class => ListModelsResponseNormalizer::class,
        DeleteModelResponse::class => DeleteModelResponseNormalizer::class,
        CreateCompletionRequest::class => CreateCompletionRequestNormalizer::class,
        CreateCompletionResponse::class => CreateCompletionResponseNormalizer::class,
        CreateCompletionResponseChoicesItem::class => CreateCompletionResponseChoicesItemNormalizer::class,
        CreateCompletionResponseChoicesItemLogprobs::class => CreateCompletionResponseChoicesItemLogprobsNormalizer::class,
        ChatCompletionRequestMessageContentPartImage::class => ChatCompletionRequestMessageContentPartImageNormalizer::class,
        ChatCompletionRequestMessageContentPartImageImageUrl::class => ChatCompletionRequestMessageContentPartImageImageUrlNormalizer::class,
        ChatCompletionRequestMessageContentPartText::class => ChatCompletionRequestMessageContentPartTextNormalizer::class,
        ChatCompletionRequestSystemMessage::class => ChatCompletionRequestSystemMessageNormalizer::class,
        ChatCompletionRequestUserMessage::class => ChatCompletionRequestUserMessageNormalizer::class,
        ChatCompletionRequestAssistantMessage::class => ChatCompletionRequestAssistantMessageNormalizer::class,
        ChatCompletionRequestAssistantMessageFunctionCall::class => ChatCompletionRequestAssistantMessageFunctionCallNormalizer::class,
        ChatCompletionRequestToolMessage::class => ChatCompletionRequestToolMessageNormalizer::class,
        ChatCompletionRequestFunctionMessage::class => ChatCompletionRequestFunctionMessageNormalizer::class,
        ChatCompletionFunctions::class => ChatCompletionFunctionsNormalizer::class,
        ChatCompletionFunctionCallOption::class => ChatCompletionFunctionCallOptionNormalizer::class,
        ChatCompletionTool::class => ChatCompletionToolNormalizer::class,
        FunctionObject::class => FunctionObjectNormalizer::class,
        ChatCompletionNamedToolChoice::class => ChatCompletionNamedToolChoiceNormalizer::class,
        ChatCompletionNamedToolChoiceFunction::class => ChatCompletionNamedToolChoiceFunctionNormalizer::class,
        ChatCompletionMessageToolCall::class => ChatCompletionMessageToolCallNormalizer::class,
        ChatCompletionMessageToolCallFunction::class => ChatCompletionMessageToolCallFunctionNormalizer::class,
        ChatCompletionMessageToolCallChunk::class => ChatCompletionMessageToolCallChunkNormalizer::class,
        ChatCompletionMessageToolCallChunkFunction::class => ChatCompletionMessageToolCallChunkFunctionNormalizer::class,
        ChatCompletionResponseMessage::class => ChatCompletionResponseMessageNormalizer::class,
        ChatCompletionResponseMessageFunctionCall::class => ChatCompletionResponseMessageFunctionCallNormalizer::class,
        ChatCompletionStreamResponseDelta::class => ChatCompletionStreamResponseDeltaNormalizer::class,
        ChatCompletionStreamResponseDeltaFunctionCall::class => ChatCompletionStreamResponseDeltaFunctionCallNormalizer::class,
        CreateChatCompletionRequest::class => CreateChatCompletionRequestNormalizer::class,
        CreateChatCompletionRequestResponseFormat::class => CreateChatCompletionRequestResponseFormatNormalizer::class,
        CreateChatCompletionResponse::class => CreateChatCompletionResponseNormalizer::class,
        CreateChatCompletionResponseChoicesItem::class => CreateChatCompletionResponseChoicesItemNormalizer::class,
        CreateChatCompletionResponseChoicesItemLogprobs::class => CreateChatCompletionResponseChoicesItemLogprobsNormalizer::class,
        CreateChatCompletionFunctionResponse::class => CreateChatCompletionFunctionResponseNormalizer::class,
        CreateChatCompletionFunctionResponseChoicesItem::class => CreateChatCompletionFunctionResponseChoicesItemNormalizer::class,
        ChatCompletionTokenLogprob::class => ChatCompletionTokenLogprobNormalizer::class,
        ChatCompletionTokenLogprobTopLogprobsItem::class => ChatCompletionTokenLogprobTopLogprobsItemNormalizer::class,
        ListPaginatedFineTuningJobsResponse::class => ListPaginatedFineTuningJobsResponseNormalizer::class,
        CreateChatCompletionStreamResponse::class => CreateChatCompletionStreamResponseNormalizer::class,
        CreateChatCompletionStreamResponseChoicesItem::class => CreateChatCompletionStreamResponseChoicesItemNormalizer::class,
        CreateChatCompletionStreamResponseChoicesItemLogprobs::class => CreateChatCompletionStreamResponseChoicesItemLogprobsNormalizer::class,
        CreateEditRequest::class => CreateEditRequestNormalizer::class,
        CreateEditResponse::class => CreateEditResponseNormalizer::class,
        CreateEditResponseChoicesItem::class => CreateEditResponseChoicesItemNormalizer::class,
        CreateImageRequest::class => CreateImageRequestNormalizer::class,
        ImagesResponse::class => ImagesResponseNormalizer::class,
        Image::class => ImageNormalizer::class,
        CreateImageEditRequest::class => CreateImageEditRequestNormalizer::class,
        CreateImageVariationRequest::class => CreateImageVariationRequestNormalizer::class,
        CreateModerationRequest::class => CreateModerationRequestNormalizer::class,
        CreateModerationResponse::class => CreateModerationResponseNormalizer::class,
        CreateModerationResponseResultsItem::class => CreateModerationResponseResultsItemNormalizer::class,
        CreateModerationResponseResultsItemCategories::class => CreateModerationResponseResultsItemCategoriesNormalizer::class,
        CreateModerationResponseResultsItemCategoryScores::class => CreateModerationResponseResultsItemCategoryScoresNormalizer::class,
        ListFilesResponse::class => ListFilesResponseNormalizer::class,
        CreateFileRequest::class => CreateFileRequestNormalizer::class,
        DeleteFileResponse::class => DeleteFileResponseNormalizer::class,
        CreateFineTuningJobRequest::class => CreateFineTuningJobRequestNormalizer::class,
        CreateFineTuningJobRequestHyperparameters::class => CreateFineTuningJobRequestHyperparametersNormalizer::class,
        ListFineTuningJobEventsResponse::class => ListFineTuningJobEventsResponseNormalizer::class,
        CreateFineTuneRequest::class => CreateFineTuneRequestNormalizer::class,
        CreateFineTuneRequestHyperparameters::class => CreateFineTuneRequestHyperparametersNormalizer::class,
        ListFineTunesResponse::class => ListFineTunesResponseNormalizer::class,
        ListFineTuneEventsResponse::class => ListFineTuneEventsResponseNormalizer::class,
        CreateEmbeddingRequest::class => CreateEmbeddingRequestNormalizer::class,
        CreateEmbeddingResponse::class => CreateEmbeddingResponseNormalizer::class,
        CreateEmbeddingResponseUsage::class => CreateEmbeddingResponseUsageNormalizer::class,
        CreateTranscriptionRequest::class => CreateTranscriptionRequestNormalizer::class,
        CreateTranscriptionResponse::class => CreateTranscriptionResponseNormalizer::class,
        CreateTranslationRequest::class => CreateTranslationRequestNormalizer::class,
        CreateTranslationResponse::class => CreateTranslationResponseNormalizer::class,
        CreateSpeechRequest::class => CreateSpeechRequestNormalizer::class,
        Model::class => ModelNormalizer::class,
        OpenAIFile::class => OpenAIFileNormalizer::class,
        Embedding::class => EmbeddingNormalizer::class,
        FineTuningJob::class => FineTuningJobNormalizer::class,
        FineTuningJobError::class => FineTuningJobErrorNormalizer::class,
        FineTuningJobHyperparameters::class => FineTuningJobHyperparametersNormalizer::class,
        FineTuningJobEvent::class => FineTuningJobEventNormalizer::class,
        FineTune::class => FineTuneNormalizer::class,
        FineTuneHyperparams::class => FineTuneHyperparamsNormalizer::class,
        FineTuneEvent::class => FineTuneEventNormalizer::class,
        CompletionUsage::class => CompletionUsageNormalizer::class,
        AssistantObject::class => AssistantObjectNormalizer::class,
        CreateAssistantRequest::class => CreateAssistantRequestNormalizer::class,
        ModifyAssistantRequest::class => ModifyAssistantRequestNormalizer::class,
        DeleteAssistantResponse::class => DeleteAssistantResponseNormalizer::class,
        ListAssistantsResponse::class => ListAssistantsResponseNormalizer::class,
        AssistantToolsCode::class => AssistantToolsCodeNormalizer::class,
        AssistantToolsRetrieval::class => AssistantToolsRetrievalNormalizer::class,
        AssistantToolsFunction::class => AssistantToolsFunctionNormalizer::class,
        RunObject::class => RunObjectNormalizer::class,
        RunObjectRequiredAction::class => RunObjectRequiredActionNormalizer::class,
        RunObjectRequiredActionSubmitToolOutputs::class => RunObjectRequiredActionSubmitToolOutputsNormalizer::class,
        RunObjectLastError::class => RunObjectLastErrorNormalizer::class,
        CreateRunRequest::class => CreateRunRequestNormalizer::class,
        ListRunsResponse::class => ListRunsResponseNormalizer::class,
        ModifyRunRequest::class => ModifyRunRequestNormalizer::class,
        SubmitToolOutputsRunRequest::class => SubmitToolOutputsRunRequestNormalizer::class,
        SubmitToolOutputsRunRequestToolOutputsItem::class => SubmitToolOutputsRunRequestToolOutputsItemNormalizer::class,
        RunToolCallObject::class => RunToolCallObjectNormalizer::class,
        RunToolCallObjectFunction::class => RunToolCallObjectFunctionNormalizer::class,
        CreateThreadAndRunRequest::class => CreateThreadAndRunRequestNormalizer::class,
        ThreadObject::class => ThreadObjectNormalizer::class,
        CreateThreadRequest::class => CreateThreadRequestNormalizer::class,
        ModifyThreadRequest::class => ModifyThreadRequestNormalizer::class,
        DeleteThreadResponse::class => DeleteThreadResponseNormalizer::class,
        ListThreadsResponse::class => ListThreadsResponseNormalizer::class,
        MessageObject::class => MessageObjectNormalizer::class,
        CreateMessageRequest::class => CreateMessageRequestNormalizer::class,
        ModifyMessageRequest::class => ModifyMessageRequestNormalizer::class,
        DeleteMessageResponse::class => DeleteMessageResponseNormalizer::class,
        ListMessagesResponse::class => ListMessagesResponseNormalizer::class,
        MessageContentImageFileObject::class => MessageContentImageFileObjectNormalizer::class,
        MessageContentImageFileObjectImageFile::class => MessageContentImageFileObjectImageFileNormalizer::class,
        MessageContentTextObject::class => MessageContentTextObjectNormalizer::class,
        MessageContentTextObjectText::class => MessageContentTextObjectTextNormalizer::class,
        MessageContentTextAnnotationsFileCitationObject::class => MessageContentTextAnnotationsFileCitationObjectNormalizer::class,
        MessageContentTextAnnotationsFileCitationObjectFileCitation::class => MessageContentTextAnnotationsFileCitationObjectFileCitationNormalizer::class,
        MessageContentTextAnnotationsFilePathObject::class => MessageContentTextAnnotationsFilePathObjectNormalizer::class,
        MessageContentTextAnnotationsFilePathObjectFilePath::class => MessageContentTextAnnotationsFilePathObjectFilePathNormalizer::class,
        RunStepObject::class => RunStepObjectNormalizer::class,
        RunStepObjectLastError::class => RunStepObjectLastErrorNormalizer::class,
        ListRunStepsResponse::class => ListRunStepsResponseNormalizer::class,
        RunStepDetailsMessageCreationObject::class => RunStepDetailsMessageCreationObjectNormalizer::class,
        RunStepDetailsMessageCreationObjectMessageCreation::class => RunStepDetailsMessageCreationObjectMessageCreationNormalizer::class,
        RunStepDetailsToolCallsObject::class => RunStepDetailsToolCallsObjectNormalizer::class,
        RunStepDetailsToolCallsCodeObject::class => RunStepDetailsToolCallsCodeObjectNormalizer::class,
        RunStepDetailsToolCallsCodeObjectCodeInterpreter::class => RunStepDetailsToolCallsCodeObjectCodeInterpreterNormalizer::class,
        RunStepDetailsToolCallsCodeOutputLogsObject::class => RunStepDetailsToolCallsCodeOutputLogsObjectNormalizer::class,
        RunStepDetailsToolCallsCodeOutputImageObject::class => RunStepDetailsToolCallsCodeOutputImageObjectNormalizer::class,
        RunStepDetailsToolCallsCodeOutputImageObjectImage::class => RunStepDetailsToolCallsCodeOutputImageObjectImageNormalizer::class,
        RunStepDetailsToolCallsRetrievalObject::class => RunStepDetailsToolCallsRetrievalObjectNormalizer::class,
        RunStepDetailsToolCallsFunctionObject::class => RunStepDetailsToolCallsFunctionObjectNormalizer::class,
        RunStepDetailsToolCallsFunctionObjectFunction::class => RunStepDetailsToolCallsFunctionObjectFunctionNormalizer::class,
        AssistantFileObject::class => AssistantFileObjectNormalizer::class,
        CreateAssistantFileRequest::class => CreateAssistantFileRequestNormalizer::class,
        DeleteAssistantFileResponse::class => DeleteAssistantFileResponseNormalizer::class,
        ListAssistantFilesResponse::class => ListAssistantFilesResponseNormalizer::class,
        MessageFileObject::class => MessageFileObjectNormalizer::class,
        ListMessageFilesResponse::class => ListMessageFilesResponseNormalizer::class,
        Reference::class => ReferenceNormalizer::class,
    ];

    protected array $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists($data::class, $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[$object::class];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            Error::class => false,
            ErrorResponse::class => false,
            ListModelsResponse::class => false,
            DeleteModelResponse::class => false,
            CreateCompletionRequest::class => false,
            CreateCompletionResponse::class => false,
            CreateCompletionResponseChoicesItem::class => false,
            CreateCompletionResponseChoicesItemLogprobs::class => false,
            ChatCompletionRequestMessageContentPartImage::class => false,
            ChatCompletionRequestMessageContentPartImageImageUrl::class => false,
            ChatCompletionRequestMessageContentPartText::class => false,
            ChatCompletionRequestSystemMessage::class => false,
            ChatCompletionRequestUserMessage::class => false,
            ChatCompletionRequestAssistantMessage::class => false,
            ChatCompletionRequestAssistantMessageFunctionCall::class => false,
            ChatCompletionRequestToolMessage::class => false,
            ChatCompletionRequestFunctionMessage::class => false,
            ChatCompletionFunctions::class => false,
            ChatCompletionFunctionCallOption::class => false,
            ChatCompletionTool::class => false,
            FunctionObject::class => false,
            ChatCompletionNamedToolChoice::class => false,
            ChatCompletionNamedToolChoiceFunction::class => false,
            ChatCompletionMessageToolCall::class => false,
            ChatCompletionMessageToolCallFunction::class => false,
            ChatCompletionMessageToolCallChunk::class => false,
            ChatCompletionMessageToolCallChunkFunction::class => false,
            ChatCompletionResponseMessage::class => false,
            ChatCompletionResponseMessageFunctionCall::class => false,
            ChatCompletionStreamResponseDelta::class => false,
            ChatCompletionStreamResponseDeltaFunctionCall::class => false,
            CreateChatCompletionRequest::class => false,
            CreateChatCompletionRequestResponseFormat::class => false,
            CreateChatCompletionResponse::class => false,
            CreateChatCompletionResponseChoicesItem::class => false,
            CreateChatCompletionResponseChoicesItemLogprobs::class => false,
            CreateChatCompletionFunctionResponse::class => false,
            CreateChatCompletionFunctionResponseChoicesItem::class => false,
            ChatCompletionTokenLogprob::class => false,
            ChatCompletionTokenLogprobTopLogprobsItem::class => false,
            ListPaginatedFineTuningJobsResponse::class => false,
            CreateChatCompletionStreamResponse::class => false,
            CreateChatCompletionStreamResponseChoicesItem::class => false,
            CreateChatCompletionStreamResponseChoicesItemLogprobs::class => false,
            CreateEditRequest::class => false,
            CreateEditResponse::class => false,
            CreateEditResponseChoicesItem::class => false,
            CreateImageRequest::class => false,
            ImagesResponse::class => false,
            Image::class => false,
            CreateImageEditRequest::class => false,
            CreateImageVariationRequest::class => false,
            CreateModerationRequest::class => false,
            CreateModerationResponse::class => false,
            CreateModerationResponseResultsItem::class => false,
            CreateModerationResponseResultsItemCategories::class => false,
            CreateModerationResponseResultsItemCategoryScores::class => false,
            ListFilesResponse::class => false,
            CreateFileRequest::class => false,
            DeleteFileResponse::class => false,
            CreateFineTuningJobRequest::class => false,
            CreateFineTuningJobRequestHyperparameters::class => false,
            ListFineTuningJobEventsResponse::class => false,
            CreateFineTuneRequest::class => false,
            CreateFineTuneRequestHyperparameters::class => false,
            ListFineTunesResponse::class => false,
            ListFineTuneEventsResponse::class => false,
            CreateEmbeddingRequest::class => false,
            CreateEmbeddingResponse::class => false,
            CreateEmbeddingResponseUsage::class => false,
            CreateTranscriptionRequest::class => false,
            CreateTranscriptionResponse::class => false,
            CreateTranslationRequest::class => false,
            CreateTranslationResponse::class => false,
            CreateSpeechRequest::class => false,
            Model::class => false,
            OpenAIFile::class => false,
            Embedding::class => false,
            FineTuningJob::class => false,
            FineTuningJobError::class => false,
            FineTuningJobHyperparameters::class => false,
            FineTuningJobEvent::class => false,
            FineTune::class => false,
            FineTuneHyperparams::class => false,
            FineTuneEvent::class => false,
            CompletionUsage::class => false,
            AssistantObject::class => false,
            CreateAssistantRequest::class => false,
            ModifyAssistantRequest::class => false,
            DeleteAssistantResponse::class => false,
            ListAssistantsResponse::class => false,
            AssistantToolsCode::class => false,
            AssistantToolsRetrieval::class => false,
            AssistantToolsFunction::class => false,
            RunObject::class => false,
            RunObjectRequiredAction::class => false,
            RunObjectRequiredActionSubmitToolOutputs::class => false,
            RunObjectLastError::class => false,
            CreateRunRequest::class => false,
            ListRunsResponse::class => false,
            ModifyRunRequest::class => false,
            SubmitToolOutputsRunRequest::class => false,
            SubmitToolOutputsRunRequestToolOutputsItem::class => false,
            RunToolCallObject::class => false,
            RunToolCallObjectFunction::class => false,
            CreateThreadAndRunRequest::class => false,
            ThreadObject::class => false,
            CreateThreadRequest::class => false,
            ModifyThreadRequest::class => false,
            DeleteThreadResponse::class => false,
            ListThreadsResponse::class => false,
            MessageObject::class => false,
            CreateMessageRequest::class => false,
            ModifyMessageRequest::class => false,
            DeleteMessageResponse::class => false,
            ListMessagesResponse::class => false,
            MessageContentImageFileObject::class => false,
            MessageContentImageFileObjectImageFile::class => false,
            MessageContentTextObject::class => false,
            MessageContentTextObjectText::class => false,
            MessageContentTextAnnotationsFileCitationObject::class => false,
            MessageContentTextAnnotationsFileCitationObjectFileCitation::class => false,
            MessageContentTextAnnotationsFilePathObject::class => false,
            MessageContentTextAnnotationsFilePathObjectFilePath::class => false,
            RunStepObject::class => false,
            RunStepObjectLastError::class => false,
            ListRunStepsResponse::class => false,
            RunStepDetailsMessageCreationObject::class => false,
            RunStepDetailsMessageCreationObjectMessageCreation::class => false,
            RunStepDetailsToolCallsObject::class => false,
            RunStepDetailsToolCallsCodeObject::class => false,
            RunStepDetailsToolCallsCodeObjectCodeInterpreter::class => false,
            RunStepDetailsToolCallsCodeOutputLogsObject::class => false,
            RunStepDetailsToolCallsCodeOutputImageObject::class => false,
            RunStepDetailsToolCallsCodeOutputImageObjectImage::class => false,
            RunStepDetailsToolCallsRetrievalObject::class => false,
            RunStepDetailsToolCallsFunctionObject::class => false,
            RunStepDetailsToolCallsFunctionObjectFunction::class => false,
            AssistantFileObject::class => false,
            CreateAssistantFileRequest::class => false,
            DeleteAssistantFileResponse::class => false,
            ListAssistantFilesResponse::class => false,
            MessageFileObject::class => false,
            ListMessageFilesResponse::class => false,
            Reference::class => false,
        ];
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}
