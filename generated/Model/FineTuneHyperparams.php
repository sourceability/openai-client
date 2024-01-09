<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTuneHyperparams extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The batch size to use for training. The batch size is the number of
    training examples used to train a single forward and backward pass.
     */
    protected ?int $batchSize = null;

    /**
     * The number of classes to use for computing classification metrics.
     */
    protected ?int $classificationNClasses = null;

    /**
     * The positive class to use for computing classification metrics.
     */
    protected ?string $classificationPositiveClass = null;

    /**
     * The classification metrics to compute using the validation dataset at the end of every epoch.
     */
    protected ?bool $computeClassificationMetrics = null;

    /**
     * The learning rate multiplier to use for training.
     */
    protected ?float $learningRateMultiplier = null;

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    protected ?int $nEpochs = null;

    /**
     * The weight to use for loss on the prompt tokens.
     */
    protected ?float $promptLossWeight = null;

    /**
     * @param int $batchSize The batch size to use for training. The batch size is the number of
     *                       training examples used to train a single forward and backward pass.
     * @param int $classificationNClasses The number of classes to use for computing classification metrics.
     * @param string $classificationPositiveClass The positive class to use for computing classification metrics.
     * @param bool $computeClassificationMetrics The classification metrics to compute using the validation dataset at the end of every epoch.
     * @param float $learningRateMultiplier The learning rate multiplier to use for training.
     * @param int $nEpochs The number of epochs to train the model for. An epoch refers to one
     *                     full cycle through the training dataset.
     * @param float $promptLossWeight The weight to use for loss on the prompt tokens.
     */
    public function __construct($batchSize = null, $classificationNClasses = null, $classificationPositiveClass = null, $computeClassificationMetrics = null, $learningRateMultiplier = null, $nEpochs = null, $promptLossWeight = null)
    {
        if ($batchSize !== null) {
            $this->setBatchSize($batchSize);
        }
        if ($classificationNClasses !== null) {
            $this->setClassificationNClasses($classificationNClasses);
        }
        if ($classificationPositiveClass !== null) {
            $this->setClassificationPositiveClass($classificationPositiveClass);
        }
        if ($computeClassificationMetrics !== null) {
            $this->setComputeClassificationMetrics($computeClassificationMetrics);
        }
        if ($learningRateMultiplier !== null) {
            $this->setLearningRateMultiplier($learningRateMultiplier);
        }
        if ($nEpochs !== null) {
            $this->setNEpochs($nEpochs);
        }
        if ($promptLossWeight !== null) {
            $this->setPromptLossWeight($promptLossWeight);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The batch size to use for training. The batch size is the number of
    training examples used to train a single forward and backward pass.
     */
    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    /**
     * The batch size to use for training. The batch size is the number of
    training examples used to train a single forward and backward pass.
     */
    public function setBatchSize(int $batchSize): self
    {
        $this->initialized['batchSize'] = true;
        $this->batchSize = $batchSize;
        return $this;
    }

    /**
     * The number of classes to use for computing classification metrics.
     */
    public function getClassificationNClasses(): int
    {
        return $this->classificationNClasses;
    }

    /**
     * The number of classes to use for computing classification metrics.
     */
    public function setClassificationNClasses(int $classificationNClasses): self
    {
        $this->initialized['classificationNClasses'] = true;
        $this->classificationNClasses = $classificationNClasses;
        return $this;
    }

    /**
     * The positive class to use for computing classification metrics.
     */
    public function getClassificationPositiveClass(): string
    {
        return $this->classificationPositiveClass;
    }

    /**
     * The positive class to use for computing classification metrics.
     */
    public function setClassificationPositiveClass(string $classificationPositiveClass): self
    {
        $this->initialized['classificationPositiveClass'] = true;
        $this->classificationPositiveClass = $classificationPositiveClass;
        return $this;
    }

    /**
     * The classification metrics to compute using the validation dataset at the end of every epoch.
     */
    public function getComputeClassificationMetrics(): bool
    {
        return $this->computeClassificationMetrics;
    }

    /**
     * The classification metrics to compute using the validation dataset at the end of every epoch.
     */
    public function setComputeClassificationMetrics(bool $computeClassificationMetrics): self
    {
        $this->initialized['computeClassificationMetrics'] = true;
        $this->computeClassificationMetrics = $computeClassificationMetrics;
        return $this;
    }

    /**
     * The learning rate multiplier to use for training.
     */
    public function getLearningRateMultiplier(): float
    {
        return $this->learningRateMultiplier;
    }

    /**
     * The learning rate multiplier to use for training.
     */
    public function setLearningRateMultiplier(float $learningRateMultiplier): self
    {
        $this->initialized['learningRateMultiplier'] = true;
        $this->learningRateMultiplier = $learningRateMultiplier;
        return $this;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    public function getNEpochs(): int
    {
        return $this->nEpochs;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    public function setNEpochs(int $nEpochs): self
    {
        $this->initialized['nEpochs'] = true;
        $this->nEpochs = $nEpochs;
        return $this;
    }

    /**
     * The weight to use for loss on the prompt tokens.
     */
    public function getPromptLossWeight(): float
    {
        return $this->promptLossWeight;
    }

    /**
     * The weight to use for loss on the prompt tokens.
     */
    public function setPromptLossWeight(float $promptLossWeight): self
    {
        $this->initialized['promptLossWeight'] = true;
        $this->promptLossWeight = $promptLossWeight;
        return $this;
    }
}
