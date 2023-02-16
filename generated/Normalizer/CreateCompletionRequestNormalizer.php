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
class CreateCompletionRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateCompletionRequest';
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
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (double) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (double) $data['top_p'];
        }
        if (\array_key_exists('presence_penalty', $data) && \is_int($data['presence_penalty'])) {
            $data['presence_penalty'] = (double) $data['presence_penalty'];
        }
        if (\array_key_exists('frequency_penalty', $data) && \is_int($data['frequency_penalty'])) {
            $data['frequency_penalty'] = (double) $data['frequency_penalty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('prompt', $data) && $data['prompt'] !== null) {
            $object->setPrompt($data['prompt']);
            unset($data['prompt']);
        }
        elseif (\array_key_exists('prompt', $data) && $data['prompt'] === null) {
            $object->setPrompt(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
            unset($data['suffix']);
        }
        elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('max_tokens', $data) && $data['max_tokens'] !== null) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
        }
        elseif (\array_key_exists('max_tokens', $data) && $data['max_tokens'] === null) {
            $object->setMaxTokens(null);
        }
        if (\array_key_exists('temperature', $data) && $data['temperature'] !== null) {
            $object->setTemperature($data['temperature']);
            unset($data['temperature']);
        }
        elseif (\array_key_exists('temperature', $data) && $data['temperature'] === null) {
            $object->setTemperature(null);
        }
        if (\array_key_exists('top_p', $data) && $data['top_p'] !== null) {
            $object->setTopP($data['top_p']);
            unset($data['top_p']);
        }
        elseif (\array_key_exists('top_p', $data) && $data['top_p'] === null) {
            $object->setTopP(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
            unset($data['n']);
        }
        elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
        }
        if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
            $object->setStream($data['stream']);
            unset($data['stream']);
        }
        elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
            $object->setStream(null);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($data['logprobs']);
            unset($data['logprobs']);
        }
        elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
        }
        if (\array_key_exists('echo', $data) && $data['echo'] !== null) {
            $object->setEcho($data['echo']);
            unset($data['echo']);
        }
        elseif (\array_key_exists('echo', $data) && $data['echo'] === null) {
            $object->setEcho(null);
        }
        if (\array_key_exists('stop', $data) && $data['stop'] !== null) {
            $object->setStop($data['stop']);
            unset($data['stop']);
        }
        elseif (\array_key_exists('stop', $data) && $data['stop'] === null) {
            $object->setStop(null);
        }
        if (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] !== null) {
            $object->setPresencePenalty($data['presence_penalty']);
            unset($data['presence_penalty']);
        }
        elseif (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] === null) {
            $object->setPresencePenalty(null);
        }
        if (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] !== null) {
            $object->setFrequencyPenalty($data['frequency_penalty']);
            unset($data['frequency_penalty']);
        }
        elseif (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] === null) {
            $object->setFrequencyPenalty(null);
        }
        if (\array_key_exists('best_of', $data) && $data['best_of'] !== null) {
            $object->setBestOf($data['best_of']);
            unset($data['best_of']);
        }
        elseif (\array_key_exists('best_of', $data) && $data['best_of'] === null) {
            $object->setBestOf(null);
        }
        if (\array_key_exists('logit_bias', $data) && $data['logit_bias'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['logit_bias'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLogitBias($values);
            unset($data['logit_bias']);
        }
        elseif (\array_key_exists('logit_bias', $data) && $data['logit_bias'] === null) {
            $object->setLogitBias(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
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
        $data['model'] = $object->getModel();
        if ($object->isInitialized('prompt') && null !== $object->getPrompt()) {
            $data['prompt'] = $object->getPrompt();
        }
        if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        if ($object->isInitialized('maxTokens') && null !== $object->getMaxTokens()) {
            $data['max_tokens'] = $object->getMaxTokens();
        }
        if ($object->isInitialized('temperature') && null !== $object->getTemperature()) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('topP') && null !== $object->getTopP()) {
            $data['top_p'] = $object->getTopP();
        }
        if ($object->isInitialized('n') && null !== $object->getN()) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('stream') && null !== $object->getStream()) {
            $data['stream'] = $object->getStream();
        }
        if ($object->isInitialized('logprobs') && null !== $object->getLogprobs()) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('echo') && null !== $object->getEcho()) {
            $data['echo'] = $object->getEcho();
        }
        if ($object->isInitialized('stop') && null !== $object->getStop()) {
            $data['stop'] = $object->getStop();
        }
        if ($object->isInitialized('presencePenalty') && null !== $object->getPresencePenalty()) {
            $data['presence_penalty'] = $object->getPresencePenalty();
        }
        if ($object->isInitialized('frequencyPenalty') && null !== $object->getFrequencyPenalty()) {
            $data['frequency_penalty'] = $object->getFrequencyPenalty();
        }
        if ($object->isInitialized('bestOf') && null !== $object->getBestOf()) {
            $data['best_of'] = $object->getBestOf();
        }
        if ($object->isInitialized('logitBias') && null !== $object->getLogitBias()) {
            $values = array();
            foreach ($object->getLogitBias() as $key => $value) {
                $values[$key] = $value;
            }
            $data['logit_bias'] = $values;
        }
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }
        return $data;
    }
}