<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

/**
 * @deprecated
 */
class FineTune extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The object identifier, which can be referenced in the API endpoints.
     */
    protected ?string $id = null;

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was created.
     */
    protected ?int $createdAt = null;

    /**
     * The list of events that have been observed in the lifecycle of the FineTune job.
     *
     * @var FineTuneEvent[]
     */
    protected ?array $events = null;

    /**
     * The name of the fine-tuned model that is being created.
     */
    protected ?string $fineTunedModel = null;

    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/hyperparameters) for more details.
     */
    protected ?FineTuneHyperparams $hyperparams = null;

    /**
     * The base model that is being fine-tuned.
     */
    protected ?string $model = null;

    /**
     * The object type, which is always "fine-tune".
     */
    protected string $object = 'fine-tune';

    /**
     * The organization that owns the fine-tuning job.
     */
    protected ?string $organizationId = null;

    /**
     * The compiled results files for the fine-tuning job.
     *
     * @var OpenAIFile[]
     */
    protected ?array $resultFiles = null;

    /**
     * The current status of the fine-tuning job, which can be either `created`, `running`, `succeeded`, `failed`, or `cancelled`.
     */
    protected ?string $status = null;

    /**
     * The list of files used for training.
     *
     * @var OpenAIFile[]
     */
    protected ?array $trainingFiles = null;

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was last updated.
     */
    protected ?int $updatedAt = null;

    /**
     * The list of files used for validation.
     *
     * @var OpenAIFile[]
     */
    protected ?array $validationFiles = null;

    /**
     * @param string $id The object identifier, which can be referenced in the API endpoints.
     * @param int $createdAt The Unix timestamp (in seconds) for when the fine-tuning job was created.
     * @param FineTuneEvent[] $events The list of events that have been observed in the lifecycle of the FineTune job.
     * @param string|null $fineTunedModel The name of the fine-tuned model that is being created.
     * @param FineTuneHyperparams $hyperparams The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/hyperparameters) for more details.
     * @param string $model The base model that is being fine-tuned.
     * @param string $organizationId The organization that owns the fine-tuning job.
     * @param OpenAIFile[] $resultFiles The compiled results files for the fine-tuning job.
     * @param string $status The current status of the fine-tuning job, which can be either `created`, `running`, `succeeded`, `failed`, or `cancelled`.
     * @param OpenAIFile[] $trainingFiles The list of files used for training.
     * @param int $updatedAt The Unix timestamp (in seconds) for when the fine-tuning job was last updated.
     * @param OpenAIFile[] $validationFiles The list of files used for validation.
     * @param string $object The object type, which is always "fine-tune".
     */
    public function __construct($id = null, $createdAt = null, $events = null, $fineTunedModel = null, $hyperparams = null, $model = null, $organizationId = null, $resultFiles = null, $status = null, $trainingFiles = null, $updatedAt = null, $validationFiles = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($events !== null) {
            $this->setEvents($events);
        }
        if ($fineTunedModel !== null) {
            $this->setFineTunedModel($fineTunedModel);
        }
        if ($hyperparams !== null) {
            $this->setHyperparams($hyperparams);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($organizationId !== null) {
            $this->setOrganizationId($organizationId);
        }
        if ($resultFiles !== null) {
            $this->setResultFiles($resultFiles);
        }
        if ($status !== null) {
            $this->setStatus($status);
        }
        if ($trainingFiles !== null) {
            $this->setTrainingFiles($trainingFiles);
        }
        if ($updatedAt !== null) {
            $this->setUpdatedAt($updatedAt);
        }
        if ($validationFiles !== null) {
            $this->setValidationFiles($validationFiles);
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
     * The object identifier, which can be referenced in the API endpoints.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The object identifier, which can be referenced in the API endpoints.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The list of events that have been observed in the lifecycle of the FineTune job.
     *
     * @return FineTuneEvent[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * The list of events that have been observed in the lifecycle of the FineTune job.
     *
     * @param FineTuneEvent[] $events
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }

    /**
     * The name of the fine-tuned model that is being created.
     */
    public function getFineTunedModel(): ?string
    {
        return $this->fineTunedModel;
    }

    /**
     * The name of the fine-tuned model that is being created.
     */
    public function setFineTunedModel(?string $fineTunedModel): self
    {
        $this->initialized['fineTunedModel'] = true;
        $this->fineTunedModel = $fineTunedModel;
        return $this;
    }

    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/hyperparameters) for more details.
     */
    public function getHyperparams(): FineTuneHyperparams
    {
        return $this->hyperparams;
    }

    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/hyperparameters) for more details.
     */
    public function setHyperparams(FineTuneHyperparams $hyperparams): self
    {
        $this->initialized['hyperparams'] = true;
        $this->hyperparams = $hyperparams;
        return $this;
    }

    /**
     * The base model that is being fine-tuned.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The base model that is being fine-tuned.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The object type, which is always "fine-tune".
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always "fine-tune".
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The organization that owns the fine-tuning job.
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     * The organization that owns the fine-tuning job.
     */
    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * The compiled results files for the fine-tuning job.
     *
     * @return OpenAIFile[]
     */
    public function getResultFiles(): array
    {
        return $this->resultFiles;
    }

    /**
     * The compiled results files for the fine-tuning job.
     *
     * @param OpenAIFile[] $resultFiles
     */
    public function setResultFiles(array $resultFiles): self
    {
        $this->initialized['resultFiles'] = true;
        $this->resultFiles = $resultFiles;
        return $this;
    }

    /**
     * The current status of the fine-tuning job, which can be either `created`, `running`, `succeeded`, `failed`, or `cancelled`.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The current status of the fine-tuning job, which can be either `created`, `running`, `succeeded`, `failed`, or `cancelled`.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * The list of files used for training.
     *
     * @return OpenAIFile[]
     */
    public function getTrainingFiles(): array
    {
        return $this->trainingFiles;
    }

    /**
     * The list of files used for training.
     *
     * @param OpenAIFile[] $trainingFiles
     */
    public function setTrainingFiles(array $trainingFiles): self
    {
        $this->initialized['trainingFiles'] = true;
        $this->trainingFiles = $trainingFiles;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was last updated.
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was last updated.
     */
    public function setUpdatedAt(int $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * The list of files used for validation.
     *
     * @return OpenAIFile[]
     */
    public function getValidationFiles(): array
    {
        return $this->validationFiles;
    }

    /**
     * The list of files used for validation.
     *
     * @param OpenAIFile[] $validationFiles
     */
    public function setValidationFiles(array $validationFiles): self
    {
        $this->initialized['validationFiles'] = true;
        $this->validationFiles = $validationFiles;
        return $this;
    }
}
