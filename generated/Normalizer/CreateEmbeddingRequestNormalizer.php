<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateEmbeddingRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateEmbeddingRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateEmbeddingRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateEmbeddingRequest::class;
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
        $object = new CreateEmbeddingRequest();
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
            } elseif (is_array($data['input']) && $this->isOnlyNumericKeys($data['input'])) {
                $values_1 = [];
                foreach ($data['input'] as $value_2) {
                    $values_1[] = $value_2;
                }
                $value = $values_1;
            } elseif (is_array($data['input']) && $this->isOnlyNumericKeys($data['input'])) {
                $values_2 = [];
                foreach ($data['input'] as $value_3) {
                    $values_3 = [];
                    foreach ($value_3 as $value_4) {
                        $values_3[] = $value_4;
                    }
                    $values_2[] = $values_3;
                }
                $value = $values_2;
            }
            $object->setInput($value);
        }
        if (\array_key_exists('model', $data)) {
            $value_5 = $data['model'];
            if (is_string($data['model'])) {
                $value_5 = $data['model'];
            } elseif (is_string($data['model'])) {
                $value_5 = $data['model'];
            }
            $object->setModel($value_5);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('encoding_format', $data)) {
            $object->setEncodingFormat($data['encoding_format']);
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
        } elseif (is_array($object->getInput())) {
            $values_1 = [];
            foreach ($object->getInput() as $value_2) {
                $values_1[] = $value_2;
            }
            $value = $values_1;
        } elseif (is_array($object->getInput())) {
            $values_2 = [];
            foreach ($object->getInput() as $value_3) {
                $values_3 = [];
                foreach ($value_3 as $value_4) {
                    $values_3[] = $value_4;
                }
                $values_2[] = $values_3;
            }
            $value = $values_2;
        }
        $data['input'] = $value;
        $value_5 = $object->getModel();
        if (is_string($object->getModel())) {
            $value_5 = $object->getModel();
        } elseif (is_string($object->getModel())) {
            $value_5 = $object->getModel();
        }
        $data['model'] = $value_5;
        if ($object->isInitialized('user') && $object->getUser() !== null) {
            $data['user'] = $object->getUser();
        }
        if ($object->isInitialized('encodingFormat') && $object->getEncodingFormat() !== null) {
            $data['encoding_format'] = $object->getEncodingFormat();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateEmbeddingRequest::class => false,
        ];
    }
}
