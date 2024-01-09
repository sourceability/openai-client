<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionNamedToolChoice extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The type of the tool. Currently, only `function` is supported.
     */
    protected string $type = 'function';

    protected ?ChatCompletionNamedToolChoiceFunction $function = null;

    /**
     * @param ChatCompletionNamedToolChoiceFunction $function
     * @param string $type The type of the tool. Currently, only `function` is supported.
     */
    public function __construct($function = null, $type = null)
    {
        if ($function !== null) {
            $this->setFunction($function);
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

    public function getFunction(): ChatCompletionNamedToolChoiceFunction
    {
        return $this->function;
    }

    public function setFunction(ChatCompletionNamedToolChoiceFunction $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
}
