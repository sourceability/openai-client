<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateFineTuningJobRequestHyperparameters extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Number of examples in each batch. A larger batch size means that model parameters
    are updated less frequently, but with lower variance.
     */
    protected string $batchSize = 'auto';

    /**
     * Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
    overfitting.
     */
    protected string $learningRateMultiplier = 'auto';

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle
    through the training dataset.
     */
    protected string $nEpochs = 'auto';

    /**
     * @param string|int $batchSize Number of examples in each batch. A larger batch size means that model parameters
     *                              are updated less frequently, but with lower variance.
     * @param string|float $learningRateMultiplier Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
     *                                             overfitting.
     * @param string|int $nEpochs The number of epochs to train the model for. An epoch refers to one full cycle
     *                            through the training dataset.
     */
    public function __construct($batchSize = 'auto', $learningRateMultiplier = 'auto', $nEpochs = 'auto')
    {
        if ($batchSize !== null) {
            $this->setBatchSize($batchSize);
        }
        if ($learningRateMultiplier !== null) {
            $this->setLearningRateMultiplier($learningRateMultiplier);
        }
        if ($nEpochs !== null) {
            $this->setNEpochs($nEpochs);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Number of examples in each batch. A larger batch size means that model parameters
     *
     * @return string|int
     */
    public function getBatchSize(): string
    {
        return $this->batchSize;
    }

    /**
     * Number of examples in each batch. A larger batch size means that model parameters
     *
     * @param string|int $batchSize
     */
    public function setBatchSize(string $batchSize): self
    {
        $this->initialized['batchSize'] = true;
        $this->batchSize = $batchSize;
        return $this;
    }

    /**
     * Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
     *
     * @return string|float
     */
    public function getLearningRateMultiplier(): string
    {
        return $this->learningRateMultiplier;
    }

    /**
     * Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
     *
     * @param string|float $learningRateMultiplier
     */
    public function setLearningRateMultiplier(string $learningRateMultiplier): self
    {
        $this->initialized['learningRateMultiplier'] = true;
        $this->learningRateMultiplier = $learningRateMultiplier;
        return $this;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle
     *
     * @return string|int
     */
    public function getNEpochs(): string
    {
        return $this->nEpochs;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle
     *
     * @param string|int $nEpochs
     */
    public function setNEpochs(string $nEpochs): self
    {
        $this->initialized['nEpochs'] = true;
        $this->nEpochs = $nEpochs;
        return $this;
    }
}
