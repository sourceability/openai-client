<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsCode;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsFunction;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsRetrieval;
use Sourceability\OpenAIClient\Generated\Model\CreateAssistantRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateAssistantRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateAssistantRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateAssistantRequest::class;
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
        $object = new CreateAssistantRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $value = $data['model'];
            if (is_string($data['model'])) {
                $value = $data['model'];
            }
            $object->setModel($value);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('instructions', $data) && $data['instructions'] !== null) {
            $object->setInstructions($data['instructions']);
        } elseif (\array_key_exists('instructions', $data) && $data['instructions'] === null) {
            $object->setInstructions(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $object->setMetadata($values);
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('tools', $data)) {
            $values_1 = [];
            foreach ($data['tools'] as $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] === 'code_interpreter')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, AssistantToolsCode::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] === 'retrieval')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, AssistantToolsRetrieval::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] === 'function') and isset($value_2['function'])) {
                    $value_3 = $this->denormalizer->denormalize($value_2, AssistantToolsFunction::class, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $object->setTools($values_1);
        }
        if (\array_key_exists('file_ids', $data)) {
            $values_2 = [];
            foreach ($data['file_ids'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setFileIds($values_2);
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $value = $object->getModel();
        if (is_string($object->getModel())) {
            $value = $object->getModel();
        }
        $data['model'] = $value;
        if ($object->isInitialized('name') && $object->getName() !== null) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('description') && $object->getDescription() !== null) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('instructions') && $object->getInstructions() !== null) {
            $data['instructions'] = $object->getInstructions();
        }
        if ($object->isInitialized('metadata') && $object->getMetadata() !== null) {
            $values = [];
            foreach ($object->getMetadata() as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $data['metadata'] = $values;
        }
        if ($object->isInitialized('tools') && $object->getTools() !== null) {
            $values_1 = [];
            foreach ($object->getTools() as $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $data['tools'] = $values_1;
        }
        if ($object->isInitialized('fileIds') && $object->getFileIds() !== null) {
            $values_2 = [];
            foreach ($object->getFileIds() as $value_4) {
                $values_2[] = $value_4;
            }
            $data['file_ids'] = $values_2;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateAssistantRequest::class => false,
        ];
    }
}
