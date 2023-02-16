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
class CreateClassificationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateClassificationRequest';
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
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateClassificationRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (double) $data['temperature'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values = array();
            foreach ($data['examples'] as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setExamples($values);
        }
        elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($data['file']);
        }
        elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_2 = array();
            foreach ($data['labels'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLabels($values_2);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('search_model', $data) && $data['search_model'] !== null) {
            $object->setSearchModel($data['search_model']);
        }
        elseif (\array_key_exists('search_model', $data) && $data['search_model'] === null) {
            $object->setSearchModel(null);
        }
        if (\array_key_exists('temperature', $data) && $data['temperature'] !== null) {
            $object->setTemperature($data['temperature']);
        }
        elseif (\array_key_exists('temperature', $data) && $data['temperature'] === null) {
            $object->setTemperature(null);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($data['logprobs']);
        }
        elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
        }
        if (\array_key_exists('max_examples', $data) && $data['max_examples'] !== null) {
            $object->setMaxExamples($data['max_examples']);
        }
        elseif (\array_key_exists('max_examples', $data) && $data['max_examples'] === null) {
            $object->setMaxExamples(null);
        }
        if (\array_key_exists('logit_bias', $data) && $data['logit_bias'] !== null) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['logit_bias'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setLogitBias($values_3);
        }
        elseif (\array_key_exists('logit_bias', $data) && $data['logit_bias'] === null) {
            $object->setLogitBias(null);
        }
        if (\array_key_exists('return_prompt', $data) && $data['return_prompt'] !== null) {
            $object->setReturnPrompt($data['return_prompt']);
        }
        elseif (\array_key_exists('return_prompt', $data) && $data['return_prompt'] === null) {
            $object->setReturnPrompt(null);
        }
        if (\array_key_exists('return_metadata', $data) && $data['return_metadata'] !== null) {
            $object->setReturnMetadata($data['return_metadata']);
        }
        elseif (\array_key_exists('return_metadata', $data) && $data['return_metadata'] === null) {
            $object->setReturnMetadata(null);
        }
        if (\array_key_exists('expand', $data) && $data['expand'] !== null) {
            $values_4 = array();
            foreach ($data['expand'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setExpand($values_4);
        }
        elseif (\array_key_exists('expand', $data) && $data['expand'] === null) {
            $object->setExpand(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['model'] = $object->getModel();
        $data['query'] = $object->getQuery();
        if ($object->isInitialized('examples') && null !== $object->getExamples()) {
            $values = array();
            foreach ($object->getExamples() as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['examples'] = $values;
        }
        if ($object->isInitialized('file') && null !== $object->getFile()) {
            $data['file'] = $object->getFile();
        }
        if ($object->isInitialized('labels') && null !== $object->getLabels()) {
            $values_2 = array();
            foreach ($object->getLabels() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['labels'] = $values_2;
        }
        if ($object->isInitialized('searchModel') && null !== $object->getSearchModel()) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('temperature') && null !== $object->getTemperature()) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('logprobs') && null !== $object->getLogprobs()) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('maxExamples') && null !== $object->getMaxExamples()) {
            $data['max_examples'] = $object->getMaxExamples();
        }
        if ($object->isInitialized('logitBias') && null !== $object->getLogitBias()) {
            $values_3 = array();
            foreach ($object->getLogitBias() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['logit_bias'] = $values_3;
        }
        if ($object->isInitialized('returnPrompt') && null !== $object->getReturnPrompt()) {
            $data['return_prompt'] = $object->getReturnPrompt();
        }
        if ($object->isInitialized('returnMetadata') && null !== $object->getReturnMetadata()) {
            $data['return_metadata'] = $object->getReturnMetadata();
        }
        if ($object->isInitialized('expand') && null !== $object->getExpand()) {
            $values_4 = array();
            foreach ($object->getExpand() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['expand'] = $values_4;
        }
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        return $data;
    }
}