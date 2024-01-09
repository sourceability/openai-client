<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

/**
 * @deprecated
 */
class ChatCompletionRequestFunctionMessage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The role of the messages author, in this case `function`.
     */
    protected string $role = 'function';

    /**
     * The contents of the function message.
     */
    protected ?string $content = null;

    /**
     * The name of the function to call.
     */
    protected ?string $name = null;

    /**
     * @param string|null $content The contents of the function message.
     * @param string $name The name of the function to call.
     * @param string $role The role of the messages author, in this case `function`.
     */
    public function __construct($content = null, $name = null, $role = null)
    {
        if ($content !== null) {
            $this->setContent($content);
        }
        if ($name !== null) {
            $this->setName($name);
        }
        if ($role !== null) {
            $this->setRole($role);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The role of the messages author, in this case `function`.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * The role of the messages author, in this case `function`.
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }

    /**
     * The contents of the function message.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The contents of the function message.
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * The name of the function to call.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the function to call.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
