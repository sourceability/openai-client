<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsCodeObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the tool call.
     */
    protected ?string $id = null;

    /**
     * The type of tool call. This is always going to be `code_interpreter` for this type of tool call.
     */
    protected string $type = 'code_interpreter';

    /**
     * The Code Interpreter tool call definition.
     */
    protected ?RunStepDetailsToolCallsCodeObjectCodeInterpreter $codeInterpreter = null;

    /**
     * @param string $id The ID of the tool call.
     * @param RunStepDetailsToolCallsCodeObjectCodeInterpreter $codeInterpreter The Code Interpreter tool call definition.
     * @param string $type The type of tool call. This is always going to be `code_interpreter` for this type of tool call.
     */
    public function __construct($id = null, $codeInterpreter = null, $type = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($codeInterpreter !== null) {
            $this->setCodeInterpreter($codeInterpreter);
        }
        if ($type !== null) {
            $this->setType($type);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the tool call.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The ID of the tool call.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The type of tool call. This is always going to be `code_interpreter` for this type of tool call.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool call. This is always going to be `code_interpreter` for this type of tool call.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The Code Interpreter tool call definition.
     */
    public function getCodeInterpreter(): RunStepDetailsToolCallsCodeObjectCodeInterpreter
    {
        return $this->codeInterpreter;
    }

    /**
     * The Code Interpreter tool call definition.
     */
    public function setCodeInterpreter(RunStepDetailsToolCallsCodeObjectCodeInterpreter $codeInterpreter): self
    {
        $this->initialized['codeInterpreter'] = true;
        $this->codeInterpreter = $codeInterpreter;
        return $this;
    }
}
