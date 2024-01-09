<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunToolCallObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the tool call. This ID must be referenced when you submit the tool outputs in using the [Submit tool outputs to run](/docs/api-reference/runs/submitToolOutputs) endpoint.
     */
    protected ?string $id = null;

    /**
     * The type of tool call the output is required for. For now, this is always `function`.
     */
    protected ?string $type = null;

    /**
     * The function definition.
     */
    protected ?RunToolCallObjectFunction $function = null;

    /**
     * @param string $id The ID of the tool call. This ID must be referenced when you submit the tool outputs in using the [Submit tool outputs to run](/docs/api-reference/runs/submitToolOutputs) endpoint.
     * @param string $type The type of tool call the output is required for. For now, this is always `function`.
     * @param RunToolCallObjectFunction $function The function definition.
     */
    public function __construct($id = null, $type = null, $function = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($type !== null) {
            $this->setType($type);
        }
        if ($function !== null) {
            $this->setFunction($function);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the tool call. This ID must be referenced when you submit the tool outputs in using the [Submit tool outputs to run](/docs/api-reference/runs/submitToolOutputs) endpoint.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The ID of the tool call. This ID must be referenced when you submit the tool outputs in using the [Submit tool outputs to run](/docs/api-reference/runs/submitToolOutputs) endpoint.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The type of tool call the output is required for. For now, this is always `function`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool call the output is required for. For now, this is always `function`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The function definition.
     */
    public function getFunction(): RunToolCallObjectFunction
    {
        return $this->function;
    }

    /**
     * The function definition.
     */
    public function setFunction(RunToolCallObjectFunction $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
}
