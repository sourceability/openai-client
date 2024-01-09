<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionResponseMessage;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateChatCompletionResponseChoicesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateChatCompletionResponseChoicesItem::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateChatCompletionResponseChoicesItem::class;
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
        $object = new CreateChatCompletionResponseChoicesItem();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('finish_reason', $data)) {
            $object->setFinishReason($data['finish_reason']);
            unset($data['finish_reason']);
        }
        if (\array_key_exists('index', $data)) {
            $object->setIndex($data['index']);
            unset($data['index']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($this->denormalizer->denormalize($data['message'], ChatCompletionResponseMessage::class, 'json', $context));
            unset($data['message']);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($this->denormalizer->denormalize($data['logprobs'], CreateChatCompletionResponseChoicesItemLogprobs::class, 'json', $context));
            unset($data['logprobs']);
        } elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
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
        $data['finish_reason'] = $object->getFinishReason();
        $data['index'] = $object->getIndex();
        $data['message'] = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        $data['logprobs'] = $this->normalizer->normalize($object->getLogprobs(), 'json', $context);
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
            CreateChatCompletionResponseChoicesItem::class => false,
        ];
    }
}
