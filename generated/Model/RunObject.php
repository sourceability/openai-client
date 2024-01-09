<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    protected ?string $id = null;

    /**
     * The object type, which is always `thread.run`.
     */
    protected string $object = 'thread.run';

    /**
     * The Unix timestamp (in seconds) for when the run was created.
     */
    protected ?int $createdAt = null;

    /**
     * The ID of the [thread](/docs/api-reference/threads) that was executed on as a part of this run.
     */
    protected ?string $threadId = null;

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) used for execution of this run.
     */
    protected ?string $assistantId = null;

    /**
     * The status of the run, which can be either `queued`, `in_progress`, `requires_action`, `cancelling`, `cancelled`, `failed`, `completed`, or `expired`.
     */
    protected ?string $status = null;

    /**
     * Details on the action required to continue the run. Will be `null` if no action is required.
     */
    protected ?RunObjectRequiredAction $requiredAction = null;

    /**
     * The last error associated with this run. Will be `null` if there are no errors.
     */
    protected ?RunObjectLastError $lastError = null;

    /**
     * The Unix timestamp (in seconds) for when the run will expire.
     */
    protected ?int $expiresAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run was started.
     */
    protected ?int $startedAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run was cancelled.
     */
    protected ?int $cancelledAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run failed.
     */
    protected ?int $failedAt = null;

    /**
     * The Unix timestamp (in seconds) for when the run was completed.
     */
    protected ?int $completedAt = null;

    /**
     * The model that the [assistant](/docs/api-reference/assistants) used for this run.
     */
    protected ?string $model = null;

    /**
     * The instructions that the [assistant](/docs/api-reference/assistants) used for this run.
     */
    protected ?string $instructions = null;

    /**
     * The list of tools that the [assistant](/docs/api-reference/assistants) used for this run.
     *
     * @var AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]
     */
    protected array $tools = [];

    /**
     * The list of [File](/docs/api-reference/files) IDs the [assistant](/docs/api-reference/assistants) used for this run.
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
     * @param int $createdAt The Unix timestamp (in seconds) for when the run was created.
     * @param string $threadId The ID of the [thread](/docs/api-reference/threads) that was executed on as a part of this run.
     * @param string $assistantId The ID of the [assistant](/docs/api-reference/assistants) used for execution of this run.
     * @param string $status The status of the run, which can be either `queued`, `in_progress`, `requires_action`, `cancelling`, `cancelled`, `failed`, `completed`, or `expired`.
     * @param RunObjectRequiredAction|null $requiredAction Details on the action required to continue the run. Will be `null` if no action is required.
     * @param RunObjectLastError|null $lastError The last error associated with this run. Will be `null` if there are no errors.
     * @param int $expiresAt The Unix timestamp (in seconds) for when the run will expire.
     * @param int|null $startedAt The Unix timestamp (in seconds) for when the run was started.
     * @param int|null $cancelledAt The Unix timestamp (in seconds) for when the run was cancelled.
     * @param int|null $failedAt The Unix timestamp (in seconds) for when the run failed.
     * @param int|null $completedAt The Unix timestamp (in seconds) for when the run was completed.
     * @param string $model The model that the [assistant](/docs/api-reference/assistants) used for this run.
     * @param string $instructions The instructions that the [assistant](/docs/api-reference/assistants) used for this run.
     * @param array<string, mixed>|null $metadata Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     * @param string $object The object type, which is always `thread.run`.
     * @param AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[] $tools The list of tools that the [assistant](/docs/api-reference/assistants) used for this run.
     * @param string[] $fileIds The list of [File](/docs/api-reference/files) IDs the [assistant](/docs/api-reference/assistants) used for this run.
     */
    public function __construct($id = null, $createdAt = null, $threadId = null, $assistantId = null, $status = null, $requiredAction = null, $lastError = null, $expiresAt = null, $startedAt = null, $cancelledAt = null, $failedAt = null, $completedAt = null, $model = null, $instructions = null, $metadata = null, $object = null, $tools = [], $fileIds = [])
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
        if ($assistantId !== null) {
            $this->setAssistantId($assistantId);
        }
        if ($status !== null) {
            $this->setStatus($status);
        }
        if ($requiredAction !== null) {
            $this->setRequiredAction($requiredAction);
        }
        if ($lastError !== null) {
            $this->setLastError($lastError);
        }
        if ($expiresAt !== null) {
            $this->setExpiresAt($expiresAt);
        }
        if ($startedAt !== null) {
            $this->setStartedAt($startedAt);
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
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($instructions !== null) {
            $this->setInstructions($instructions);
        }
        if ($metadata !== null) {
            $this->setMetadata($metadata);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($tools !== null) {
            $this->setTools($tools);
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
     * The object type, which is always `thread.run`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `thread.run`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The ID of the [thread](/docs/api-reference/threads) that was executed on as a part of this run.
     */
    public function getThreadId(): string
    {
        return $this->threadId;
    }

    /**
     * The ID of the [thread](/docs/api-reference/threads) that was executed on as a part of this run.
     */
    public function setThreadId(string $threadId): self
    {
        $this->initialized['threadId'] = true;
        $this->threadId = $threadId;
        return $this;
    }

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) used for execution of this run.
     */
    public function getAssistantId(): string
    {
        return $this->assistantId;
    }

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) used for execution of this run.
     */
    public function setAssistantId(string $assistantId): self
    {
        $this->initialized['assistantId'] = true;
        $this->assistantId = $assistantId;
        return $this;
    }

    /**
     * The status of the run, which can be either `queued`, `in_progress`, `requires_action`, `cancelling`, `cancelled`, `failed`, `completed`, or `expired`.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The status of the run, which can be either `queued`, `in_progress`, `requires_action`, `cancelling`, `cancelled`, `failed`, `completed`, or `expired`.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * Details on the action required to continue the run. Will be `null` if no action is required.
     */
    public function getRequiredAction(): ?RunObjectRequiredAction
    {
        return $this->requiredAction;
    }

    /**
     * Details on the action required to continue the run. Will be `null` if no action is required.
     */
    public function setRequiredAction(?RunObjectRequiredAction $requiredAction): self
    {
        $this->initialized['requiredAction'] = true;
        $this->requiredAction = $requiredAction;
        return $this;
    }

    /**
     * The last error associated with this run. Will be `null` if there are no errors.
     */
    public function getLastError(): ?RunObjectLastError
    {
        return $this->lastError;
    }

    /**
     * The last error associated with this run. Will be `null` if there are no errors.
     */
    public function setLastError(?RunObjectLastError $lastError): self
    {
        $this->initialized['lastError'] = true;
        $this->lastError = $lastError;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run will expire.
     */
    public function getExpiresAt(): int
    {
        return $this->expiresAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run will expire.
     */
    public function setExpiresAt(int $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was started.
     */
    public function getStartedAt(): ?int
    {
        return $this->startedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was started.
     */
    public function setStartedAt(?int $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was cancelled.
     */
    public function getCancelledAt(): ?int
    {
        return $this->cancelledAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was cancelled.
     */
    public function setCancelledAt(?int $cancelledAt): self
    {
        $this->initialized['cancelledAt'] = true;
        $this->cancelledAt = $cancelledAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run failed.
     */
    public function getFailedAt(): ?int
    {
        return $this->failedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run failed.
     */
    public function setFailedAt(?int $failedAt): self
    {
        $this->initialized['failedAt'] = true;
        $this->failedAt = $failedAt;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was completed.
     */
    public function getCompletedAt(): ?int
    {
        return $this->completedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the run was completed.
     */
    public function setCompletedAt(?int $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }

    /**
     * The model that the [assistant](/docs/api-reference/assistants) used for this run.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The model that the [assistant](/docs/api-reference/assistants) used for this run.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The instructions that the [assistant](/docs/api-reference/assistants) used for this run.
     */
    public function getInstructions(): string
    {
        return $this->instructions;
    }

    /**
     * The instructions that the [assistant](/docs/api-reference/assistants) used for this run.
     */
    public function setInstructions(string $instructions): self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * The list of tools that the [assistant](/docs/api-reference/assistants) used for this run.
     *
     * @return AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]
     */
    public function getTools(): array
    {
        return $this->tools;
    }

    /**
     * The list of tools that the [assistant](/docs/api-reference/assistants) used for this run.
     *
     * @param AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[] $tools
     */
    public function setTools(array $tools): self
    {
        $this->initialized['tools'] = true;
        $this->tools = $tools;
        return $this;
    }

    /**
     * The list of [File](/docs/api-reference/files) IDs the [assistant](/docs/api-reference/assistants) used for this run.
     *
     * @return string[]
     */
    public function getFileIds(): array
    {
        return $this->fileIds;
    }

    /**
     * The list of [File](/docs/api-reference/files) IDs the [assistant](/docs/api-reference/assistants) used for this run.
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
