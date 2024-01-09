<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateFineTuningJobRequestHyperparameters;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateFineTuningJobRequestHyperparametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateFineTuningJobRequestHyperparameters::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateFineTuningJobRequestHyperparameters::class;
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
        $object = new CreateFineTuningJobRequestHyperparameters();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('batch_size', $data)) {
            $value = $data['batch_size'];
            if (is_string($data['batch_size'])) {
                $value = $data['batch_size'];
            } elseif (is_int($data['batch_size'])) {
                $value = $data['batch_size'];
            }
            $object->setBatchSize($value);
            unset($data['batch_size']);
        }
        if (\array_key_exists('learning_rate_multiplier', $data)) {
            $value_1 = $data['learning_rate_multiplier'];
            if (is_string($data['learning_rate_multiplier'])) {
                $value_1 = $data['learning_rate_multiplier'];
            } elseif (is_float($data['learning_rate_multiplier'])) {
                $value_1 = $data['learning_rate_multiplier'];
            }
            $object->setLearningRateMultiplier($value_1);
            unset($data['learning_rate_multiplier']);
        }
        if (\array_key_exists('n_epochs', $data)) {
            $value_2 = $data['n_epochs'];
            if (is_string($data['n_epochs'])) {
                $value_2 = $data['n_epochs'];
            } elseif (is_int($data['n_epochs'])) {
                $value_2 = $data['n_epochs'];
            }
            $object->setNEpochs($value_2);
            unset($data['n_epochs']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('batchSize') && $object->getBatchSize() !== null) {
            $value = $object->getBatchSize();
            if (is_string($object->getBatchSize())) {
                $value = $object->getBatchSize();
            } elseif (is_int($object->getBatchSize())) {
                $value = $object->getBatchSize();
            }
            $data['batch_size'] = $value;
        }
        if ($object->isInitialized('learningRateMultiplier') && $object->getLearningRateMultiplier() !== null) {
            $value_1 = $object->getLearningRateMultiplier();
            if (is_string($object->getLearningRateMultiplier())) {
                $value_1 = $object->getLearningRateMultiplier();
            } elseif (is_float($object->getLearningRateMultiplier())) {
                $value_1 = $object->getLearningRateMultiplier();
            }
            $data['learning_rate_multiplier'] = $value_1;
        }
        if ($object->isInitialized('nEpochs') && $object->getNEpochs() !== null) {
            $value_2 = $object->getNEpochs();
            if (is_string($object->getNEpochs())) {
                $value_2 = $object->getNEpochs();
            } elseif (is_int($object->getNEpochs())) {
                $value_2 = $object->getNEpochs();
            }
            $data['n_epochs'] = $value_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateFineTuningJobRequestHyperparameters::class => false,
        ];
    }
}
