<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsCodeObjectCodeInterpreter extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The input to the Code Interpreter tool call.
     */
    protected ?string $input = null;

    /**
     * The outputs from the Code Interpreter tool call. Code Interpreter can output one or more items, including text (`logs`) or images (`image`). Each of these are represented by a different object type.
     *
     * @var array<string, mixed>[]
     */
    protected ?array $outputs = null;

    /**
     * @param string $input The input to the Code Interpreter tool call.
     * @param array<string, mixed>[] $outputs The outputs from the Code Interpreter tool call. Code Interpreter can output one or more items, including text (`logs`) or images (`image`). Each of these are represented by a different object type.
     */
    public function __construct($input = null, $outputs = null)
    {
        if ($input !== null) {
            $this->setInput($input);
        }
        if ($outputs !== null) {
            $this->setOutputs($outputs);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The input to the Code Interpreter tool call.
     */
    public function getInput(): string
    {
        return $this->input;
    }

    /**
     * The input to the Code Interpreter tool call.
     */
    public function setInput(string $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }

    /**
     * The outputs from the Code Interpreter tool call. Code Interpreter can output one or more items, including text (`logs`) or images (`image`). Each of these are represented by a different object type.
     *
     * @return array<string, mixed>[]
     */
    public function getOutputs(): array
    {
        return $this->outputs;
    }

    /**
     * The outputs from the Code Interpreter tool call. Code Interpreter can output one or more items, including text (`logs`) or images (`image`). Each of these are represented by a different object type.
     *
     * @param array<string, mixed>[] $outputs
     */
    public function setOutputs(array $outputs): self
    {
        $this->initialized['outputs'] = true;
        $this->outputs = $outputs;
        return $this;
    }
}
