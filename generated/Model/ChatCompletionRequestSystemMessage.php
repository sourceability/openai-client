<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestSystemMessage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The contents of the system message.
     */
    protected ?string $content = null;

    /**
     * The role of the messages author, in this case `system`.
     */
    protected ?string $role = null;

    /**
     * An optional name for the participant. Provides the model information to differentiate between participants of the same role.
     */
    protected ?string $name = null;

    /**
     * @param string $content The contents of the system message.
     * @param string $role The role of the messages author, in this case `system`.
     * @param string $name An optional name for the participant. Provides the model information to differentiate between participants of the same role.
     */
    public function __construct($content = null, $role = null, $name = null)
    {
        if ($content !== null) {
            $this->setContent($content);
        }
        if ($role !== null) {
            $this->setRole($role);
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
     * The contents of the system message.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The contents of the system message.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * The role of the messages author, in this case `system`.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * The role of the messages author, in this case `system`.
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
