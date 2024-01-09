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
            $object->setBatchSize($data['batch_size']);
            unset($data['batch_size']);
        }
        if (\array_key_exists('learning_rate_multiplier', $data)) {
            $object->setLearningRateMultiplier($data['learning_rate_multiplier']);
            unset($data['learning_rate_multiplier']);
        }
        if (\array_key_exists('n_epochs', $data)) {
            $object->setNEpochs($data['n_epochs']);
            unset($data['n_epochs']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
            $data['batch_size'] = $object->getBatchSize();
        }
        if ($object->isInitialized('learningRateMultiplier') && $object->getLearningRateMultiplier() !== null) {
            $data['learning_rate_multiplier'] = $object->getLearningRateMultiplier();
        }
        if ($object->isInitialized('nEpochs') && $object->getNEpochs() !== null) {
            $data['n_epochs'] = $object->getNEpochs();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
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
