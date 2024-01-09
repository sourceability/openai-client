<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTuningJob extends ArrayObject
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
     * For fine-tuning jobs that have `failed`, this will contain more information on the cause of the failure.
     */
    protected ?FineTuningJobError $error = null;

    /**
     * The name of the fine-tuned model that is being created. The value will be null if the fine-tuning job is still running.
     */
    protected ?string $fineTunedModel = null;

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was finished. The value will be null if the fine-tuning job is still running.
     */
    protected ?int $finishedAt = null;

    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    protected ?FineTuningJobHyperparameters $hyperparameters = null;

    /**
     * The base model that is being fine-tuned.
     */
    protected ?string $model = null;

    /**
     * The object type, which is always "fine_tuning.job".
     */
    protected string $object = 'fine_tuning.job';

    /**
     * The organization that owns the fine-tuning job.
     */
    protected ?string $organizationId = null;

    /**
     * The compiled results file ID(s) for the fine-tuning job. You can retrieve the results with the [Files API](/docs/api-reference/files/retrieve-contents).
     *
     * @var string[]
     */
    protected ?array $resultFiles = null;

    /**
     * The current status of the fine-tuning job, which can be either `validating_files`, `queued`, `running`, `succeeded`, `failed`, or `cancelled`.
     */
    protected ?string $status = null;

    /**
     * The total number of billable tokens processed by this fine-tuning job. The value will be null if the fine-tuning job is still running.
     */
    protected ?int $trainedTokens = null;

    /**
     * The file ID used for training. You can retrieve the training data with the [Files API](/docs/api-reference/files/retrieve-contents).
     */
    protected ?string $trainingFile = null;

    /**
     * The file ID used for validation. You can retrieve the validation results with the [Files API](/docs/api-reference/files/retrieve-contents).
     */
    protected ?string $validationFile = null;

    /**
     * @param string $id The object identifier, which can be referenced in the API endpoints.
     * @param int $createdAt The Unix timestamp (in seconds) for when the fine-tuning job was created.
     * @param FineTuningJobError|null $error For fine-tuning jobs that have `failed`, this will contain more information on the cause of the failure.
     * @param string|null $fineTunedModel The name of the fine-tuned model that is being created. The value will be null if the fine-tuning job is still running.
     * @param int|null $finishedAt The Unix timestamp (in seconds) for when the fine-tuning job was finished. The value will be null if the fine-tuning job is still running.
     * @param FineTuningJobHyperparameters $hyperparameters The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     * @param string $model The base model that is being fine-tuned.
     * @param string $organizationId The organization that owns the fine-tuning job.
     * @param string[] $resultFiles The compiled results file ID(s) for the fine-tuning job. You can retrieve the results with the [Files API](/docs/api-reference/files/retrieve-contents).
     * @param string $status The current status of the fine-tuning job, which can be either `validating_files`, `queued`, `running`, `succeeded`, `failed`, or `cancelled`.
     * @param int|null $trainedTokens The total number of billable tokens processed by this fine-tuning job. The value will be null if the fine-tuning job is still running.
     * @param string $trainingFile The file ID used for training. You can retrieve the training data with the [Files API](/docs/api-reference/files/retrieve-contents).
     * @param string|null $validationFile The file ID used for validation. You can retrieve the validation results with the [Files API](/docs/api-reference/files/retrieve-contents).
     * @param string $object The object type, which is always "fine_tuning.job".
     */
    public function __construct($id = null, $createdAt = null, $error = null, $fineTunedModel = null, $finishedAt = null, $hyperparameters = null, $model = null, $organizationId = null, $resultFiles = null, $status = null, $trainedTokens = null, $trainingFile = null, $validationFile = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($error !== null) {
            $this->setError($error);
        }
        if ($fineTunedModel !== null) {
            $this->setFineTunedModel($fineTunedModel);
        }
        if ($finishedAt !== null) {
            $this->setFinishedAt($finishedAt);
        }
        if ($hyperparameters !== null) {
            $this->setHyperparameters($hyperparameters);
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
        if ($trainedTokens !== null) {
            $this->setTrainedTokens($trainedTokens);
        }
        if ($trainingFile !== null) {
            $this->setTrainingFile($trainingFile);
        }
        if ($validationFile !== null) {
            $this->setValidationFile($validationFile);
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
     * For fine-tuning jobs that have `failed`, this will contain more information on the cause of the failure.
     */
    public function getError(): ?FineTuningJobError
    {
        return $this->error;
    }

    /**
     * For fine-tuning jobs that have `failed`, this will contain more information on the cause of the failure.
     */
    public function setError(?FineTuningJobError $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }

    /**
     * The name of the fine-tuned model that is being created. The value will be null if the fine-tuning job is still running.
     */
    public function getFineTunedModel(): ?string
    {
        return $this->fineTunedModel;
    }

    /**
     * The name of the fine-tuned model that is being created. The value will be null if the fine-tuning job is still running.
     */
    public function setFineTunedModel(?string $fineTunedModel): self
    {
        $this->initialized['fineTunedModel'] = true;
        $this->fineTunedModel = $fineTunedModel;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was finished. The value will be null if the fine-tuning job is still running.
     */
    public function getFinishedAt(): ?int
    {
        return $this->finishedAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was finished. The value will be null if the fine-tuning job is still running.
     */
    public function setFinishedAt(?int $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }

    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function getHyperparameters(): FineTuningJobHyperparameters
    {
        return $this->hyperparameters;
    }

    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function setHyperparameters(FineTuningJobHyperparameters $hyperparameters): self
    {
        $this->initialized['hyperparameters'] = true;
        $this->hyperparameters = $hyperparameters;
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
     * The object type, which is always "fine_tuning.job".
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always "fine_tuning.job".
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
     * The compiled results file ID(s) for the fine-tuning job. You can retrieve the results with the [Files API](/docs/api-reference/files/retrieve-contents).
     *
     * @return string[]
     */
    public function getResultFiles(): array
    {
        return $this->resultFiles;
    }

    /**
     * The compiled results file ID(s) for the fine-tuning job. You can retrieve the results with the [Files API](/docs/api-reference/files/retrieve-contents).
     *
     * @param string[] $resultFiles
     */
    public function setResultFiles(array $resultFiles): self
    {
        $this->initialized['resultFiles'] = true;
        $this->resultFiles = $resultFiles;
        return $this;
    }

    /**
     * The current status of the fine-tuning job, which can be either `validating_files`, `queued`, `running`, `succeeded`, `failed`, or `cancelled`.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The current status of the fine-tuning job, which can be either `validating_files`, `queued`, `running`, `succeeded`, `failed`, or `cancelled`.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * The total number of billable tokens processed by this fine-tuning job. The value will be null if the fine-tuning job is still running.
     */
    public function getTrainedTokens(): ?int
    {
        return $this->trainedTokens;
    }

    /**
     * The total number of billable tokens processed by this fine-tuning job. The value will be null if the fine-tuning job is still running.
     */
    public function setTrainedTokens(?int $trainedTokens): self
    {
        $this->initialized['trainedTokens'] = true;
        $this->trainedTokens = $trainedTokens;
        return $this;
    }

    /**
     * The file ID used for training. You can retrieve the training data with the [Files API](/docs/api-reference/files/retrieve-contents).
     */
    public function getTrainingFile(): string
    {
        return $this->trainingFile;
    }

    /**
     * The file ID used for training. You can retrieve the training data with the [Files API](/docs/api-reference/files/retrieve-contents).
     */
    public function setTrainingFile(string $trainingFile): self
    {
        $this->initialized['trainingFile'] = true;
        $this->trainingFile = $trainingFile;
        return $this;
    }

    /**
     * The file ID used for validation. You can retrieve the validation results with the [Files API](/docs/api-reference/files/retrieve-contents).
     */
    public function getValidationFile(): ?string
    {
        return $this->validationFile;
    }

    /**
     * The file ID used for validation. You can retrieve the validation results with the [Files API](/docs/api-reference/files/retrieve-contents).
     */
    public function setValidationFile(?string $validationFile): self
    {
        $this->initialized['validationFile'] = true;
        $this->validationFile = $validationFile;
        return $this;
    }
}
