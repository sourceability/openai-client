<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class SubmitToolOutputsRunRequest
{
    protected array $initialized = [];

    /**
     * A list of tools for which the outputs are being submitted.
     *
     * @var SubmitToolOutputsRunRequestToolOutputsItem[]
     */
    protected ?array $toolOutputs = null;

    /**
     * @param SubmitToolOutputsRunRequestToolOutputsItem[] $toolOutputs A list of tools for which the outputs are being submitted.
     */
    public function __construct($toolOutputs = null)
    {
        if ($toolOutputs !== null) {
            $this->setToolOutputs($toolOutputs);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A list of tools for which the outputs are being submitted.
     *
     * @return SubmitToolOutputsRunRequestToolOutputsItem[]
     */
    public function getToolOutputs(): array
    {
        return $this->toolOutputs;
    }

    /**
     * A list of tools for which the outputs are being submitted.
     *
     * @param SubmitToolOutputsRunRequestToolOutputsItem[] $toolOutputs
     */
    public function setToolOutputs(array $toolOutputs): self
    {
        $this->initialized['toolOutputs'] = true;
        $this->toolOutputs = $toolOutputs;
        return $this;
    }
}
