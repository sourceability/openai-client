<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateThreadAndRunRequest
{
    protected array $initialized = [];

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) to use to execute this run.
     */
    protected ?string $assistantId = null;

    protected ?CreateThreadRequest $thread = null;

    /**
     * The ID of the [Model](/docs/api-reference/models) to be used to execute this run. If a value is provided here, it will override the model associated with the assistant. If not, the model associated with the assistant will be used.
     */
    protected ?string $model = null;

    /**
     * Override the default system message of the assistant. This is useful for modifying the behavior on a per-run basis.
     */
    protected ?string $instructions = null;

    /**
     * Override the tools the assistant can use for this run. This is useful for modifying the behavior on a per-run basis.
     *
     * @var AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]|null
     */
    protected $tools = null;

    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata = null;

    /**
     * @param string $assistantId The ID of the [assistant](/docs/api-reference/assistants) to use to execute this run.
     * @param CreateThreadRequest $thread
     * @param string|null $model The ID of the [Model](/docs/api-reference/models) to be used to execute this run. If a value is provided here, it will override the model associated with the assistant. If not, the model associated with the assistant will be used.
     * @param string|null $instructions Override the default system message of the assistant. This is useful for modifying the behavior on a per-run basis.
     * @param AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]|null $tools Override the tools the assistant can use for this run. This is useful for modifying the behavior on a per-run basis.
     * @param array<string, mixed>|null $metadata Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     */
    public function __construct($assistantId = null, $thread = null, $model = null, $instructions = null, $tools = null, $metadata = null)
    {
        if ($assistantId !== null) {
            $this->setAssistantId($assistantId);
        }
        if ($thread !== null) {
            $this->setThread($thread);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($instructions !== null) {
            $this->setInstructions($instructions);
        }
        if ($tools !== null) {
            $this->setTools($tools);
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
     * The ID of the [assistant](/docs/api-reference/assistants) to use to execute this run.
     */
    public function getAssistantId(): string
    {
        return $this->assistantId;
    }

    /**
     * The ID of the [assistant](/docs/api-reference/assistants) to use to execute this run.
     */
    public function setAssistantId(string $assistantId): self
    {
        $this->initialized['assistantId'] = true;
        $this->assistantId = $assistantId;
        return $this;
    }

    public function getThread(): CreateThreadRequest
    {
        return $this->thread;
    }

    public function setThread(CreateThreadRequest $thread): self
    {
        $this->initialized['thread'] = true;
        $this->thread = $thread;
        return $this;
    }

    /**
     * The ID of the [Model](/docs/api-reference/models) to be used to execute this run. If a value is provided here, it will override the model associated with the assistant. If not, the model associated with the assistant will be used.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * The ID of the [Model](/docs/api-reference/models) to be used to execute this run. If a value is provided here, it will override the model associated with the assistant. If not, the model associated with the assistant will be used.
     */
    public function setModel(?string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * Override the default system message of the assistant. This is useful for modifying the behavior on a per-run basis.
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * Override the default system message of the assistant. This is useful for modifying the behavior on a per-run basis.
     */
    public function setInstructions(?string $instructions): self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * Override the tools the assistant can use for this run. This is useful for modifying the behavior on a per-run basis.
     *
     * @return AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]|null
     */
    public function getTools(): ?array
    {
        return $this->tools;
    }

    /**
     * Override the tools the assistant can use for this run. This is useful for modifying the behavior on a per-run basis.
     *
     * @param AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]|null $tools
     */
    public function setTools(?array $tools): self
    {
        $this->initialized['tools'] = true;
        $this->tools = $tools;
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
