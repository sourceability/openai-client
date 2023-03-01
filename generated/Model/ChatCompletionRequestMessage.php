<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestMessage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The role of the author of this message.
     */
    protected ?string $role = null;

    /**
     * The contents of the message
     */
    protected ?string $content = null;

    /**
     * The name of the user in a multi-user chat
     */
    protected ?string $name = null;

    /**
     * @param string $role The role of the author of this message.
     * @param string $content The contents of the message
     * @param string $name The name of the user in a multi-user chat
     */
    public function __construct($role = null, $content = null, $name = null)
    {
        if ($role !== null) {
            $this->setRole($role);
        }
        if ($content !== null) {
            $this->setContent($content);
        }
        if ($name !== null) {
            $this->setName($name);
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
     * The contents of the message
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The contents of the message
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * The name of the user in a multi-user chat
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the user in a multi-user chat
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
