<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateMessageRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateThreadRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateThreadRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateThreadRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateThreadRequest::class;
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
        $object = new CreateThreadRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('messages', $data)) {
            $values = [];
            foreach ($data['messages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CreateMessageRequest::class, 'json', $context);
            }
            $object->setMessages($values);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMetadata($values_1);
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('messages') && $object->getMessages() !== null) {
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['messages'] = $values;
        }
        if ($object->isInitialized('metadata') && $object->getMetadata() !== null) {
            $values_1 = [];
            foreach ($object->getMetadata() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['metadata'] = $values_1;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateThreadRequest::class => false,
        ];
    }
}