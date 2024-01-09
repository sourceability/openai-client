<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateFineTuneRequestHyperparameters extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    protected string $nEpochs = 'auto';

    /**
     * @param string|int $nEpochs The number of epochs to train the model for. An epoch refers to one
     *                            full cycle through the training dataset.
     */
    public function __construct($nEpochs = 'auto')
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
     * The number of epochs to train the model for. An epoch refers to one
     *
     * @return string|int
     */
    public function getNEpochs(): string
    {
        return $this->nEpochs;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one
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
