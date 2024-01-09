<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateModerationRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateModerationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateModerationRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateModerationRequest::class;
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
        $object = new CreateModerationRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('input', $data)) {
            $value = $data['input'];
            if (is_string($data['input'])) {
                $value = $data['input'];
            } elseif (is_array($data['input']) && $this->isOnlyNumericKeys($data['input'])) {
                $values = [];
                foreach ($data['input'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            $object->setInput($value);
            unset($data['input']);
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
        $value = $object->getInput();
        if (is_string($object->getInput())) {
            $value = $object->getInput();
        } elseif (is_array($object->getInput())) {
            $values = [];
            foreach ($object->getInput() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        $data['input'] = $value;
        if ($object->isInitialized('model') && $object->getModel() !== null) {
            $value_2 = $object->getModel();
            if (is_string($object->getModel())) {
                $value_2 = $object->getModel();
            } elseif (is_string($object->getModel())) {
                $value_2 = $object->getModel();
            }
            $data['model'] = $value_2;
        }
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
            CreateModerationRequest::class => false,
        ];
    }
}
