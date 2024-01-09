<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\MessageObject;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MessageObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === MessageObject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === MessageObject::class;
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
        $object = new MessageObject();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('thread_id', $data)) {
            $object->setThreadId($data['thread_id']);
            unset($data['thread_id']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
            unset($data['role']);
        }
        if (\array_key_exists('content', $data)) {
            $values = [];
            foreach ($data['content'] as $value) {
                $values[] = $value;
            }
            $object->setContent($values);
            unset($data['content']);
        }
        if (\array_key_exists('assistant_id', $data) && $data['assistant_id'] !== null) {
            $object->setAssistantId($data['assistant_id']);
            unset($data['assistant_id']);
        } elseif (\array_key_exists('assistant_id', $data) && $data['assistant_id'] === null) {
            $object->setAssistantId(null);
        }
        if (\array_key_exists('run_id', $data) && $data['run_id'] !== null) {
            $object->setRunId($data['run_id']);
            unset($data['run_id']);
        } elseif (\array_key_exists('run_id', $data) && $data['run_id'] === null) {
            $object->setRunId(null);
        }
        if (\array_key_exists('file_ids', $data)) {
            $values_1 = [];
            foreach ($data['file_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFileIds($values_1);
            unset($data['file_ids']);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setMetadata($values_2);
            unset($data['metadata']);
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
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
        $data['object'] = $object->getObject();
        $data['created_at'] = $object->getCreatedAt();
        $data['thread_id'] = $object->getThreadId();
        $data['role'] = $object->getRole();
        $values = [];
        foreach ($object->getContent() as $value) {
            $values[] = $value;
        }
        $data['content'] = $values;
        $data['assistant_id'] = $object->getAssistantId();
        $data['run_id'] = $object->getRunId();
        $values_1 = [];
        foreach ($object->getFileIds() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['file_ids'] = $values_1;
        $values_2 = [];
        foreach ($object->getMetadata() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $data['metadata'] = $values_2;
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            MessageObject::class => false,
        ];
    }
}
