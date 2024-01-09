<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTuningJobHyperparameters extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle through the training dataset.
     *
     * @var mixed
     */
    protected string $nEpochs = 'auto';

    /**
     * @param mixed $nEpochs The number of epochs to train the model for. An epoch refers to one full cycle through the training dataset.
     *                       "auto" decides the optimal number of epochs based on the size of the dataset. If setting the number manually, we support any number between 1 and 50 epochs.
     */
    public function __construct(mixed $nEpochs = 'auto')
    {
        if ($nEpochs !== null) {
            $this->setNEpochs($nEpochs);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle through the training dataset.
     *
     * @return mixed
     */
    public function getNEpochs(): string
    {
        return $this->nEpochs;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one full cycle through the training dataset.
    "auto" decides the optimal number of epochs based on the size of the dataset. If setting the number manually, we support any number between 1 and 50 epochs.
     */
    public function setNEpochs(mixed $nEpochs): self
    {
        $this->initialized['nEpochs'] = true;
        $this->nEpochs = $nEpochs;
        return $this;
    }
}
