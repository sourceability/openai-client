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
    protected ?string $type = null;

    protected ?ChatCompletionNamedToolChoiceFunction $function = null;

    /**
     * @param string $type The type of the tool. Currently, only `function` is supported.
     * @param ChatCompletionNamedToolChoiceFunction $function
     */
    public function __construct($type = null, $function = null)
    {
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
