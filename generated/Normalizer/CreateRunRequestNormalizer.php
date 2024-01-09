<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsCode;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsFunction;
use Sourceability\OpenAIClient\Generated\Model\AssistantToolsRetrieval;
use Sourceability\OpenAIClient\Generated\Model\CreateRunRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateRunRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateRunRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateRunRequest::class;
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
        $object = new CreateRunRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('assistant_id', $data)) {
            $object->setAssistantId($data['assistant_id']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
        } elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('instructions', $data) && $data['instructions'] !== null) {
            $object->setInstructions($data['instructions']);
        } elseif (\array_key_exists('instructions', $data) && $data['instructions'] === null) {
            $object->setInstructions(null);
        }
        if (\array_key_exists('additional_instructions', $data) && $data['additional_instructions'] !== null) {
            $object->setAdditionalInstructions($data['additional_instructions']);
        } elseif (\array_key_exists('additional_instructions', $data) && $data['additional_instructions'] === null) {
            $object->setAdditionalInstructions(null);
        }
        if (\array_key_exists('tools', $data) && $data['tools'] !== null) {
            $values = [];
            foreach ($data['tools'] as $value) {
                $value_1 = $value;
                if (is_array($value) and (isset($value['type']) and $value['type'] === 'code_interpreter')) {
                    $value_1 = $this->denormalizer->denormalize($value, AssistantToolsCode::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['type']) and $value['type'] === 'retrieval')) {
                    $value_1 = $this->denormalizer->denormalize($value, AssistantToolsRetrieval::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['type']) and $value['type'] === 'function') and isset($value['function'])) {
                    $value_1 = $this->denormalizer->denormalize($value, AssistantToolsFunction::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setTools($values);
        } elseif (\array_key_exists('tools', $data) && $data['tools'] === null) {
            $object->setTools(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_2) {
                $values_1[$key] = $value_2;
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
        $data['assistant_id'] = $object->getAssistantId();
        if ($object->isInitialized('model') && $object->getModel() !== null) {
            $data['model'] = $object->getModel();
        }
        if ($object->isInitialized('instructions') && $object->getInstructions() !== null) {
            $data['instructions'] = $object->getInstructions();
        }
        if ($object->isInitialized('additionalInstructions') && $object->getAdditionalInstructions() !== null) {
            $data['additional_instructions'] = $object->getAdditionalInstructions();
        }
        if ($object->isInitialized('tools') && $object->getTools() !== null) {
            $values = [];
            foreach ($object->getTools() as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                }
                $values[] = $value_1;
            }
            $data['tools'] = $values;
        }
        if ($object->isInitialized('metadata') && $object->getMetadata() !== null) {
            $values_1 = [];
            foreach ($object->getMetadata() as $key => $value_2) {
                $values_1[$key] = $value_2;
            }
            $data['metadata'] = $values_1;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateRunRequest::class => false,
        ];
    }
}
