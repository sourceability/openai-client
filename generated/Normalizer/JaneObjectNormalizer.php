<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionResponseMessage;
use Sourceability\OpenAIClient\Generated\Model\CreateAnswerRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateAnswerResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateAnswerResponseSelectedDocumentsItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateClassificationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateClassificationResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateClassificationResponseSelectedExamplesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionResponseUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponseUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponseDataItem;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingResponseUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateFileRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageEditRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateImageVariationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItem;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategories;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategoryScores;
use Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateSearchResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateSearchResponseDataItem;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateTranslationResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteFileResponse;
use Sourceability\OpenAIClient\Generated\Model\DeleteModelResponse;
use Sourceability\OpenAIClient\Generated\Model\Engine;
use Sourceability\OpenAIClient\Generated\Model\FineTune;
use Sourceability\OpenAIClient\Generated\Model\FineTuneEvent;
use Sourceability\OpenAIClient\Generated\Model\ImagesResponse;
use Sourceability\OpenAIClient\Generated\Model\ImagesResponseDataItem;
use Sourceability\OpenAIClient\Generated\Model\ListEnginesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFilesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTuneEventsResponse;
use Sourceability\OpenAIClient\Generated\Model\ListFineTunesResponse;
use Sourceability\OpenAIClient\Generated\Model\ListModelsResponse;
use Sourceability\OpenAIClient\Generated\Model\Model;
use Sourceability\OpenAIClient\Generated\Model\OpenAIFile;
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
        ListEnginesResponse::class => ListEnginesResponseNormalizer::class,
        ListModelsResponse::class => ListModelsResponseNormalizer::class,
        DeleteModelResponse::class => DeleteModelResponseNormalizer::class,
        CreateCompletionRequest::class => CreateCompletionRequestNormalizer::class,
        CreateCompletionResponse::class => CreateCompletionResponseNormalizer::class,
        CreateCompletionResponseChoicesItem::class => CreateCompletionResponseChoicesItemNormalizer::class,
        CreateCompletionResponseChoicesItemLogprobs::class => CreateCompletionResponseChoicesItemLogprobsNormalizer::class,
        CreateCompletionResponseUsage::class => CreateCompletionResponseUsageNormalizer::class,
        ChatCompletionRequestMessage::class => ChatCompletionRequestMessageNormalizer::class,
        ChatCompletionResponseMessage::class => ChatCompletionResponseMessageNormalizer::class,
        CreateChatCompletionRequest::class => CreateChatCompletionRequestNormalizer::class,
        CreateChatCompletionResponse::class => CreateChatCompletionResponseNormalizer::class,
        CreateChatCompletionResponseChoicesItem::class => CreateChatCompletionResponseChoicesItemNormalizer::class,
        CreateChatCompletionResponseUsage::class => CreateChatCompletionResponseUsageNormalizer::class,
        CreateEditRequest::class => CreateEditRequestNormalizer::class,
        CreateEditResponse::class => CreateEditResponseNormalizer::class,
        CreateEditResponseChoicesItem::class => CreateEditResponseChoicesItemNormalizer::class,
        CreateEditResponseChoicesItemLogprobs::class => CreateEditResponseChoicesItemLogprobsNormalizer::class,
        CreateEditResponseUsage::class => CreateEditResponseUsageNormalizer::class,
        CreateImageRequest::class => CreateImageRequestNormalizer::class,
        ImagesResponse::class => ImagesResponseNormalizer::class,
        ImagesResponseDataItem::class => ImagesResponseDataItemNormalizer::class,
        CreateImageEditRequest::class => CreateImageEditRequestNormalizer::class,
        CreateImageVariationRequest::class => CreateImageVariationRequestNormalizer::class,
        CreateModerationRequest::class => CreateModerationRequestNormalizer::class,
        CreateModerationResponse::class => CreateModerationResponseNormalizer::class,
        CreateModerationResponseResultsItem::class => CreateModerationResponseResultsItemNormalizer::class,
        CreateModerationResponseResultsItemCategories::class => CreateModerationResponseResultsItemCategoriesNormalizer::class,
        CreateModerationResponseResultsItemCategoryScores::class => CreateModerationResponseResultsItemCategoryScoresNormalizer::class,
        CreateSearchRequest::class => CreateSearchRequestNormalizer::class,
        CreateSearchResponse::class => CreateSearchResponseNormalizer::class,
        CreateSearchResponseDataItem::class => CreateSearchResponseDataItemNormalizer::class,
        ListFilesResponse::class => ListFilesResponseNormalizer::class,
        CreateFileRequest::class => CreateFileRequestNormalizer::class,
        DeleteFileResponse::class => DeleteFileResponseNormalizer::class,
        CreateAnswerRequest::class => CreateAnswerRequestNormalizer::class,
        CreateAnswerResponse::class => CreateAnswerResponseNormalizer::class,
        CreateAnswerResponseSelectedDocumentsItem::class => CreateAnswerResponseSelectedDocumentsItemNormalizer::class,
        CreateClassificationRequest::class => CreateClassificationRequestNormalizer::class,
        CreateClassificationResponse::class => CreateClassificationResponseNormalizer::class,
        CreateClassificationResponseSelectedExamplesItem::class => CreateClassificationResponseSelectedExamplesItemNormalizer::class,
        CreateFineTuneRequest::class => CreateFineTuneRequestNormalizer::class,
        ListFineTunesResponse::class => ListFineTunesResponseNormalizer::class,
        ListFineTuneEventsResponse::class => ListFineTuneEventsResponseNormalizer::class,
        CreateEmbeddingRequest::class => CreateEmbeddingRequestNormalizer::class,
        CreateEmbeddingResponse::class => CreateEmbeddingResponseNormalizer::class,
        CreateEmbeddingResponseDataItem::class => CreateEmbeddingResponseDataItemNormalizer::class,
        CreateEmbeddingResponseUsage::class => CreateEmbeddingResponseUsageNormalizer::class,
        CreateTranscriptionRequest::class => CreateTranscriptionRequestNormalizer::class,
        CreateTranscriptionResponse::class => CreateTranscriptionResponseNormalizer::class,
        CreateTranslationRequest::class => CreateTranslationRequestNormalizer::class,
        CreateTranslationResponse::class => CreateTranslationResponseNormalizer::class,
        Engine::class => EngineNormalizer::class,
        Model::class => ModelNormalizer::class,
        OpenAIFile::class => OpenAIFileNormalizer::class,
        FineTune::class => FineTuneNormalizer::class,
        FineTuneEvent::class => FineTuneEventNormalizer::class,
        '\\' . Reference::class => '\\' . ReferenceNormalizer::class,
    ];

    protected array $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null): bool
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
