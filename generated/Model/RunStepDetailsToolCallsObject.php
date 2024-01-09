<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `tool_calls`.
     */
    protected string $type = 'tool_calls';

    /**
     * An array of tool calls the run step was involved in. These can be associated with one of three types of tools: `code_interpreter`, `retrieval`, or `function`.
     *
     * @var array<string, mixed>[]
     */
    protected ?array $toolCalls = null;

    /**
     * @param array<string, mixed>[] $toolCalls An array of tool calls the run step was involved in. These can be associated with one of three types of tools: `code_interpreter`, `retrieval`, or `function`.
     * @param string $type Always `tool_calls`.
     */
    public function __construct($toolCalls = null, $type = null)
    {
        if ($toolCalls !== null) {
            $this->setToolCalls($toolCalls);
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
     * Always `tool_calls`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `tool_calls`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * An array of tool calls the run step was involved in. These can be associated with one of three types of tools: `code_interpreter`, `retrieval`, or `function`.
     *
     * @return array<string, mixed>[]
     */
    public function getToolCalls(): array
    {
        return $this->toolCalls;
    }

    /**
     * An array of tool calls the run step was involved in. These can be associated with one of three types of tools: `code_interpreter`, `retrieval`, or `function`.
     *
     * @param array<string, mixed>[] $toolCalls
     */
    public function setToolCalls(array $toolCalls): self
    {
        $this->initialized['toolCalls'] = true;
        $this->toolCalls = $toolCalls;
        return $this;
    }
}
