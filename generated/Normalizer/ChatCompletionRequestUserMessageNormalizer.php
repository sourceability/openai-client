<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartImage;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestMessageContentPartText;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionRequestUserMessage;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ChatCompletionRequestUserMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ChatCompletionRequestUserMessage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ChatCompletionRequestUserMessage::class;
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
        $object = new ChatCompletionRequestUserMessage();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('content', $data)) {
            $value = $data['content'];
            if (is_string($data['content'])) {
                $value = $data['content'];
            } elseif (is_array($data['content']) && $this->isOnlyNumericKeys($data['content'])) {
                $values = [];
                foreach ($data['content'] as $value_1) {
                    $value_2 = $value_1;
                    if (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] === 'text') and isset($value_1['text'])) {
                        $value_2 = $this->denormalizer->denormalize($value_1, ChatCompletionRequestMessageContentPartText::class, 'json', $context);
                    } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] === 'image_url') and isset($value_1['image_url'])) {
                        $value_2 = $this->denormalizer->denormalize($value_1, ChatCompletionRequestMessageContentPartImage::class, 'json', $context);
                    }
                    $values[] = $value_2;
                }
                $value = $values;
            }
            $object->setContent($value);
            unset($data['content']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
            unset($data['role']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        $value = $object->getContent();
        if (is_string($object->getContent())) {
            $value = $object->getContent();
        } elseif (is_array($object->getContent())) {
            $values = [];
            foreach ($object->getContent() as $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                } elseif (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[] = $value_2;
            }
            $value = $values;
        }
        $data['content'] = $value;
        if ($object->isInitialized('name') && $object->getName() !== null) {
            $data['name'] = $object->getName();
        }
        $data['role'] = $object->getRole();
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            ChatCompletionRequestUserMessage::class => false,
        ];
    }
}
