<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\AssistantObject;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsCode;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsFunction;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsRetrieval;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AssistantObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === AssistantObject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === AssistantObject::class;
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
        $object = new AssistantObject();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('instructions', $data) && $data['instructions'] !== null) {
            $object->setInstructions($data['instructions']);
            unset($data['instructions']);
        } elseif (\array_key_exists('instructions', $data) && $data['instructions'] === null) {
            $object->setInstructions(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('tools', $data)) {
            $values_1 = [];
            foreach ($data['tools'] as $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] === 'code_interpreter')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, AssistantToolsCode::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] === 'retrieval')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, AssistantToolsRetrieval::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] === 'function') and isset($value_1['function'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, AssistantToolsFunction::class, 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setTools($values_1);
            unset($data['tools']);
        }
        if (\array_key_exists('file_ids', $data)) {
            $values_2 = [];
            foreach ($data['file_ids'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setFileIds($values_2);
            unset($data['file_ids']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
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
        $data['created_at'] = $object->getCreatedAt();
        $data['name'] = $object->getName();
        $data['description'] = $object->getDescription();
        $data['model'] = $object->getModel();
        $data['instructions'] = $object->getInstructions();
        $values = [];
        foreach ($object->getMetadata() as $key => $value) {
            $values[$key] = $value;
        }
        $data['metadata'] = $values;
        $data['object'] = $object->getObject();
        $values_1 = [];
        foreach ($object->getTools() as $value_1) {
            $value_2 = $value_1;
            if (is_object($value_1)) {
                $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
            } elseif (is_object($value_1)) {
                $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
            } elseif (is_object($value_1)) {
                $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $values_1[] = $value_2;
        }
        $data['tools'] = $values_1;
        $values_2 = [];
        foreach ($object->getFileIds() as $value_3) {
            $values_2[] = $value_3;
        }
        $data['file_ids'] = $values_2;
        foreach ($object as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_4;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            AssistantObject::class => false,
        ];
    }
}
