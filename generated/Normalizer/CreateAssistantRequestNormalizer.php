<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
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
            $object->setModel($data['model']);
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
        if (\array_key_exists('tools', $data)) {
            $values = [];
            foreach ($data['tools'] as $value) {
                $values[] = $value;
            }
            $object->setTools($values);
        }
        if (\array_key_exists('file_ids', $data)) {
            $values_1 = [];
            foreach ($data['file_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFileIds($values_1);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setMetadata($values_2);
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
        $data['model'] = $object->getModel();
        if ($object->isInitialized('name') && $object->getName() !== null) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('description') && $object->getDescription() !== null) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('instructions') && $object->getInstructions() !== null) {
            $data['instructions'] = $object->getInstructions();
        }
        if ($object->isInitialized('tools') && $object->getTools() !== null) {
            $values = [];
            foreach ($object->getTools() as $value) {
                $values[] = $value;
            }
            $data['tools'] = $values;
        }
        if ($object->isInitialized('fileIds') && $object->getFileIds() !== null) {
            $values_1 = [];
            foreach ($object->getFileIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['file_ids'] = $values_1;
        }
        if ($object->isInitialized('metadata') && $object->getMetadata() !== null) {
            $values_2 = [];
            foreach ($object->getMetadata() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['metadata'] = $values_2;
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
