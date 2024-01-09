<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\FineTune;
use Sourceability\OpenAIClient\Generated\Model\FineTuneEvent;
use Sourceability\OpenAIClient\Generated\Model\FineTuneHyperparams;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === FineTune::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
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
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('events', $data)) {
            $values = [];
            foreach ($data['events'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, FineTuneEvent::class, 'json', $context);
            }
            $object->setEvents($values);
            unset($data['events']);
        }
        if (\array_key_exists('fine_tuned_model', $data) && $data['fine_tuned_model'] !== null) {
            $object->setFineTunedModel($data['fine_tuned_model']);
            unset($data['fine_tuned_model']);
        } elseif (\array_key_exists('fine_tuned_model', $data) && $data['fine_tuned_model'] === null) {
            $object->setFineTunedModel(null);
        }
        if (\array_key_exists('hyperparams', $data)) {
            $object->setHyperparams($this->denormalizer->denormalize($data['hyperparams'], FineTuneHyperparams::class, 'json', $context));
            unset($data['hyperparams']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
            unset($data['organization_id']);
        }
        if (\array_key_exists('result_files', $data)) {
            $values_1 = [];
            foreach ($data['result_files'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, OpenAIFile::class, 'json', $context);
            }
            $object->setResultFiles($values_1);
            unset($data['result_files']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('training_files', $data)) {
            $values_2 = [];
            foreach ($data['training_files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, OpenAIFile::class, 'json', $context);
            }
            $object->setTrainingFiles($values_2);
            unset($data['training_files']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('validation_files', $data)) {
            $values_3 = [];
            foreach ($data['validation_files'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, OpenAIFile::class, 'json', $context);
            }
            $object->setValidationFiles($values_3);
            unset($data['validation_files']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($object->isInitialized('events') && $object->getEvents() !== null) {
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['events'] = $values;
        }
        $data['fine_tuned_model'] = $object->getFineTunedModel();
        $data['hyperparams'] = $this->normalizer->normalize($object->getHyperparams(), 'json', $context);
        $data['model'] = $object->getModel();
        $data['organization_id'] = $object->getOrganizationId();
        $values_1 = [];
        foreach ($object->getResultFiles() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['result_files'] = $values_1;
        $data['status'] = $object->getStatus();
        $values_2 = [];
        foreach ($object->getTrainingFiles() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['training_files'] = $values_2;
        $data['updated_at'] = $object->getUpdatedAt();
        $values_3 = [];
        foreach ($object->getValidationFiles() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['validation_files'] = $values_3;
        $data['object'] = $object->getObject();
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            FineTune::class => false,
        ];
    }
}
