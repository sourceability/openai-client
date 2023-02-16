<?php

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CreateFineTuneRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateFineTuneRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateFineTuneRequest';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateFineTuneRequest();
        if (\array_key_exists('learning_rate_multiplier', $data) && \is_int($data['learning_rate_multiplier'])) {
            $data['learning_rate_multiplier'] = (double) $data['learning_rate_multiplier'];
        }
        if (\array_key_exists('prompt_loss_weight', $data) && \is_int($data['prompt_loss_weight'])) {
            $data['prompt_loss_weight'] = (double) $data['prompt_loss_weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('training_file', $data)) {
            $object->setTrainingFile($data['training_file']);
            unset($data['training_file']);
        }
        if (\array_key_exists('validation_file', $data) && $data['validation_file'] !== null) {
            $object->setValidationFile($data['validation_file']);
            unset($data['validation_file']);
        }
        elseif (\array_key_exists('validation_file', $data) && $data['validation_file'] === null) {
            $object->setValidationFile(null);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('n_epochs', $data) && $data['n_epochs'] !== null) {
            $object->setNEpochs($data['n_epochs']);
            unset($data['n_epochs']);
        }
        elseif (\array_key_exists('n_epochs', $data) && $data['n_epochs'] === null) {
            $object->setNEpochs(null);
        }
        if (\array_key_exists('batch_size', $data) && $data['batch_size'] !== null) {
            $object->setBatchSize($data['batch_size']);
            unset($data['batch_size']);
        }
        elseif (\array_key_exists('batch_size', $data) && $data['batch_size'] === null) {
            $object->setBatchSize(null);
        }
        if (\array_key_exists('learning_rate_multiplier', $data) && $data['learning_rate_multiplier'] !== null) {
            $object->setLearningRateMultiplier($data['learning_rate_multiplier']);
            unset($data['learning_rate_multiplier']);
        }
        elseif (\array_key_exists('learning_rate_multiplier', $data) && $data['learning_rate_multiplier'] === null) {
            $object->setLearningRateMultiplier(null);
        }
        if (\array_key_exists('prompt_loss_weight', $data) && $data['prompt_loss_weight'] !== null) {
            $object->setPromptLossWeight($data['prompt_loss_weight']);
            unset($data['prompt_loss_weight']);
        }
        elseif (\array_key_exists('prompt_loss_weight', $data) && $data['prompt_loss_weight'] === null) {
            $object->setPromptLossWeight(null);
        }
        if (\array_key_exists('compute_classification_metrics', $data) && $data['compute_classification_metrics'] !== null) {
            $object->setComputeClassificationMetrics($data['compute_classification_metrics']);
            unset($data['compute_classification_metrics']);
        }
        elseif (\array_key_exists('compute_classification_metrics', $data) && $data['compute_classification_metrics'] === null) {
            $object->setComputeClassificationMetrics(null);
        }
        if (\array_key_exists('classification_n_classes', $data) && $data['classification_n_classes'] !== null) {
            $object->setClassificationNClasses($data['classification_n_classes']);
            unset($data['classification_n_classes']);
        }
        elseif (\array_key_exists('classification_n_classes', $data) && $data['classification_n_classes'] === null) {
            $object->setClassificationNClasses(null);
        }
        if (\array_key_exists('classification_positive_class', $data) && $data['classification_positive_class'] !== null) {
            $object->setClassificationPositiveClass($data['classification_positive_class']);
            unset($data['classification_positive_class']);
        }
        elseif (\array_key_exists('classification_positive_class', $data) && $data['classification_positive_class'] === null) {
            $object->setClassificationPositiveClass(null);
        }
        if (\array_key_exists('classification_betas', $data) && $data['classification_betas'] !== null) {
            $values = array();
            foreach ($data['classification_betas'] as $value) {
                $values[] = $value;
            }
            $object->setClassificationBetas($values);
            unset($data['classification_betas']);
        }
        elseif (\array_key_exists('classification_betas', $data) && $data['classification_betas'] === null) {
            $object->setClassificationBetas(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
            unset($data['suffix']);
        }
        elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['training_file'] = $object->getTrainingFile();
        if ($object->isInitialized('validationFile') && null !== $object->getValidationFile()) {
            $data['validation_file'] = $object->getValidationFile();
        }
        if ($object->isInitialized('model') && null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if ($object->isInitialized('nEpochs') && null !== $object->getNEpochs()) {
            $data['n_epochs'] = $object->getNEpochs();
        }
        if ($object->isInitialized('batchSize') && null !== $object->getBatchSize()) {
            $data['batch_size'] = $object->getBatchSize();
        }
        if ($object->isInitialized('learningRateMultiplier') && null !== $object->getLearningRateMultiplier()) {
            $data['learning_rate_multiplier'] = $object->getLearningRateMultiplier();
        }
        if ($object->isInitialized('promptLossWeight') && null !== $object->getPromptLossWeight()) {
            $data['prompt_loss_weight'] = $object->getPromptLossWeight();
        }
        if ($object->isInitialized('computeClassificationMetrics') && null !== $object->getComputeClassificationMetrics()) {
            $data['compute_classification_metrics'] = $object->getComputeClassificationMetrics();
        }
        if ($object->isInitialized('classificationNClasses') && null !== $object->getClassificationNClasses()) {
            $data['classification_n_classes'] = $object->getClassificationNClasses();
        }
        if ($object->isInitialized('classificationPositiveClass') && null !== $object->getClassificationPositiveClass()) {
            $data['classification_positive_class'] = $object->getClassificationPositiveClass();
        }
        if ($object->isInitialized('classificationBetas') && null !== $object->getClassificationBetas()) {
            $values = array();
            foreach ($object->getClassificationBetas() as $value) {
                $values[] = $value;
            }
            $data['classification_betas'] = $values;
        }
        if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}