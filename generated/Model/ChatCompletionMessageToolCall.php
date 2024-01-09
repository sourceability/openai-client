<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionMessageToolCall extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the tool call.
     */
    protected ?string $id = null;

    /**
     * The type of the tool. Currently, only `function` is supported.
     */
    protected ?string $type = null;

    /**
     * The function that the model called.
     */
    protected ?ChatCompletionMessageToolCallFunction $function = null;

    /**
     * @param string $id The ID of the tool call.
     * @param string $type The type of the tool. Currently, only `function` is supported.
     * @param ChatCompletionMessageToolCallFunction $function The function that the model called.
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

    /**
     * The function that the model called.
     */
    public function getFunction(): ChatCompletionMessageToolCallFunction
    {
        return $this->function;
    }

    /**
     * The function that the model called.
     */
    public function setFunction(ChatCompletionMessageToolCallFunction $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
}
