<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsFunctionObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the tool call object.
     */
    protected ?string $id = null;

    /**
     * The type of tool call. This is always going to be `function` for this type of tool call.
     */
    protected ?string $type = null;

    /**
     * The definition of the function that was called.
     */
    protected ?RunStepDetailsToolCallsFunctionObjectFunction $function = null;

    /**
     * @param string $id The ID of the tool call object.
     * @param string $type The type of tool call. This is always going to be `function` for this type of tool call.
     * @param RunStepDetailsToolCallsFunctionObjectFunction $function The definition of the function that was called.
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
     * The ID of the tool call object.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The ID of the tool call object.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The type of tool call. This is always going to be `function` for this type of tool call.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool call. This is always going to be `function` for this type of tool call.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The definition of the function that was called.
     */
    public function getFunction(): RunStepDetailsToolCallsFunctionObjectFunction
    {
        return $this->function;
    }

    /**
     * The definition of the function that was called.
     */
    public function setFunction(RunStepDetailsToolCallsFunctionObjectFunction $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
}
