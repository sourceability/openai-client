<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateClassificationResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateClassificationResponseSelectedExamplesItem;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateClassificationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateClassificationResponse::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateClassificationResponse::class;
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
        $object = new CreateClassificationResponse();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('search_model', $data)) {
            $object->setSearchModel($data['search_model']);
            unset($data['search_model']);
        }
        if (\array_key_exists('completion', $data)) {
            $object->setCompletion($data['completion']);
            unset($data['completion']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        if (\array_key_exists('selected_examples', $data)) {
            $values = [];
            foreach ($data['selected_examples'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CreateClassificationResponseSelectedExamplesItem::class, 'json', $context);
            }
            $object->setSelectedExamples($values);
            unset($data['selected_examples']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('object') && $object->getObject() !== null) {
            $data['object'] = $object->getObject();
        }
        if ($object->isInitialized('model') && $object->getModel() !== null) {
            $data['model'] = $object->getModel();
        }
        if ($object->isInitialized('searchModel') && $object->getSearchModel() !== null) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('completion') && $object->getCompletion() !== null) {
            $data['completion'] = $object->getCompletion();
        }
        if ($object->isInitialized('label') && $object->getLabel() !== null) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('selectedExamples') && $object->getSelectedExamples() !== null) {
            $values = [];
            foreach ($object->getSelectedExamples() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['selected_examples'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
