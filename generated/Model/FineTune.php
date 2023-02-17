<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTune extends ArrayObject
{
    protected array $initialized = [];

    protected string $id;

    protected string $object;

    protected int $createdAt;

    protected int $updatedAt;

    protected string $model;

    protected ?string $fineTunedModel = null;

    protected string $organizationId;

    protected string $status;

    /**
     * @var mixed[]
     */
    protected iterable $hyperparams;

    /**
     * @var OpenAIFile[]|null
     */
    protected ?array $trainingFiles = null;

    /**
     * @var OpenAIFile[]|null
     */
    protected ?array $validationFiles = null;

    /**
     * @var OpenAIFile[]|null
     */
    protected ?array $resultFiles = null;

    /**
     * @var FineTuneEvent[]|null
     */
    protected ?array $events = null;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(int $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    public function getFineTunedModel(): ?string
    {
        return $this->fineTunedModel;
    }

    public function setFineTunedModel(?string $fineTunedModel): self
    {
        $this->initialized['fineTunedModel'] = true;
        $this->fineTunedModel = $fineTunedModel;
        return $this;
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getHyperparams(): iterable
    {
        return $this->hyperparams;
    }

    /**
     * @param mixed[] $hyperparams
     */
    public function setHyperparams(iterable $hyperparams): self
    {
        $this->initialized['hyperparams'] = true;
        $this->hyperparams = $hyperparams;
        return $this;
    }

    /**
     * @return OpenAIFile[]
     */
    public function getTrainingFiles(): array
    {
        return $this->trainingFiles;
    }

    /**
     * @param OpenAIFile[] $trainingFiles
     */
    public function setTrainingFiles(array $trainingFiles): self
    {
        $this->initialized['trainingFiles'] = true;
        $this->trainingFiles = $trainingFiles;
        return $this;
    }

    /**
     * @return OpenAIFile[]
     */
    public function getValidationFiles(): array
    {
        return $this->validationFiles;
    }

    /**
     * @param OpenAIFile[] $validationFiles
     */
    public function setValidationFiles(array $validationFiles): self
    {
        $this->initialized['validationFiles'] = true;
        $this->validationFiles = $validationFiles;
        return $this;
    }

    /**
     * @return OpenAIFile[]
     */
    public function getResultFiles(): array
    {
        return $this->resultFiles;
    }

    /**
     * @param OpenAIFile[] $resultFiles
     */
    public function setResultFiles(array $resultFiles): self
    {
        $this->initialized['resultFiles'] = true;
        $this->resultFiles = $resultFiles;
        return $this;
    }

    /**
     * @return FineTuneEvent[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param FineTuneEvent[] $events
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
}
