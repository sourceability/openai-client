<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ModifyThreadRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModifyThreadRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ModifyThreadRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ModifyThreadRequest::class;
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
        $object = new ModifyThreadRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
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
        if ($object->isInitialized('metadata') && $object->getMetadata() !== null) {
            $values = [];
            foreach ($object->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $data['metadata'] = $values;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            ModifyThreadRequest::class => false,
        ];
    }
}
