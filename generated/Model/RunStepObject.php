<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The identifier of the run step, which can be referenced in API endpoints.
     */
    protected ?string $id = null;

    /**
     * The object type, which is always `thread.run.step`.
     */
    protected ?string $object = null;

    /**
     * The Unix timestamp (in seconds) for when the run step was created.
     */
    protected ?int $createdAt = null;

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) associated with the run step.
     */
    protected ?string $assistantId = null;

    /**
     * The ID of the [thread](/docs/api-reference/threads) that was run.
     */
    protected ?string $threadId = null;

    /**
     * The ID of the [run](/docs/api-reference/runs) that this run step is a part of.
     */
    protected ?string $runId = null;

    /**
     * The type of run step, which can be either `message_creation` or `tool_calls`.
     */
    protected ?string $type = null;

    /**
     * The status of the run step, which can be either `in_progress`, `cancelled`, `failed`, `completed`, or `expired`.
     */
    protected ?string $status = null;

    /**
     * The details of the run step.
     *
     * @var array<string, mixed>
     */
    protected ?iterable $stepDetails = null;

    /**
     * The last error associated with this run step. Will be `null` if there are no errors.
     */
    protected ?RunStepObjectLastError $lastError = null;

    /**
     * The Unix timestamp (in seconds) for when the run step expired. A step is considered expired if the parent run is expired.
     */
    protected ?int $expiredAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run step was cancelled.
     */
    protected ?int $cancelledAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run step failed.
     */
    protected ?int $failedAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run step completed.
     */
    protected ?int $completedAt = null;

    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata = null;

    /**
     * @param string $id The identifier of the run step, which can be referenced in API endpoints.
     * @param string $object The object type, which is always `thread.run.step`.
     * @param int $createdAt The Unix timestamp (in seconds) for when the run step was created.
     * @param string $assistantId The ID of the [assistant](/docs/api-reference/assistants) associated with the run step.
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) that was run.
     * @param string $runId The ID of the [run](/docs/api-reference/runs) that this run step is a part of.
     * @param string $type The type of run step, which can be either `message_creation` or `tool_calls`.
     * @param string $status The status of the run step, which can be either `in_progress`, `cancelled`, `failed`, `completed`, or `expired`.
     * @param array<string, mixed> $stepDetails The details of the run step.
     * @param RunStepObjectLastError|null $lastError The last error associated with this run step. Will be `null` if there are no errors.
     * @param int|null $expiredAt The Unix timestamp (in seconds) for when the run step expired. A step is considered expired if the parent run is expired.
     * @param int|null $cancelledAt The Unix timestamp (in seconds) for when the run step was cancelled.
     * @param int|null $failedAt The Unix timestamp (in seconds) for when the run step failed.
     * @param int|null $completedAt The Unix timestamp (in seconds) for when the run step completed.
     * @param array<string, mixed>|null $metadata Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     */
    public function __construct($id = null, $object = null, $createdAt = null, $assistantId = null, $threadId = null, $runId = null, $type = null, $status = null, $stepDetails = null, $lastError = null, $expiredAt = null, $cancelledAt = null, $failedAt = null, $completedAt = null, $metadata = null)
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
        if ($threadId !== null) {
            $this->setThreadId($threadId);
        }
        if ($runId !== null) {
            $this->setRunId($runId);
        }
        if ($type !== null) {
            $this->setType($type);
        }
        if ($status !== null) {
            $this->setStatus($status);
        }
        if ($stepDetails !== null) {
            $this->setStepDetails($stepDetails);
        }
        if ($lastError !== null) {
            $this->setLastError($lastError);
        }
        if ($expiredAt !== null) {
            $this->setExpiredAt($expiredAt);
        }
        if ($cancelledAt !== null) {
            $this->setCancelledAt($cancelledAt);
        }
        if ($failedAt !== null) {
            $this->setFailedAt($failedAt);
        }
        if ($completedAt !== null) {
            $this->setCompletedAt($completedAt);
        }
        if ($metadata !== null) {
            $this->setMetadata($metadata);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The identifier of the run step, which can be referenced in API endpoints.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The identifier of the run step, which can be referenced in API endpoints.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The object type, which is always `thread.run.step`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `thread.run.step`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) associated with the run step.
     */
    public function getAssistantId(): string
    {
        return $this->assistantId;
    }

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) associated with the run step.
     */
    public function setAssistantId(string $assistantId): self
    {
        $this->initialized['assistantId'] = true;
        $this->assistantId = $assistantId;
        return $this;
    }

    /**
     * The ID of the [thread](/docs/api-reference/threads) that was run.
     */
    public function getThreadId(): string
    {
        return $this->threadId;
    }

    /**
     * The ID of the [thread](/docs/api-reference/threads) that was run.
     */
    public function setThreadId(string $threadId): self
    {
        $this->initialized['threadId'] = true;
        $this->threadId = $threadId;
        return $this;
    }

    /**
     * The ID of the [run](/docs/api-reference/runs) that this run step is a part of.
     */
    public function getRunId(): string
    {
        return $this->runId;
    }

    /**
     * The ID of the [run](/docs/api-reference/runs) that this run step is a part of.
     */
    public function setRunId(string $runId): self
    {
        $this->initialized['runId'] = true;
        $this->runId = $runId;
        return $this;
    }

    /**
     * The type of run step, which can be either `message_creation` or `tool_calls`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of run step, which can be either `message_creation` or `tool_calls`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The status of the run step, which can be either `in_progress`, `cancelled`, `failed`, `completed`, or `expired`.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The status of the run step, which can be either `in_progress`, `cancelled`, `failed`, `completed`, or `expired`.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * The details of the run step.
     *
     * @return array<string, mixed>
     */
    public function getStepDetails(): iterable
    {
        return $this->stepDetails;
    }

    /**
     * The details of the run step.
     *
     * @param array<string, mixed> $stepDetails
     */
    public function setStepDetails(iterable $stepDetails): self
    {
        $this->initialized['stepDetails'] = true;
        $this->stepDetails = $stepDetails;
        return $this;
    }

    /**
     * The last error associated with this run step. Will be `null` if there are no errors.
     */
    public function getLastError(): ?RunStepObjectLastError
    {
        return $this->lastError;
    }

    /**
     * The last error associated with this run step. Will be `null` if there are no errors.
     */
    public function setLastError(?RunStepObjectLastError $lastError): self
    {
        $this->initialized['lastError'] = true;
        $this->lastError = $lastError;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step expired. A step is considered expired if the parent run is expired.
     */
    public function getExpiredAt(): ?int
    {
        return $this->expiredAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step expired. A step is considered expired if the parent run is expired.
     */
    public function setExpiredAt(?int $expiredAt): self
    {
        $this->initialized['expiredAt'] = true;
        $this->expiredAt = $expiredAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step was cancelled.
     */
    public function getCancelledAt(): ?int
    {
        return $this->cancelledAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step was cancelled.
     */
    public function setCancelledAt(?int $cancelledAt): self
    {
        $this->initialized['cancelledAt'] = true;
        $this->cancelledAt = $cancelledAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step failed.
     */
    public function getFailedAt(): ?int
    {
        return $this->failedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step failed.
     */
    public function setFailedAt(?int $failedAt): self
    {
        $this->initialized['failedAt'] = true;
        $this->failedAt = $failedAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step completed.
     */
    public function getCompletedAt(): ?int
    {
        return $this->completedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run step completed.
     */
    public function setCompletedAt(?int $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
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
