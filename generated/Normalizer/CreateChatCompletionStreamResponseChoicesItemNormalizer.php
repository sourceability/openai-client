<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionStreamResponseDelta;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionStreamResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionStreamResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateChatCompletionStreamResponseChoicesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateChatCompletionStreamResponseChoicesItem::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateChatCompletionStreamResponseChoicesItem::class;
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
        $object = new CreateChatCompletionStreamResponseChoicesItem();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('delta', $data)) {
            $object->setDelta($this->denormalizer->denormalize($data['delta'], ChatCompletionStreamResponseDelta::class, 'json', $context));
            unset($data['delta']);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($this->denormalizer->denormalize($data['logprobs'], CreateChatCompletionStreamResponseChoicesItemLogprobs::class, 'json', $context));
            unset($data['logprobs']);
        } elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
        }
        if (\array_key_exists('finish_reason', $data) && $data['finish_reason'] !== null) {
            $object->setFinishReason($data['finish_reason']);
            unset($data['finish_reason']);
        } elseif (\array_key_exists('finish_reason', $data) && $data['finish_reason'] === null) {
            $object->setFinishReason(null);
        }
        if (\array_key_exists('index', $data)) {
            $object->setIndex($data['index']);
            unset($data['index']);
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
        $data['delta'] = $this->normalizer->normalize($object->getDelta(), 'json', $context);
        if ($object->isInitialized('logprobs') && $object->getLogprobs() !== null) {
            $data['logprobs'] = $this->normalizer->normalize($object->getLogprobs(), 'json', $context);
        }
        $data['finish_reason'] = $object->getFinishReason();
        $data['index'] = $object->getIndex();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateChatCompletionStreamResponseChoicesItem::class => false,
        ];
    }
}
