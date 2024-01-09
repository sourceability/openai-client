<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateThreadAndRunRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateThreadRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateThreadAndRunRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateThreadAndRunRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateThreadAndRunRequest::class;
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
        $object = new CreateThreadAndRunRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('assistant_id', $data)) {
            $object->setAssistantId($data['assistant_id']);
        }
        if (\array_key_exists('thread', $data)) {
            $object->setThread($this->denormalizer->denormalize($data['thread'], CreateThreadRequest::class, 'json', $context));
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
        if (\array_key_exists('tools', $data) && $data['tools'] !== null) {
            $values = [];
            foreach ($data['tools'] as $value) {
                $values[] = $value;
            }
            $object->setTools($values);
        } elseif (\array_key_exists('tools', $data) && $data['tools'] === null) {
            $object->setTools(null);
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
        $data['assistant_id'] = $object->getAssistantId();
        if ($object->isInitialized('thread') && $object->getThread() !== null) {
            $data['thread'] = $this->normalizer->normalize($object->getThread(), 'json', $context);
        }
        if ($object->isInitialized('model') && $object->getModel() !== null) {
            $data['model'] = $object->getModel();
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
            CreateThreadAndRunRequest::class => false,
        ];
    }
}
