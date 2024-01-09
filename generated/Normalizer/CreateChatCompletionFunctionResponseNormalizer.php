<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CompletionUsage;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionFunctionResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateChatCompletionFunctionResponseChoicesItem;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateChatCompletionFunctionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateChatCompletionFunctionResponse::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateChatCompletionFunctionResponse::class;
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
        $object = new CreateChatCompletionFunctionResponse();
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
                $values[] = $this->denormalizer->denormalize($value, CreateChatCompletionFunctionResponseChoicesItem::class, 'json', $context);
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
        if (\array_key_exists('system_fingerprint', $data)) {
            $object->setSystemFingerprint($data['system_fingerprint']);
            unset($data['system_fingerprint']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('usage', $data)) {
            $object->setUsage($this->denormalizer->denormalize($data['usage'], CompletionUsage::class, 'json', $context));
            unset($data['usage']);
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
        if ($object->isInitialized('systemFingerprint') && $object->getSystemFingerprint() !== null) {
            $data['system_fingerprint'] = $object->getSystemFingerprint();
        }
        $data['object'] = $object->getObject();
        if ($object->isInitialized('usage') && $object->getUsage() !== null) {
            $data['usage'] = $this->normalizer->normalize($object->getUsage(), 'json', $context);
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
            CreateChatCompletionFunctionResponse::class => false,
        ];
    }
}
