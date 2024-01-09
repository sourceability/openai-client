<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateFineTuningJobRequestHyperparameters extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Number of examples in each batch. A larger batch size means that model parameters
     *
     * @var mixed
     */
    protected string $batchSize = 'auto';

    /**
     * Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
     *
     * @var mixed
     */
    protected string $learningRateMultiplier = 'auto';

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle
     *
     * @var mixed
     */
    protected string $nEpochs = 'auto';

    /**
     * @param mixed $batchSize Number of examples in each batch. A larger batch size means that model parameters
     *                         are updated less frequently, but with lower variance.
     * @param mixed $learningRateMultiplier Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
     *                                      overfitting.
     * @param mixed $nEpochs The number of epochs to train the model for. An epoch refers to one full cycle
     *                       through the training dataset.
     */
    public function __construct(mixed $batchSize = 'auto', mixed $learningRateMultiplier = 'auto', mixed $nEpochs = 'auto')
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
     * @return mixed
     */
    public function getBatchSize(): string
    {
        return $this->batchSize;
    }

    /**
     * Number of examples in each batch. A larger batch size means that model parameters
    are updated less frequently, but with lower variance.
     */
    public function setBatchSize(mixed $batchSize): self
    {
        $this->initialized['batchSize'] = true;
        $this->batchSize = $batchSize;
        return $this;
    }

    /**
     * Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
     *
     * @return mixed
     */
    public function getLearningRateMultiplier(): string
    {
        return $this->learningRateMultiplier;
    }

    /**
     * Scaling factor for the learning rate. A smaller learning rate may be useful to avoid
    overfitting.
     */
    public function setLearningRateMultiplier(mixed $learningRateMultiplier): self
    {
        $this->initialized['learningRateMultiplier'] = true;
        $this->learningRateMultiplier = $learningRateMultiplier;
        return $this;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle
     *
     * @return mixed
     */
    public function getNEpochs(): string
    {
        return $this->nEpochs;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle
    through the training dataset.
     */
    public function setNEpochs(mixed $nEpochs): self
    {
        $this->initialized['nEpochs'] = true;
        $this->nEpochs = $nEpochs;
        return $this;
    }
}
