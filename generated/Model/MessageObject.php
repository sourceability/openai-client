<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    protected ?string $id = null;

    /**
     * The object type, which is always `thread.message`.
     */
    protected string $object = 'thread.message';

    /**
     * The Unix timestamp (in seconds) for when the message was created.
     */
    protected ?int $createdAt = null;

    /**
     * The [thread](/docs/api-reference/threads) ID that this message belongs to.
     */
    protected ?string $threadId = null;

    /**
     * The entity that produced the message. One of `user` or `assistant`.
     */
    protected ?string $role = null;

    /**
     * The content of the message in array of text and/or images.
     *
     * @var MessageContentImageFileObject[]|MessageContentTextObject[]
     */
    protected ?array $content = null;

    /**
     * If applicable, the ID of the [assistant](/docs/api-reference/assistants) that authored this message.
     */
    protected ?string $assistantId = null;

    /**
     * If applicable, the ID of the [run](/docs/api-reference/runs) associated with the authoring of this message.
     */
    protected ?string $runId = null;

    /**
     * A list of [file](/docs/api-reference/files) IDs that the assistant should use. Useful for tools like retrieval and code_interpreter that can access files. A maximum of 10 files can be attached to a message.
     *
     * @var string[]
     */
    protected array $fileIds = [];

    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata = null;

    /**
     * @param string $id The identifier, which can be referenced in API endpoints.
     * @param int $createdAt The Unix timestamp (in seconds) for when the message was created.
     * @param string $threadId The [thread](/docs/api-reference/threads) ID that this message belongs to.
     * @param string $role The entity that produced the message. One of `user` or `assistant`.
     * @param MessageContentImageFileObject[]|MessageContentTextObject[] $content The content of the message in array of text and/or images.
     * @param string|null $assistantId If applicable, the ID of the [assistant](/docs/api-reference/assistants) that authored this message.
     * @param string|null $runId If applicable, the ID of the [run](/docs/api-reference/runs) associated with the authoring of this message.
     * @param array<string, mixed>|null $metadata Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     * @param string $object The object type, which is always `thread.message`.
     * @param string[] $fileIds A list of [file](/docs/api-reference/files) IDs that the assistant should use. Useful for tools like retrieval and code_interpreter that can access files. A maximum of 10 files can be attached to a message.
     */
    public function __construct($id = null, $createdAt = null, $threadId = null, $role = null, $content = null, $assistantId = null, $runId = null, $metadata = null, $object = null, $fileIds = [])
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($threadId !== null) {
            $this->setThreadId($threadId);
        }
        if ($role !== null) {
            $this->setRole($role);
        }
        if ($content !== null) {
            $this->setContent($content);
        }
        if ($assistantId !== null) {
            $this->setAssistantId($assistantId);
        }
        if ($runId !== null) {
            $this->setRunId($runId);
        }
        if ($metadata !== null) {
            $this->setMetadata($metadata);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($fileIds !== null) {
            $this->setFileIds($fileIds);
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
     * The object type, which is always `thread.message`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `thread.message`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the message was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the message was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The [thread](/docs/api-reference/threads) ID that this message belongs to.
     */
    public function getThreadId(): string
    {
        return $this->threadId;
    }

    /**
     * The [thread](/docs/api-reference/threads) ID that this message belongs to.
     */
    public function setThreadId(string $threadId): self
    {
        $this->initialized['threadId'] = true;
        $this->threadId = $threadId;
        return $this;
    }

    /**
     * The entity that produced the message. One of `user` or `assistant`.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * The entity that produced the message. One of `user` or `assistant`.
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }

    /**
     * The content of the message in array of text and/or images.
     *
     * @return MessageContentImageFileObject[]|MessageContentTextObject[]
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * The content of the message in array of text and/or images.
     *
     * @param MessageContentImageFileObject[]|MessageContentTextObject[] $content
     */
    public function setContent(array $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }

    /**
     * If applicable, the ID of the [assistant](/docs/api-reference/assistants) that authored this message.
     */
    public function getAssistantId(): ?string
    {
        return $this->assistantId;
    }

    /**
     * If applicable, the ID of the [assistant](/docs/api-reference/assistants) that authored this message.
     */
    public function setAssistantId(?string $assistantId): self
    {
        $this->initialized['assistantId'] = true;
        $this->assistantId = $assistantId;
        return $this;
    }

    /**
     * If applicable, the ID of the [run](/docs/api-reference/runs) associated with the authoring of this message.
     */
    public function getRunId(): ?string
    {
        return $this->runId;
    }

    /**
     * If applicable, the ID of the [run](/docs/api-reference/runs) associated with the authoring of this message.
     */
    public function setRunId(?string $runId): self
    {
        $this->initialized['runId'] = true;
        $this->runId = $runId;
        return $this;
    }

    /**
     * A list of [file](/docs/api-reference/files) IDs that the assistant should use. Useful for tools like retrieval and code_interpreter that can access files. A maximum of 10 files can be attached to a message.
     *
     * @return string[]
     */
    public function getFileIds(): array
    {
        return $this->fileIds;
    }

    /**
     * A list of [file](/docs/api-reference/files) IDs that the assistant should use. Useful for tools like retrieval and code_interpreter that can access files. A maximum of 10 files can be attached to a message.
     *
     * @param string[] $fileIds
     */
    public function setFileIds(array $fileIds): self
    {
        $this->initialized['fileIds'] = true;
        $this->fileIds = $fileIds;
        return $this;
    }

    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }

    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     *
     * @param array<string, mixed>|null $metadata
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}
