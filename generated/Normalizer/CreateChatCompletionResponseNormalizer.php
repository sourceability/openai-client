<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CompletionUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateChatCompletionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateChatCompletionResponse::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateChatCompletionResponse::class;
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
        $object = new CreateChatCompletionResponse();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('choices', $data)) {
            $values = [];
            foreach ($data['choices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CreateChatCompletionResponseChoicesItem::class, 'json', $context);
            }
            $object->setChoices($values);
            unset($data['choices']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('system_fingerprint', $data) && $data['system_fingerprint'] !== null) {
            $object->setSystemFingerprint($data['system_fingerprint']);
            unset($data['system_fingerprint']);
        } elseif (\array_key_exists('system_fingerprint', $data) && $data['system_fingerprint'] === null) {
            $object->setSystemFingerprint(null);
        }
        if (\array_key_exists('usage', $data)) {
            $object->setUsage($this->denormalizer->denormalize($data['usage'], CompletionUsage::class, 'json', $context));
            unset($data['usage']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
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
        $data['id'] = $object->getId();
        $values = [];
        foreach ($object->getChoices() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['choices'] = $values;
        $data['created'] = $object->getCreated();
        $data['model'] = $object->getModel();
        if ($object->isInitialized('system_fingerprint') && $object->getSystemFingerprint() !== null) {
            $data['system_fingerprint'] = $object->getSystemFingerprint();
        }
        if ($object->isInitialized('usage') && $object->getUsage() !== null) {
            $data['usage'] = $this->normalizer->normalize($object->getUsage(), 'json', $context);
        }
        $data['object'] = $object->getObject();
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
            CreateChatCompletionResponse::class => false,
        ];
    }
}
