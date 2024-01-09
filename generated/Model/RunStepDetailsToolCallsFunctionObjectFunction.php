<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsFunctionObjectFunction extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The name of the function.
     */
    protected ?string $name = null;

    /**
     * The arguments passed to the function.
     */
    protected ?string $arguments = null;

    /**
     * The output of the function. This will be `null` if the outputs have not been [submitted](/docs/api-reference/runs/submitToolOutputs) yet.
     */
    protected ?string $output = null;

    /**
     * @param string $name The name of the function.
     * @param string $arguments The arguments passed to the function.
     * @param string|null $output The output of the function. This will be `null` if the outputs have not been [submitted](/docs/api-reference/runs/submitToolOutputs) yet.
     */
    public function __construct($name = null, $arguments = null, $output = null)
    {
        if ($name !== null) {
            $this->setName($name);
        }
        if ($arguments !== null) {
            $this->setArguments($arguments);
        }
        if ($output !== null) {
            $this->setOutput($output);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The name of the function.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the function.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }

    /**
     * The arguments passed to the function.
     */
    public function getArguments(): string
    {
        return $this->arguments;
    }

    /**
     * The arguments passed to the function.
     */
    public function setArguments(string $arguments): self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }

    /**
     * The output of the function. This will be `null` if the outputs have not been [submitted](/docs/api-reference/runs/submitToolOutputs) yet.
     */
    public function getOutput(): ?string
    {
        return $this->output;
    }

    /**
     * The output of the function. This will be `null` if the outputs have not been [submitted](/docs/api-reference/runs/submitToolOutputs) yet.
     */
    public function setOutput(?string $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
