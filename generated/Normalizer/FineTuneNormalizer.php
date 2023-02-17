<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\FineTune;
use Sourceability\OpenAIClient\Generated\Model\FineTuneEvent;
use Sourceability\OpenAIClient\Generated\Model\OpenAIFile;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FineTuneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === FineTune::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === FineTune::class;
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
        $object = new FineTune();
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
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('fine_tuned_model', $data) && $data['fine_tuned_model'] !== null) {
            $object->setFineTunedModel($data['fine_tuned_model']);
            unset($data['fine_tuned_model']);
        } elseif (\array_key_exists('fine_tuned_model', $data) && $data['fine_tuned_model'] === null) {
            $object->setFineTunedModel(null);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
            unset($data['organization_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('hyperparams', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['hyperparams'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setHyperparams($values);
            unset($data['hyperparams']);
        }
        if (\array_key_exists('training_files', $data)) {
            $values_1 = [];
            foreach ($data['training_files'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, OpenAIFile::class, 'json', $context);
            }
            $object->setTrainingFiles($values_1);
            unset($data['training_files']);
        }
        if (\array_key_exists('validation_files', $data)) {
            $values_2 = [];
            foreach ($data['validation_files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, OpenAIFile::class, 'json', $context);
            }
            $object->setValidationFiles($values_2);
            unset($data['validation_files']);
        }
        if (\array_key_exists('result_files', $data)) {
            $values_3 = [];
            foreach ($data['result_files'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, OpenAIFile::class, 'json', $context);
            }
            $object->setResultFiles($values_3);
            unset($data['result_files']);
        }
        if (\array_key_exists('events', $data)) {
            $values_4 = [];
            foreach ($data['events'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, FineTuneEvent::class, 'json', $context);
            }
            $object->setEvents($values_4);
            unset($data['events']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
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
        $data['updated_at'] = $object->getUpdatedAt();
        $data['model'] = $object->getModel();
        $data['fine_tuned_model'] = $object->getFineTunedModel();
        $data['organization_id'] = $object->getOrganizationId();
        $data['status'] = $object->getStatus();
        $values = [];
        foreach ($object->getHyperparams() as $key => $value) {
            $values[$key] = $value;
        }
        $data['hyperparams'] = $values;
        $values_1 = [];
        foreach ($object->getTrainingFiles() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['training_files'] = $values_1;
        $values_2 = [];
        foreach ($object->getValidationFiles() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['validation_files'] = $values_2;
        $values_3 = [];
        foreach ($object->getResultFiles() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['result_files'] = $values_3;
        if ($object->isInitialized('events') && $object->getEvents() !== null) {
            $values_4 = [];
            foreach ($object->getEvents() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['events'] = $values_4;
        }
        foreach ($object as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_5;
            }
        }
        return $data;
    }
}
