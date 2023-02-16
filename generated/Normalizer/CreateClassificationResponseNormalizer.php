<?php

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationResponse';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationResponse';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateClassificationResponse();
        if (null === $data || false === \is_array($data)) {
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
            $values = array();
            foreach ($data['selected_examples'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationResponseSelectedExamplesItem', 'json', $context);
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
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('object') && null !== $object->getObject()) {
            $data['object'] = $object->getObject();
        }
        if ($object->isInitialized('model') && null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if ($object->isInitialized('searchModel') && null !== $object->getSearchModel()) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('completion') && null !== $object->getCompletion()) {
            $data['completion'] = $object->getCompletion();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('selectedExamples') && null !== $object->getSelectedExamples()) {
            $values = array();
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