<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionMessageToolCallChunk extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $index = null;

    /**
     * The ID of the tool call.
     */
    protected ?string $id = null;

    /**
     * The type of the tool. Currently, only `function` is supported.
     */
    protected ?string $type = null;

    protected ?ChatCompletionMessageToolCallChunkFunction $function = null;

    /**
     * @param int $index
     * @param string $id The ID of the tool call.
     * @param string $type The type of the tool. Currently, only `function` is supported.
     * @param ChatCompletionMessageToolCallChunkFunction $function
     */
    public function __construct($index = null, $id = null, $type = null, $function = null)
    {
        if ($index !== null) {
            $this->setIndex($index);
        }
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

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
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
     * The type of the tool. Currently, only `function` is supported.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the tool. Currently, only `function` is supported.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    public function getFunction(): ChatCompletionMessageToolCallChunkFunction
    {
        return $this->function;
    }

    public function setFunction(ChatCompletionMessageToolCallChunkFunction $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
}
