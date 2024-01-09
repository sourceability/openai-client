<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\FineTuneHyperparams;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FineTuneHyperparamsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === FineTuneHyperparams::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === FineTuneHyperparams::class;
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
        $object = new FineTuneHyperparams();
        if (\array_key_exists('learning_rate_multiplier', $data) && \is_int($data['learning_rate_multiplier'])) {
            $data['learning_rate_multiplier'] = (float) $data['learning_rate_multiplier'];
        }
        if (\array_key_exists('prompt_loss_weight', $data) && \is_int($data['prompt_loss_weight'])) {
            $data['prompt_loss_weight'] = (float) $data['prompt_loss_weight'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('batch_size', $data)) {
            $object->setBatchSize($data['batch_size']);
            unset($data['batch_size']);
        }
        if (\array_key_exists('classification_n_classes', $data)) {
            $object->setClassificationNClasses($data['classification_n_classes']);
            unset($data['classification_n_classes']);
        }
        if (\array_key_exists('classification_positive_class', $data)) {
            $object->setClassificationPositiveClass($data['classification_positive_class']);
            unset($data['classification_positive_class']);
        }
        if (\array_key_exists('compute_classification_metrics', $data)) {
            $object->setComputeClassificationMetrics($data['compute_classification_metrics']);
            unset($data['compute_classification_metrics']);
        }
        if (\array_key_exists('learning_rate_multiplier', $data)) {
            $object->setLearningRateMultiplier($data['learning_rate_multiplier']);
            unset($data['learning_rate_multiplier']);
        }
        if (\array_key_exists('n_epochs', $data)) {
            $object->setNEpochs($data['n_epochs']);
            unset($data['n_epochs']);
        }
        if (\array_key_exists('prompt_loss_weight', $data)) {
            $object->setPromptLossWeight($data['prompt_loss_weight']);
            unset($data['prompt_loss_weight']);
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
        $data['batch_size'] = $object->getBatchSize();
        if ($object->isInitialized('classificationNClasses') && $object->getClassificationNClasses() !== null) {
            $data['classification_n_classes'] = $object->getClassificationNClasses();
        }
        if ($object->isInitialized('classificationPositiveClass') && $object->getClassificationPositiveClass() !== null) {
            $data['classification_positive_class'] = $object->getClassificationPositiveClass();
        }
        if ($object->isInitialized('computeClassificationMetrics') && $object->getComputeClassificationMetrics() !== null) {
            $data['compute_classification_metrics'] = $object->getComputeClassificationMetrics();
        }
        $data['learning_rate_multiplier'] = $object->getLearningRateMultiplier();
        $data['n_epochs'] = $object->getNEpochs();
        $data['prompt_loss_weight'] = $object->getPromptLossWeight();
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
            FineTuneHyperparams::class => false,
        ];
    }
}
