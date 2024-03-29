<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionFunctions;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessage;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateChatCompletionRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateChatCompletionRequest::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateChatCompletionRequest::class;
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
        $object = new CreateChatCompletionRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (float) $data['top_p'];
        }
        if (\array_key_exists('presence_penalty', $data) && \is_int($data['presence_penalty'])) {
            $data['presence_penalty'] = (float) $data['presence_penalty'];
        }
        if (\array_key_exists('frequency_penalty', $data) && \is_int($data['frequency_penalty'])) {
            $data['frequency_penalty'] = (float) $data['frequency_penalty'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('messages', $data)) {
            $values = [];
            foreach ($data['messages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ChatCompletionRequestMessage::class, 'json', $context);
            }
            $object->setMessages($values);
            unset($data['messages']);
        }
        if (\array_key_exists('functions', $data)) {
            $values_1 = [];
            foreach ($data['functions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ChatCompletionFunctions::class, 'json', $context);
            }
            $object->setFunctions($values_1);
            unset($data['functions']);
        }
        if (\array_key_exists('function_call', $data)) {
            $object->setFunctionCall($data['function_call']);
            unset($data['function_call']);
        }
        if (\array_key_exists('temperature', $data) && $data['temperature'] !== null) {
            $object->setTemperature($data['temperature']);
            unset($data['temperature']);
        } elseif (\array_key_exists('temperature', $data) && $data['temperature'] === null) {
            $object->setTemperature(null);
        }
        if (\array_key_exists('top_p', $data) && $data['top_p'] !== null) {
            $object->setTopP($data['top_p']);
            unset($data['top_p']);
        } elseif (\array_key_exists('top_p', $data) && $data['top_p'] === null) {
            $object->setTopP(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
            unset($data['n']);
        } elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
        }
        if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
            $object->setStream($data['stream']);
            unset($data['stream']);
        } elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
            $object->setStream(null);
        }
        if (\array_key_exists('stop', $data)) {
            $object->setStop($data['stop']);
            unset($data['stop']);
        }
        if (\array_key_exists('max_tokens', $data) && $data['max_tokens'] !== null) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
        } elseif (\array_key_exists('max_tokens', $data) && $data['max_tokens'] === null) {
            $object->setMaxTokens(null);
        }
        if (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] !== null) {
            $object->setPresencePenalty($data['presence_penalty']);
            unset($data['presence_penalty']);
        } elseif (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] === null) {
            $object->setPresencePenalty(null);
        }
        if (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] !== null) {
            $object->setFrequencyPenalty($data['frequency_penalty']);
            unset($data['frequency_penalty']);
        } elseif (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] === null) {
            $object->setFrequencyPenalty(null);
        }
        if (\array_key_exists('logit_bias', $data) && $data['logit_bias'] !== null) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['logit_bias'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLogitBias($values_2);
            unset($data['logit_bias']);
        } elseif (\array_key_exists('logit_bias', $data) && $data['logit_bias'] === null) {
            $object->setLogitBias(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
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
        $data['model'] = $object->getModel();
        $values = [];
        foreach ($object->getMessages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['messages'] = $values;
        if ($object->isInitialized('functions') && $object->getFunctions() !== null) {
            $values_1 = [];
            foreach ($object->getFunctions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['functions'] = $values_1;
        }
        if ($object->isInitialized('functionCall') && $object->getFunctionCall() !== null) {
            $data['function_call'] = $object->getFunctionCall();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('topP') && $object->getTopP() !== null) {
            $data['top_p'] = $object->getTopP();
        }
        if ($object->isInitialized('n') && $object->getN() !== null) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('stream') && $object->getStream() !== null) {
            $data['stream'] = $object->getStream();
        }
        if ($object->isInitialized('stop') && $object->getStop() !== null) {
            $data['stop'] = $object->getStop();
        }
        if ($object->isInitialized('maxTokens') && $object->getMaxTokens() !== null) {
            $data['max_tokens'] = $object->getMaxTokens();
        }
        if ($object->isInitialized('presencePenalty') && $object->getPresencePenalty() !== null) {
            $data['presence_penalty'] = $object->getPresencePenalty();
        }
        if ($object->isInitialized('frequencyPenalty') && $object->getFrequencyPenalty() !== null) {
            $data['frequency_penalty'] = $object->getFrequencyPenalty();
        }
        if ($object->isInitialized('logitBias') && $object->getLogitBias() !== null) {
            $values_2 = [];
            foreach ($object->getLogitBias() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['logit_bias'] = $values_2;
        }
        if ($object->isInitialized('user') && $object->getUser() !== null) {
            $data['user'] = $object->getUser();
        }
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }
        return $data;
    }
}
