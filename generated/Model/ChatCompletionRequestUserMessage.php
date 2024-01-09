<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestUserMessage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The contents of the user message.
     *
     * @var string|ChatCompletionRequestMessageContentPartText[]|ChatCompletionRequestMessageContentPartImage[]
     */
    protected $content = null;

    /**
     * The role of the messages author, in this case `user`.
     */
    protected string $role = 'user';

    /**
     * An optional name for the participant. Provides the model information to differentiate between participants of the same role.
     */
    protected ?string $name = null;

    /**
     * @param string|ChatCompletionRequestMessageContentPartText[]|ChatCompletionRequestMessageContentPartImage[] $content The contents of the user message.
     * @param string $name An optional name for the participant. Provides the model information to differentiate between participants of the same role.
     * @param string $role The role of the messages author, in this case `user`.
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
     * The contents of the user message.
     *
     * @return string|ChatCompletionRequestMessageContentPartText[]|ChatCompletionRequestMessageContentPartImage[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The contents of the user message.
     *
     * @param string|ChatCompletionRequestMessageContentPartText[]|ChatCompletionRequestMessageContentPartImage[] $content
     */
    public function setContent($content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * The role of the messages author, in this case `user`.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * The role of the messages author, in this case `user`.
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }

    /**
     * An optional name for the participant. Provides the model information to differentiate between participants of the same role.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * An optional name for the participant. Provides the model information to differentiate between participants of the same role.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
