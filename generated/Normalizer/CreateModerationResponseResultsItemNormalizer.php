<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItem;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategories;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategoryScores;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateModerationResponseResultsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateModerationResponseResultsItem::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateModerationResponseResultsItem::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CreateModerationResponseResultsItem();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('flagged', $data)) {
            $object->setFlagged($data['flagged']);
            unset($data['flagged']);
        }
        if (\array_key_exists('categories', $data)) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], CreateModerationResponseResultsItemCategories::class, 'json', $context));
            unset($data['categories']);
        }
        if (\array_key_exists('category_scores', $data)) {
            $object->setCategoryScores($this->denormalizer->denormalize($data['category_scores'], CreateModerationResponseResultsItemCategoryScores::class, 'json', $context));
            unset($data['category_scores']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['flagged'] = $object->getFlagged();
        $data['categories'] = $this->normalizer->normalize($object->getCategories(), 'json', $context);
        $data['category_scores'] = $this->normalizer->normalize($object->getCategoryScores(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
