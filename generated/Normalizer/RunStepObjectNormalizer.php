<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\RunStepObject;
use Sourceability\OpenAIClient\Generated\Model\RunStepObjectLastError;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RunStepObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === RunStepObject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === RunStepObject::class;
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
        $object = new RunStepObject();
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
        if (\array_key_exists('assistant_id', $data)) {
            $object->setAssistantId($data['assistant_id']);
            unset($data['assistant_id']);
        }
        if (\array_key_exists('thread_id', $data)) {
            $object->setThreadId($data['thread_id']);
            unset($data['thread_id']);
        }
        if (\array_key_exists('run_id', $data)) {
            $object->setRunId($data['run_id']);
            unset($data['run_id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('step_details', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['step_details'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setStepDetails($values);
            unset($data['step_details']);
        }
        if (\array_key_exists('last_error', $data) && $data['last_error'] !== null) {
            $object->setLastError($this->denormalizer->denormalize($data['last_error'], RunStepObjectLastError::class, 'json', $context));
            unset($data['last_error']);
        } elseif (\array_key_exists('last_error', $data) && $data['last_error'] === null) {
            $object->setLastError(null);
        }
        if (\array_key_exists('expired_at', $data) && $data['expired_at'] !== null) {
            $object->setExpiredAt($data['expired_at']);
            unset($data['expired_at']);
        } elseif (\array_key_exists('expired_at', $data) && $data['expired_at'] === null) {
            $object->setExpiredAt(null);
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
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setMetadata($values_1);
            unset($data['metadata']);
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
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
        $data['assistant_id'] = $object->getAssistantId();
        $data['thread_id'] = $object->getThreadId();
        $data['run_id'] = $object->getRunId();
        $data['type'] = $object->getType();
        $data['status'] = $object->getStatus();
        $values = [];
        foreach ($object->getStepDetails() as $key => $value) {
            $values[$key] = $value;
        }
        $data['step_details'] = $values;
        $data['last_error'] = $this->normalizer->normalize($object->getLastError(), 'json', $context);
        $data['expired_at'] = $object->getExpiredAt();
        $data['cancelled_at'] = $object->getCancelledAt();
        $data['failed_at'] = $object->getFailedAt();
        $data['completed_at'] = $object->getCompletedAt();
        $values_1 = [];
        foreach ($object->getMetadata() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $data['metadata'] = $values_1;
        $data['object'] = $object->getObject();
        foreach ($object as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $data[$key_2] = $value_2;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            RunStepObject::class => false,
        ];
    }
}
