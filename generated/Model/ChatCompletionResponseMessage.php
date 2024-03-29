<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionResponseMessage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The role of the author of this message.
     */
    protected ?string $role = null;

    /**
     * The contents of the message.
     */
    protected ?string $content = null;

    /**
     * The name and arguments of a function that should be called, as generated by the model.
     */
    protected ?ChatCompletionResponseMessageFunctionCall $functionCall = null;

    /**
     * @param string $role The role of the author of this message.
     * @param string|null $content The contents of the message.
     * @param ChatCompletionResponseMessageFunctionCall|null $functionCall The name and arguments of a function that should be called, as generated by the model.
     */
    public function __construct($role = null, $content = null, $functionCall = null)
    {
        if ($role !== null) {
            $this->setRole($role);
        }
        if ($content !== null) {
            $this->setContent($content);
        }
        if ($functionCall !== null) {
            $this->setFunctionCall($functionCall);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The role of the author of this message.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * The role of the author of this message.
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }

    /**
     * The contents of the message.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The contents of the message.
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * The name and arguments of a function that should be called, as generated by the model.
     */
    public function getFunctionCall(): ?ChatCompletionResponseMessageFunctionCall
    {
        return $this->functionCall;
    }

    /**
     * The name and arguments of a function that should be called, as generated by the model.
     */
    public function setFunctionCall(?ChatCompletionResponseMessageFunctionCall $functionCall): self
    {
        $this->initialized['functionCall'] = true;
        $this->functionCall = $functionCall;
        return $this;
    }
}
