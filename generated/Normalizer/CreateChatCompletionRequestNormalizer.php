<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionFunctionCallOption;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionFunctions;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionNamedToolChoice;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestAssistantMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestFunctionMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestSystemMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestToolMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestUserMessage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionTool;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionRequestResponseFormat;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateChatCompletionRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
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
        if (\array_key_exists('frequency_penalty', $data) && \is_int($data['frequency_penalty'])) {
            $data['frequency_penalty'] = (float) $data['frequency_penalty'];
        }
        if (\array_key_exists('presence_penalty', $data) && \is_int($data['presence_penalty'])) {
            $data['presence_penalty'] = (float) $data['presence_penalty'];
        }
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (float) $data['top_p'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('messages', $data)) {
            $values = [];
            foreach ($data['messages'] as $value) {
                $value_1 = $value;
                if (is_array($value) and isset($value['content']) and (isset($value['role']) and $value['role'] === 'system')) {
                    $value_1 = $this->denormalizer->denormalize($value, ChatCompletionRequestSystemMessage::class, 'json', $context);
                } elseif (is_array($value) and isset($value['content']) and (isset($value['role']) and $value['role'] === 'user')) {
                    $value_1 = $this->denormalizer->denormalize($value, ChatCompletionRequestUserMessage::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['role']) and $value['role'] === 'assistant')) {
                    $value_1 = $this->denormalizer->denormalize($value, ChatCompletionRequestAssistantMessage::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['role']) and $value['role'] === 'tool') and isset($value['content']) and isset($value['tool_call_id'])) {
                    $value_1 = $this->denormalizer->denormalize($value, ChatCompletionRequestToolMessage::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['role']) and $value['role'] === 'function') and isset($value['content']) and isset($value['name'])) {
                    $value_1 = $this->denormalizer->denormalize($value, ChatCompletionRequestFunctionMessage::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setMessages($values);
            unset($data['messages']);
        }
        if (\array_key_exists('model', $data)) {
            $value_2 = $data['model'];
            if (is_string($data['model'])) {
                $value_2 = $data['model'];
            } elseif (is_string($data['model'])) {
                $value_2 = $data['model'];
            }
            $object->setModel($value_2);
            unset($data['model']);
        }
        if (\array_key_exists('logit_bias', $data) && $data['logit_bias'] !== null) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['logit_bias'] as $key => $value_3) {
                $values_1[$key] = $value_3;
            }
            $object->setLogitBias($values_1);
            unset($data['logit_bias']);
        } elseif (\array_key_exists('logit_bias', $data) && $data['logit_bias'] === null) {
            $object->setLogitBias(null);
        }
        if (\array_key_exists('top_logprobs', $data) && $data['top_logprobs'] !== null) {
            $object->setTopLogprobs($data['top_logprobs']);
            unset($data['top_logprobs']);
        } elseif (\array_key_exists('top_logprobs', $data) && $data['top_logprobs'] === null) {
            $object->setTopLogprobs(null);
        }
        if (\array_key_exists('max_tokens', $data) && $data['max_tokens'] !== null) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
        } elseif (\array_key_exists('max_tokens', $data) && $data['max_tokens'] === null) {
            $object->setMaxTokens(null);
        }
        if (\array_key_exists('response_format', $data)) {
            $object->setResponseFormat($this->denormalizer->denormalize($data['response_format'], CreateChatCompletionRequestResponseFormat::class, 'json', $context));
            unset($data['response_format']);
        }
        if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
            $object->setSeed($data['seed']);
            unset($data['seed']);
        } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
            $object->setSeed(null);
        }
        if (\array_key_exists('stop', $data)) {
            $value_4 = $data['stop'];
            if (is_string($data['stop'])) {
                $value_4 = $data['stop'];
            } elseif (is_array($data['stop']) && $this->isOnlyNumericKeys($data['stop'])) {
                $values_2 = [];
                foreach ($data['stop'] as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            }
            $object->setStop($value_4);
            unset($data['stop']);
        }
        if (\array_key_exists('tools', $data)) {
            $values_3 = [];
            foreach ($data['tools'] as $value_6) {
                $values_3[] = $this->denormalizer->denormalize($value_6, ChatCompletionTool::class, 'json', $context);
            }
            $object->setTools($values_3);
            unset($data['tools']);
        }
        if (\array_key_exists('tool_choice', $data)) {
            $value_7 = $data['tool_choice'];
            if (is_string($data['tool_choice'])) {
                $value_7 = $data['tool_choice'];
            } elseif (is_array($data['tool_choice']) and (isset($data['tool_choice']['type']) and $data['tool_choice']['type'] === 'function') and isset($data['tool_choice']['function'])) {
                $value_7 = $this->denormalizer->denormalize($data['tool_choice'], ChatCompletionNamedToolChoice::class, 'json', $context);
            }
            $object->setToolChoice($value_7);
            unset($data['tool_choice']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        if (\array_key_exists('function_call', $data)) {
            $value_8 = $data['function_call'];
            if (is_string($data['function_call'])) {
                $value_8 = $data['function_call'];
            } elseif (is_array($data['function_call']) and isset($data['function_call']['name'])) {
                $value_8 = $this->denormalizer->denormalize($data['function_call'], ChatCompletionFunctionCallOption::class, 'json', $context);
            }
            $object->setFunctionCall($value_8);
            unset($data['function_call']);
        }
        if (\array_key_exists('functions', $data)) {
            $values_4 = [];
            foreach ($data['functions'] as $value_9) {
                $values_4[] = $this->denormalizer->denormalize($value_9, ChatCompletionFunctions::class, 'json', $context);
            }
            $object->setFunctions($values_4);
            unset($data['functions']);
        }
        if (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] !== null) {
            $object->setFrequencyPenalty($data['frequency_penalty']);
            unset($data['frequency_penalty']);
        } elseif (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] === null) {
            $object->setFrequencyPenalty(null);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($data['logprobs']);
            unset($data['logprobs']);
        } elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
            unset($data['n']);
        } elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
        }
        if (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] !== null) {
            $object->setPresencePenalty($data['presence_penalty']);
            unset($data['presence_penalty']);
        } elseif (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] === null) {
            $object->setPresencePenalty(null);
        }
        if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
            $object->setStream($data['stream']);
            unset($data['stream']);
        } elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
            $object->setStream(null);
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
        foreach ($data as $key_1 => $value_10) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_10;
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
        $values = [];
        foreach ($object->getMessages() as $value) {
            $value_1 = $value;
            if (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            }
            $values[] = $value_1;
        }
        $data['messages'] = $values;
        $value_2 = $object->getModel();
        if (is_string($object->getModel())) {
            $value_2 = $object->getModel();
        } elseif (is_string($object->getModel())) {
            $value_2 = $object->getModel();
        }
        $data['model'] = $value_2;
        if ($object->isInitialized('logitBias') && $object->getLogitBias() !== null) {
            $values_1 = [];
            foreach ($object->getLogitBias() as $key => $value_3) {
                $values_1[$key] = $value_3;
            }
            $data['logit_bias'] = $values_1;
        }
        if ($object->isInitialized('topLogprobs') && $object->getTopLogprobs() !== null) {
            $data['top_logprobs'] = $object->getTopLogprobs();
        }
        if ($object->isInitialized('maxTokens') && $object->getMaxTokens() !== null) {
            $data['max_tokens'] = $object->getMaxTokens();
        }
        if ($object->isInitialized('responseFormat') && $object->getResponseFormat() !== null) {
            $data['response_format'] = $this->normalizer->normalize($object->getResponseFormat(), 'json', $context);
        }
        if ($object->isInitialized('seed') && $object->getSeed() !== null) {
            $data['seed'] = $object->getSeed();
        }
        if ($object->isInitialized('stop') && $object->getStop() !== null) {
            $value_4 = $object->getStop();
            if (is_string($object->getStop())) {
                $value_4 = $object->getStop();
            } elseif (is_array($object->getStop())) {
                $values_2 = [];
                foreach ($object->getStop() as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            }
            $data['stop'] = $value_4;
        }
        if ($object->isInitialized('tools') && $object->getTools() !== null) {
            $values_3 = [];
            foreach ($object->getTools() as $value_6) {
                $values_3[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['tools'] = $values_3;
        }
        if ($object->isInitialized('toolChoice') && $object->getToolChoice() !== null) {
            $value_7 = $object->getToolChoice();
            if (is_string($object->getToolChoice())) {
                $value_7 = $object->getToolChoice();
            } elseif (is_object($object->getToolChoice())) {
                $value_7 = $this->normalizer->normalize($object->getToolChoice(), 'json', $context);
            }
            $data['tool_choice'] = $value_7;
        }
        if ($object->isInitialized('user') && $object->getUser() !== null) {
            $data['user'] = $object->getUser();
        }
        if ($object->isInitialized('functionCall') && $object->getFunctionCall() !== null) {
            $value_8 = $object->getFunctionCall();
            if (is_string($object->getFunctionCall())) {
                $value_8 = $object->getFunctionCall();
            } elseif (is_object($object->getFunctionCall())) {
                $value_8 = $this->normalizer->normalize($object->getFunctionCall(), 'json', $context);
            }
            $data['function_call'] = $value_8;
        }
        if ($object->isInitialized('functions') && $object->getFunctions() !== null) {
            $values_4 = [];
            foreach ($object->getFunctions() as $value_9) {
                $values_4[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data['functions'] = $values_4;
        }
        if ($object->isInitialized('frequencyPenalty') && $object->getFrequencyPenalty() !== null) {
            $data['frequency_penalty'] = $object->getFrequencyPenalty();
        }
        if ($object->isInitialized('logprobs') && $object->getLogprobs() !== null) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('n') && $object->getN() !== null) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('presencePenalty') && $object->getPresencePenalty() !== null) {
            $data['presence_penalty'] = $object->getPresencePenalty();
        }
        if ($object->isInitialized('stream') && $object->getStream() !== null) {
            $data['stream'] = $object->getStream();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('topP') && $object->getTopP() !== null) {
            $data['top_p'] = $object->getTopP();
        }
        foreach ($object as $key_1 => $value_10) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_10;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateChatCompletionRequest::class => false,
        ];
    }
}
