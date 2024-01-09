<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuningJobRequest;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuningJobRequestHyperparameters;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateFineTuningJobRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateFineTuningJobRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateFineTuningJobRequest::class;
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
        $object = new CreateFineTuningJobRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $value = $data['model'];
            if (is_string($data['model'])) {
                $value = $data['model'];
            } elseif (is_string($data['model'])) {
                $value = $data['model'];
            }
            $object->setModel($value);
            unset($data['model']);
        }
        if (\array_key_exists('training_file', $data)) {
            $object->setTrainingFile($data['training_file']);
            unset($data['training_file']);
        }
        if (\array_key_exists('hyperparameters', $data)) {
            $object->setHyperparameters($this->denormalizer->denormalize($data['hyperparameters'], CreateFineTuningJobRequestHyperparameters::class, 'json', $context));
            unset($data['hyperparameters']);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
            unset($data['suffix']);
        } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('validation_file', $data) && $data['validation_file'] !== null) {
            $object->setValidationFile($data['validation_file']);
            unset($data['validation_file']);
        } elseif (\array_key_exists('validation_file', $data) && $data['validation_file'] === null) {
            $object->setValidationFile(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $value = $object->getModel();
        if (is_string($object->getModel())) {
            $value = $object->getModel();
        } elseif (is_string($object->getModel())) {
            $value = $object->getModel();
        }
        $data['model'] = $value;
        $data['training_file'] = $object->getTrainingFile();
        if ($object->isInitialized('hyperparameters') && $object->getHyperparameters() !== null) {
            $data['hyperparameters'] = $this->normalizer->normalize($object->getHyperparameters(), 'json', $context);
        }
        if ($object->isInitialized('suffix') && $object->getSuffix() !== null) {
            $data['suffix'] = $object->getSuffix();
        }
        if ($object->isInitialized('validationFile') && $object->getValidationFile() !== null) {
            $data['validation_file'] = $object->getValidationFile();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateFineTuningJobRequest::class => false,
        ];
    }
}
