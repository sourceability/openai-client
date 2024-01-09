<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class AssistantFileObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    protected ?string $id = null;

    /**
     * The object type, which is always `assistant.file`.
     */
    protected ?string $object = null;

    /**
     * The Unix timestamp (in seconds) for when the assistant file was created.
     */
    protected ?int $createdAt = null;

    /**
     * The assistant ID that the file is attached to.
     */
    protected ?string $assistantId = null;

    /**
     * @param string $id The identifier, which can be referenced in API endpoints.
     * @param string $object The object type, which is always `assistant.file`.
     * @param int $createdAt The Unix timestamp (in seconds) for when the assistant file was created.
     * @param string $assistantId The assistant ID that the file is attached to.
     */
    public function __construct($id = null, $object = null, $createdAt = null, $assistantId = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($assistantId !== null) {
            $this->setAssistantId($assistantId);
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
     * The object type, which is always `assistant.file`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `assistant.file`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the assistant file was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the assistant file was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The assistant ID that the file is attached to.
     */
    public function getAssistantId(): string
    {
        return $this->assistantId;
    }

    /**
     * The assistant ID that the file is attached to.
     */
    public function setAssistantId(string $assistantId): self
    {
        $this->initialized['assistantId'] = true;
        $this->assistantId = $assistantId;
        return $this;
    }
}
