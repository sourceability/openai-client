<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateFineTuningJobRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The name of the model to fine-tune. You can select one of the
     *
     * @var mixed
     */
    protected $model = null;

    /**
     * The ID of an uploaded file that contains training data.

    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    protected ?string $trainingFile = null;

    /**
     * The hyperparameters used for the fine-tuning job.
     */
    protected ?CreateFineTuningJobRequestHyperparameters $hyperparameters = null;

    /**
     * A string of up to 18 characters that will be added to your fine-tuned model name.

    For example, a `suffix` of "custom-model-name" would produce a model name like `ft:gpt-3.5-turbo:openai:custom-model-name:7p4lURel`.
     */
    protected ?string $suffix = null;

    /**
     * The ID of an uploaded file that contains validation data.

    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    protected ?string $validationFile = null;

    /**
     * @param mixed $model The name of the model to fine-tune. You can select one of the
     *                     [supported models](/docs/guides/fine-tuning/what-models-can-be-fine-tuned).
     * @param string $trainingFile The ID of an uploaded file that contains training data.
     *                             See [upload file](/docs/api-reference/files/upload) for how to upload a file.
     *                             Your dataset must be formatted as a JSONL file. Additionally, you must upload your file with the purpose `fine-tune`.
     *                             See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     * @param CreateFineTuningJobRequestHyperparameters $hyperparameters The hyperparameters used for the fine-tuning job.
     * @param string|null $suffix A string of up to 18 characters that will be added to your fine-tuned model name.
     *                            For example, a `suffix` of "custom-model-name" would produce a model name like `ft:gpt-3.5-turbo:openai:custom-model-name:7p4lURel`.
     * @param string|null $validationFile The ID of an uploaded file that contains validation data.
     *                                    If you provide this file, the data is used to generate validation
     *                                    metrics periodically during fine-tuning. These metrics can be viewed in
     *                                    the fine-tuning results file.
     *                                    The same data should not be present in both train and validation files.
     *                                    Your dataset must be formatted as a JSONL file. You must upload your file with the purpose `fine-tune`.
     *                                    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function __construct(mixed $model = null, $trainingFile = null, $hyperparameters = null, $suffix = null, $validationFile = null)
    {
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($trainingFile !== null) {
            $this->setTrainingFile($trainingFile);
        }
        if ($hyperparameters !== null) {
            $this->setHyperparameters($hyperparameters);
        }
        if ($suffix !== null) {
            $this->setSuffix($suffix);
        }
        if ($validationFile !== null) {
            $this->setValidationFile($validationFile);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The name of the model to fine-tune. You can select one of the
     *
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * The name of the model to fine-tune. You can select one of the
    [supported models](/docs/guides/fine-tuning/what-models-can-be-fine-tuned).
     */
    public function setModel(mixed $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The ID of an uploaded file that contains training data.

    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function getTrainingFile(): string
    {
        return $this->trainingFile;
    }

    /**
     * The ID of an uploaded file that contains training data.

    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function setTrainingFile(string $trainingFile): self
    {
        $this->initialized['trainingFile'] = true;
        $this->trainingFile = $trainingFile;
        return $this;
    }

    /**
     * The hyperparameters used for the fine-tuning job.
     */
    public function getHyperparameters(): CreateFineTuningJobRequestHyperparameters
    {
        return $this->hyperparameters;
    }

    /**
     * The hyperparameters used for the fine-tuning job.
     */
    public function setHyperparameters(CreateFineTuningJobRequestHyperparameters $hyperparameters): self
    {
        $this->initialized['hyperparameters'] = true;
        $this->hyperparameters = $hyperparameters;
        return $this;
    }

    /**
     * A string of up to 18 characters that will be added to your fine-tuned model name.

    For example, a `suffix` of "custom-model-name" would produce a model name like `ft:gpt-3.5-turbo:openai:custom-model-name:7p4lURel`.
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * A string of up to 18 characters that will be added to your fine-tuned model name.

    For example, a `suffix` of "custom-model-name" would produce a model name like `ft:gpt-3.5-turbo:openai:custom-model-name:7p4lURel`.
     */
    public function setSuffix(?string $suffix): self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * The ID of an uploaded file that contains validation data.

    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function getValidationFile(): ?string
    {
        return $this->validationFile;
    }

    /**
     * The ID of an uploaded file that contains validation data.

    See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     */
    public function setValidationFile(?string $validationFile): self
    {
        $this->initialized['validationFile'] = true;
        $this->validationFile = $validationFile;
        return $this;
    }
}
