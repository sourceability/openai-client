<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class AssistantObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The identifier, which can be referenced in API endpoints.
     */
    protected ?string $id = null;

    /**
     * The object type, which is always `assistant`.
     */
    protected string $object = 'assistant';

    /**
     * The Unix timestamp (in seconds) for when the assistant was created.
     */
    protected ?int $createdAt = null;

    /**
     * The name of the assistant. The maximum length is 256 characters.
     */
    protected ?string $name = null;

    /**
     * The description of the assistant. The maximum length is 512 characters.
     */
    protected ?string $description = null;

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     */
    protected ?string $model = null;

    /**
     * The system instructions that the assistant uses. The maximum length is 32768 characters.
     */
    protected ?string $instructions = null;

    /**
     * A list of tool enabled on the assistant. There can be a maximum of 128 tools per assistant. Tools can be of types `code_interpreter`, `retrieval`, or `function`.
     *
     * @var AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]
     */
    protected array $tools = [];

    /**
     * A list of [file](/docs/api-reference/files) IDs attached to this assistant. There can be a maximum of 20 files attached to the assistant. Files are ordered by their creation date in ascending order.
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
     * @param int $createdAt The Unix timestamp (in seconds) for when the assistant was created.
     * @param string|null $name The name of the assistant. The maximum length is 256 characters.
     * @param string|null $description The description of the assistant. The maximum length is 512 characters.
     * @param string $model ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     * @param string|null $instructions The system instructions that the assistant uses. The maximum length is 32768 characters.
     * @param array<string, mixed>|null $metadata Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     * @param string $object The object type, which is always `assistant`.
     * @param AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[] $tools A list of tool enabled on the assistant. There can be a maximum of 128 tools per assistant. Tools can be of types `code_interpreter`, `retrieval`, or `function`.
     * @param string[] $fileIds A list of [file](/docs/api-reference/files) IDs attached to this assistant. There can be a maximum of 20 files attached to the assistant. Files are ordered by their creation date in ascending order.
     */
    public function __construct($id = null, $createdAt = null, $name = null, $description = null, $model = null, $instructions = null, $metadata = null, $object = null, $tools = [], $fileIds = [])
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($name !== null) {
            $this->setName($name);
        }
        if ($description !== null) {
            $this->setDescription($description);
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
     * The object type, which is always `assistant`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `assistant`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the assistant was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the assistant was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The name of the assistant. The maximum length is 256 characters.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the assistant. The maximum length is 256 characters.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }

    /**
     * The description of the assistant. The maximum length is 512 characters.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The description of the assistant. The maximum length is 512 characters.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The system instructions that the assistant uses. The maximum length is 32768 characters.
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * The system instructions that the assistant uses. The maximum length is 32768 characters.
     */
    public function setInstructions(?string $instructions): self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * A list of tool enabled on the assistant. There can be a maximum of 128 tools per assistant. Tools can be of types `code_interpreter`, `retrieval`, or `function`.
     *
     * @return AssistantToolsCode[]|AssistantToolsRetrieval[]|AssistantToolsFunction[]
     */
    public function getTools(): array
    {
        return $this->tools;
    }

    /**
     * A list of tool enabled on the assistant. There can be a maximum of 128 tools per assistant. Tools can be of types `code_interpreter`, `retrieval`, or `function`.
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
     * A list of [file](/docs/api-reference/files) IDs attached to this assistant. There can be a maximum of 20 files attached to the assistant. Files are ordered by their creation date in ascending order.
     *
     * @return string[]
     */
    public function getFileIds(): array
    {
        return $this->fileIds;
    }

    /**
     * A list of [file](/docs/api-reference/files) IDs attached to this assistant. There can be a maximum of 20 files attached to the assistant. Files are ordered by their creation date in ascending order.
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
