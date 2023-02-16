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
class CreateAnswerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateAnswerRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateAnswerRequest';
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
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateAnswerRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (double) $data['temperature'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('question', $data)) {
            $object->setQuestion($data['question']);
        }
        if (\array_key_exists('examples', $data)) {
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
        if (\array_key_exists('examples_context', $data)) {
            $object->setExamplesContext($data['examples_context']);
        }
        if (\array_key_exists('documents', $data) && $data['documents'] !== null) {
            $values_2 = array();
            foreach ($data['documents'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDocuments($values_2);
        }
        elseif (\array_key_exists('documents', $data) && $data['documents'] === null) {
            $object->setDocuments(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($data['file']);
        }
        elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('search_model', $data) && $data['search_model'] !== null) {
            $object->setSearchModel($data['search_model']);
        }
        elseif (\array_key_exists('search_model', $data) && $data['search_model'] === null) {
            $object->setSearchModel(null);
        }
        if (\array_key_exists('max_rerank', $data) && $data['max_rerank'] !== null) {
            $object->setMaxRerank($data['max_rerank']);
        }
        elseif (\array_key_exists('max_rerank', $data) && $data['max_rerank'] === null) {
            $object->setMaxRerank(null);
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
        if (\array_key_exists('max_tokens', $data) && $data['max_tokens'] !== null) {
            $object->setMaxTokens($data['max_tokens']);
        }
        elseif (\array_key_exists('max_tokens', $data) && $data['max_tokens'] === null) {
            $object->setMaxTokens(null);
        }
        if (\array_key_exists('stop', $data) && $data['stop'] !== null) {
            $object->setStop($data['stop']);
        }
        elseif (\array_key_exists('stop', $data) && $data['stop'] === null) {
            $object->setStop(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
        }
        elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
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
        if (\array_key_exists('return_metadata', $data) && $data['return_metadata'] !== null) {
            $object->setReturnMetadata($data['return_metadata']);
        }
        elseif (\array_key_exists('return_metadata', $data) && $data['return_metadata'] === null) {
            $object->setReturnMetadata(null);
        }
        if (\array_key_exists('return_prompt', $data) && $data['return_prompt'] !== null) {
            $object->setReturnPrompt($data['return_prompt']);
        }
        elseif (\array_key_exists('return_prompt', $data) && $data['return_prompt'] === null) {
            $object->setReturnPrompt(null);
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
        $data['question'] = $object->getQuestion();
        $values = array();
        foreach ($object->getExamples() as $value) {
            $values_1 = array();
            foreach ($value as $value_1) {
                $values_1[] = $value_1;
            }
            $values[] = $values_1;
        }
        $data['examples'] = $values;
        $data['examples_context'] = $object->getExamplesContext();
        if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
            $values_2 = array();
            foreach ($object->getDocuments() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['documents'] = $values_2;
        }
        if ($object->isInitialized('file') && null !== $object->getFile()) {
            $data['file'] = $object->getFile();
        }
        if ($object->isInitialized('searchModel') && null !== $object->getSearchModel()) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('maxRerank') && null !== $object->getMaxRerank()) {
            $data['max_rerank'] = $object->getMaxRerank();
        }
        if ($object->isInitialized('temperature') && null !== $object->getTemperature()) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('logprobs') && null !== $object->getLogprobs()) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('maxTokens') && null !== $object->getMaxTokens()) {
            $data['max_tokens'] = $object->getMaxTokens();
        }
        if ($object->isInitialized('stop') && null !== $object->getStop()) {
            $data['stop'] = $object->getStop();
        }
        if ($object->isInitialized('n') && null !== $object->getN()) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('logitBias') && null !== $object->getLogitBias()) {
            $values_3 = array();
            foreach ($object->getLogitBias() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['logit_bias'] = $values_3;
        }
        if ($object->isInitialized('returnMetadata') && null !== $object->getReturnMetadata()) {
            $data['return_metadata'] = $object->getReturnMetadata();
        }
        if ($object->isInitialized('returnPrompt') && null !== $object->getReturnPrompt()) {
            $data['return_prompt'] = $object->getReturnPrompt();
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