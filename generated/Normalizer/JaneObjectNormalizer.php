<?php

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Sourceability\\OpenAIClient\\Generated\\Model\\ListEnginesResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ListEnginesResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\ListModelsResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ListModelsResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\DeleteModelResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\DeleteModelResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateCompletionRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateCompletionResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionResponseChoicesItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateCompletionResponseChoicesItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionResponseChoicesItemLogprobs' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateCompletionResponseChoicesItemLogprobsNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionResponseUsage' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateCompletionResponseUsageNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEditRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEditRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEditResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEditResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEditResponseChoicesItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEditResponseChoicesItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEditResponseChoicesItemLogprobs' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEditResponseChoicesItemLogprobsNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEditResponseUsage' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEditResponseUsageNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateImageRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateImageRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\ImagesResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ImagesResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\ImagesResponseDataItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ImagesResponseDataItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateImageEditRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateImageEditRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateImageVariationRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateImageVariationRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateModerationRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateModerationResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationResponseResultsItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateModerationResponseResultsItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationResponseResultsItemCategories' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateModerationResponseResultsItemCategoriesNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationResponseResultsItemCategoryScores' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateModerationResponseResultsItemCategoryScoresNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateSearchRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateSearchRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateSearchResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateSearchResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateSearchResponseDataItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateSearchResponseDataItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\ListFilesResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ListFilesResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateFileRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateFileRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\DeleteFileResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\DeleteFileResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateAnswerRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateAnswerRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateAnswerResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateAnswerResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateAnswerResponseSelectedDocumentsItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateAnswerResponseSelectedDocumentsItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateClassificationRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateClassificationResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationResponseSelectedExamplesItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateClassificationResponseSelectedExamplesItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateFineTuneRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateFineTuneRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\ListFineTunesResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ListFineTunesResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\ListFineTuneEventsResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ListFineTuneEventsResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEmbeddingRequest' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEmbeddingRequestNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEmbeddingResponse' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEmbeddingResponseNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEmbeddingResponseDataItem' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEmbeddingResponseDataItemNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateEmbeddingResponseUsage' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\CreateEmbeddingResponseUsageNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\Engine' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\EngineNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\Model' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\ModelNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\OpenAIFile' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\OpenAIFileNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\FineTune' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\FineTuneNormalizer', 'Sourceability\\OpenAIClient\\Generated\\Model\\FineTuneEvent' => 'Sourceability\\OpenAIClient\\Generated\\Normalizer\\FineTuneEventNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Sourceability\\OpenAIClient\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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