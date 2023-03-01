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
     * The contents of the message
     */
    protected ?string $content = null;

    /**
     * @param string $role The role of the author of this message.
     * @param string $content The contents of the message
     */
    public function __construct($role = null, $content = null)
    {
        if ($role !== null) {
            $this->setRole($role);
        }
        if ($content !== null) {
            $this->setContent($content);
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
}
