<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestToolMessage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The role of the messages author, in this case `tool`.
     */
    protected string $role = 'tool';

    /**
     * The contents of the tool message.
     */
    protected ?string $content = null;

    /**
     * Tool call that this message is responding to.
     */
    protected ?string $toolCallId = null;

    /**
     * @param string $content The contents of the tool message.
     * @param string $toolCallId Tool call that this message is responding to.
     * @param string $role The role of the messages author, in this case `tool`.
     */
    public function __construct($content = null, $toolCallId = null, $role = null)
    {
        if ($content !== null) {
            $this->setContent($content);
        }
        if ($toolCallId !== null) {
            $this->setToolCallId($toolCallId);
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
     * The role of the messages author, in this case `tool`.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * The role of the messages author, in this case `tool`.
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }

    /**
     * The contents of the tool message.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The contents of the tool message.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * Tool call that this message is responding to.
     */
    public function getToolCallId(): string
    {
        return $this->toolCallId;
    }

    /**
     * Tool call that this message is responding to.
     */
    public function setToolCallId(string $toolCallId): self
    {
        $this->initialized['toolCallId'] = true;
        $this->toolCallId = $toolCallId;
        return $this;
    }
}
