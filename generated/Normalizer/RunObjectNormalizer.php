<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\RunObject;
use Sourceability\OpenAIClient\Generated\Model\RunObjectLastError;
use Sourceability\OpenAIClient\Generated\Model\RunObjectRequiredAction;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RunObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === RunObject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === RunObject::class;
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
        $object = new RunObject();
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
        if (\array_key_exists('assistant_id', $data)) {
            $object->setAssistantId($data['assistant_id']);
            unset($data['assistant_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('required_action', $data) && $data['required_action'] !== null) {
            $object->setRequiredAction($this->denormalizer->denormalize($data['required_action'], RunObjectRequiredAction::class, 'json', $context));
            unset($data['required_action']);
        } elseif (\array_key_exists('required_action', $data) && $data['required_action'] === null) {
            $object->setRequiredAction(null);
        }
        if (\array_key_exists('last_error', $data) && $data['last_error'] !== null) {
            $object->setLastError($this->denormalizer->denormalize($data['last_error'], RunObjectLastError::class, 'json', $context));
            unset($data['last_error']);
        } elseif (\array_key_exists('last_error', $data) && $data['last_error'] === null) {
            $object->setLastError(null);
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt($data['expires_at']);
            unset($data['expires_at']);
        }
        if (\array_key_exists('started_at', $data) && $data['started_at'] !== null) {
            $object->setStartedAt($data['started_at']);
            unset($data['started_at']);
        } elseif (\array_key_exists('started_at', $data) && $data['started_at'] === null) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('cancelled_at', $data) && $data['cancelled_at'] !== null) {
            $object->setCancelledAt($data['cancelled_at']);
            unset($data['cancelled_at']);
        } elseif (\array_key_exists('cancelled_at', $data) && $data['cancelled_at'] === null) {
            $object->setCancelledAt(null);
        }
        if (\array_key_exists('failed_at', $data) && $data['failed_at'] !== null) {
            $object->setFailedAt($data['failed_at']);
            unset($data['failed_at']);
        } elseif (\array_key_exists('failed_at', $data) && $data['failed_at'] === null) {
            $object->setFailedAt(null);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $object->setCompletedAt($data['completed_at']);
            unset($data['completed_at']);
        } elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('instructions', $data)) {
            $object->setInstructions($data['instructions']);
            unset($data['instructions']);
        }
        if (\array_key_exists('tools', $data)) {
            $values = [];
            foreach ($data['tools'] as $value) {
                $values[] = $value;
            }
            $object->setTools($values);
            unset($data['tools']);
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
        $data['assistant_id'] = $object->getAssistantId();
        $data['status'] = $object->getStatus();
        $data['required_action'] = $this->normalizer->normalize($object->getRequiredAction(), 'json', $context);
        $data['last_error'] = $this->normalizer->normalize($object->getLastError(), 'json', $context);
        $data['expires_at'] = $object->getExpiresAt();
        $data['started_at'] = $object->getStartedAt();
        $data['cancelled_at'] = $object->getCancelledAt();
        $data['failed_at'] = $object->getFailedAt();
        $data['completed_at'] = $object->getCompletedAt();
        $data['model'] = $object->getModel();
        $data['instructions'] = $object->getInstructions();
        $values = [];
        foreach ($object->getTools() as $value) {
            $values[] = $value;
        }
        $data['tools'] = $values;
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
            RunObject::class => false,
        ];
    }
}
