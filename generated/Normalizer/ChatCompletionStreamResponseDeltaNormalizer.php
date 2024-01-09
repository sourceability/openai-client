<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionMessageToolCallChunk;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionStreamResponseDelta;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionStreamResponseDeltaFunctionCall;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ChatCompletionStreamResponseDeltaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ChatCompletionStreamResponseDelta::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ChatCompletionStreamResponseDelta::class;
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
        $object = new ChatCompletionStreamResponseDelta();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
            unset($data['content']);
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('function_call', $data)) {
            $object->setFunctionCall($this->denormalizer->denormalize($data['function_call'], ChatCompletionStreamResponseDeltaFunctionCall::class, 'json', $context));
            unset($data['function_call']);
        }
        if (\array_key_exists('tool_calls', $data)) {
            $values = [];
            foreach ($data['tool_calls'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ChatCompletionMessageToolCallChunk::class, 'json', $context);
            }
            $object->setToolCalls($values);
            unset($data['tool_calls']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
            unset($data['role']);
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
        if ($object->isInitialized('content') && $object->getContent() !== null) {
            $data['content'] = $object->getContent();
        }
        if ($object->isInitialized('functionCall') && $object->getFunctionCall() !== null) {
            $data['function_call'] = $this->normalizer->normalize($object->getFunctionCall(), 'json', $context);
        }
        if ($object->isInitialized('toolCalls') && $object->getToolCalls() !== null) {
            $values = [];
            foreach ($object->getToolCalls() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['tool_calls'] = $values;
        }
        if ($object->isInitialized('role') && $object->getRole() !== null) {
            $data['role'] = $object->getRole();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            ChatCompletionStreamResponseDelta::class => false,
        ];
    }
}
