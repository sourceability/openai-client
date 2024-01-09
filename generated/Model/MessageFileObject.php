<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageFileObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    protected ?string $id = null;

    /**
     * The object type, which is always `thread.message.file`.
     */
    protected string $object = 'thread.message.file';

    /**
     * The Unix timestamp (in seconds) for when the message file was created.
     */
    protected ?int $createdAt = null;

    /**
     * The ID of the [message](/docs/api-reference/messages) that the [File](/docs/api-reference/files) is attached to.
     */
    protected ?string $messageId = null;

    /**
     * @param string $id The identifier, which can be referenced in API endpoints.
     * @param int $createdAt The Unix timestamp (in seconds) for when the message file was created.
     * @param string $messageId The ID of the [message](/docs/api-reference/messages) that the [File](/docs/api-reference/files) is attached to.
     * @param string $object The object type, which is always `thread.message.file`.
     */
    public function __construct($id = null, $createdAt = null, $messageId = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($messageId !== null) {
            $this->setMessageId($messageId);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The object type, which is always `thread.message.file`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `thread.message.file`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the message file was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the message file was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The ID of the [message](/docs/api-reference/messages) that the [File](/docs/api-reference/files) is attached to.
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }

    /**
     * The ID of the [message](/docs/api-reference/messages) that the [File](/docs/api-reference/files) is attached to.
     */
    public function setMessageId(string $messageId): self
    {
        $this->initialized['messageId'] = true;
        $this->messageId = $messageId;
        return $this;
    }
}
