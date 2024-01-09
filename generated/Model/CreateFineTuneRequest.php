<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateFineTuneRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of an uploaded file that contains training data.

    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     */
    protected ?string $trainingFile = null;

    /**
     * The batch size to use for training. The batch size is the number of
    for larger datasets.
     */
    protected ?int $batchSize = null;

    /**
     * If this is provided, we calculate F-beta scores at the specified
     *
     * @var float[]|null
     */
    protected $classificationBetas = null;

    /**
     * The number of classes in a classification task.

    This parameter is required for multiclass classification.
     */
    protected ?int $classificationNClasses = null;

    /**
     * The positive class in binary classification.

    metrics when doing binary classification.
     */
    protected ?string $classificationPositiveClass = null;

    /**
     * If set, we calculate classification-specific metrics such as accuracy
    `classification_positive_class` for binary classification.
     */
    protected ?bool $computeClassificationMetrics = false;

    /**
     * The hyperparameters used for the fine-tuning job.
     */
    protected ?CreateFineTuneRequestHyperparameters $hyperparameters = null;

    /**
     * The learning rate multiplier to use for training.
    results.
     */
    protected ?float $learningRateMultiplier = null;

    /**
     * The name of the base model to fine-tune. You can select one of "ada",
    [Models](/docs/models) documentation.
     */
    protected string $model = 'curie';

    /**
     * The weight to use for loss on the prompt tokens. This controls how
    learning the prompt.
     */
    protected ?float $promptLossWeight = 0.01;

    /**
     * A string of up to 40 characters that will be added to your fine-tuned model name.

    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
     */
    protected ?string $suffix = null;

    /**
     * The ID of an uploaded file that contains validation data.

    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     */
    protected ?string $validationFile = null;

    /**
     * @param string $trainingFile The ID of an uploaded file that contains training data.
     *                             See [upload file](/docs/api-reference/files/upload) for how to upload a file.
     *                             Your dataset must be formatted as a JSONL file, where each training
     *                             example is a JSON object with the keys "prompt" and "completion".
     *                             Additionally, you must upload your file with the purpose `fine-tune`.
     *                             See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     * @param int|null $batchSize The batch size to use for training. The batch size is the number of
     *                            training examples used to train a single forward and backward pass.
     *                            By default, the batch size will be dynamically configured to be
     *                            ~0.2% of the number of examples in the training set, capped at 256 -
     *                            in general, we've found that larger batch sizes tend to work better
     *                            for larger datasets.
     * @param float[]|null $classificationBetas If this is provided, we calculate F-beta scores at the specified
     *                                          beta values. The F-beta score is a generalization of F-1 score.
     *                                          This is only used for binary classification.
     *                                          With a beta of 1 (i.e. the F-1 score), precision and recall are
     *                                          given the same weight. A larger beta score puts more weight on
     *                                          recall and less on precision. A smaller beta score puts more weight
     *                                          on precision and less on recall.
     * @param int|null $classificationNClasses The number of classes in a classification task.
     *                                         This parameter is required for multiclass classification.
     * @param string|null $classificationPositiveClass The positive class in binary classification.
     *                                                 This parameter is needed to generate precision, recall, and F1
     *                                                 metrics when doing binary classification.
     * @param CreateFineTuneRequestHyperparameters $hyperparameters The hyperparameters used for the fine-tuning job.
     * @param float|null $learningRateMultiplier The learning rate multiplier to use for training.
     *                                           The fine-tuning learning rate is the original learning rate used for
     *                                           pretraining multiplied by this value.
     *                                           By default, the learning rate multiplier is the 0.05, 0.1, or 0.2
     *                                           depending on final `batch_size` (larger learning rates tend to
     *                                           perform better with larger batch sizes). We recommend experimenting
     *                                           with values in the range 0.02 to 0.2 to see what produces the best
     *                                           results.
     * @param string|null $suffix A string of up to 40 characters that will be added to your fine-tuned model name.
     *                            For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
     * @param string|null $validationFile The ID of an uploaded file that contains validation data.
     *                                    If you provide this file, the data is used to generate validation
     *                                    metrics periodically during fine-tuning. These metrics can be viewed in
     *                                    the [fine-tuning results file](/docs/guides/legacy-fine-tuning/analyzing-your-fine-tuned-model).
     *                                    Your train and validation data should be mutually exclusive.
     *                                    Your dataset must be formatted as a JSONL file, where each validation
     *                                    example is a JSON object with the keys "prompt" and "completion".
     *                                    Additionally, you must upload your file with the purpose `fine-tune`.
     *                                    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     * @param bool|null $computeClassificationMetrics If set, we calculate classification-specific metrics such as accuracy
     *                                                and F-1 score using the validation set at the end of every epoch.
     *                                                These metrics can be viewed in the [results file](/docs/guides/legacy-fine-tuning/analyzing-your-fine-tuned-model).
     *                                                In order to compute classification metrics, you must provide a
     *                                                `validation_file`. Additionally, you must
     *                                                specify `classification_n_classes` for multiclass classification or
     *                                                `classification_positive_class` for binary classification.
     * @param string|string|null $model The name of the base model to fine-tune. You can select one of "ada",
     *                                  "babbage", "curie", "davinci", or a fine-tuned model created after 2022-04-21 and before 2023-08-22.
     *                                  To learn more about these models, see the
     *                                  [Models](/docs/models) documentation.
     * @param float|null $promptLossWeight The weight to use for loss on the prompt tokens. This controls how
     *                                     much the model tries to learn to generate the prompt (as compared
     *                                     to the completion which always has a weight of 1.0), and can add
     *                                     a stabilizing effect to training when completions are short.
     *                                     If prompts are extremely long (relative to completions), it may make
     *                                     sense to reduce this weight so as to avoid over-prioritizing
     *                                     learning the prompt.
     */
    public function __construct($trainingFile = null, $batchSize = null, $classificationBetas = null, $classificationNClasses = null, $classificationPositiveClass = null, $hyperparameters = null, $learningRateMultiplier = null, $suffix = null, $validationFile = null, $computeClassificationMetrics = false, $model = 'curie', $promptLossWeight = 0.01)
    {
        if ($trainingFile !== null) {
            $this->setTrainingFile($trainingFile);
        }
        if ($batchSize !== null) {
            $this->setBatchSize($batchSize);
        }
        if ($classificationBetas !== null) {
            $this->setClassificationBetas($classificationBetas);
        }
        if ($classificationNClasses !== null) {
            $this->setClassificationNClasses($classificationNClasses);
        }
        if ($classificationPositiveClass !== null) {
            $this->setClassificationPositiveClass($classificationPositiveClass);
        }
        if ($hyperparameters !== null) {
            $this->setHyperparameters($hyperparameters);
        }
        if ($learningRateMultiplier !== null) {
            $this->setLearningRateMultiplier($learningRateMultiplier);
        }
        if ($suffix !== null) {
            $this->setSuffix($suffix);
        }
        if ($validationFile !== null) {
            $this->setValidationFile($validationFile);
        }
        if ($computeClassificationMetrics !== null) {
            $this->setComputeClassificationMetrics($computeClassificationMetrics);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($promptLossWeight !== null) {
            $this->setPromptLossWeight($promptLossWeight);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of an uploaded file that contains training data.

    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     */
    public function getTrainingFile(): string
    {
        return $this->trainingFile;
    }

    /**
     * The ID of an uploaded file that contains training data.

    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     */
    public function setTrainingFile(string $trainingFile): self
    {
        $this->initialized['trainingFile'] = true;
        $this->trainingFile = $trainingFile;
        return $this;
    }

    /**
     * The batch size to use for training. The batch size is the number of
    for larger datasets.
     */
    public function getBatchSize(): ?int
    {
        return $this->batchSize;
    }

    /**
     * The batch size to use for training. The batch size is the number of
    for larger datasets.
     */
    public function setBatchSize(?int $batchSize): self
    {
        $this->initialized['batchSize'] = true;
        $this->batchSize = $batchSize;
        return $this;
    }

    /**
     * If this is provided, we calculate F-beta scores at the specified
     *
     * @return float[]|null
     */
    public function getClassificationBetas(): ?array
    {
        return $this->classificationBetas;
    }

    /**
     * If this is provided, we calculate F-beta scores at the specified
     *
     * @param float[]|null $classificationBetas
     */
    public function setClassificationBetas(?array $classificationBetas): self
    {
        $this->initialized['classificationBetas'] = true;
        $this->classificationBetas = $classificationBetas;
        return $this;
    }

    /**
     * The number of classes in a classification task.

    This parameter is required for multiclass classification.
     */
    public function getClassificationNClasses(): ?int
    {
        return $this->classificationNClasses;
    }

    /**
     * The number of classes in a classification task.

    This parameter is required for multiclass classification.
     */
    public function setClassificationNClasses(?int $classificationNClasses): self
    {
        $this->initialized['classificationNClasses'] = true;
        $this->classificationNClasses = $classificationNClasses;
        return $this;
    }

    /**
     * The positive class in binary classification.

    metrics when doing binary classification.
     */
    public function getClassificationPositiveClass(): ?string
    {
        return $this->classificationPositiveClass;
    }

    /**
     * The positive class in binary classification.

    metrics when doing binary classification.
     */
    public function setClassificationPositiveClass(?string $classificationPositiveClass): self
    {
        $this->initialized['classificationPositiveClass'] = true;
        $this->classificationPositiveClass = $classificationPositiveClass;
        return $this;
    }

    /**
     * If set, we calculate classification-specific metrics such as accuracy
    `classification_positive_class` for binary classification.
     */
    public function getComputeClassificationMetrics(): ?bool
    {
        return $this->computeClassificationMetrics;
    }

    /**
     * If set, we calculate classification-specific metrics such as accuracy
    `classification_positive_class` for binary classification.
     */
    public function setComputeClassificationMetrics(?bool $computeClassificationMetrics): self
    {
        $this->initialized['computeClassificationMetrics'] = true;
        $this->computeClassificationMetrics = $computeClassificationMetrics;
        return $this;
    }

    /**
     * The hyperparameters used for the fine-tuning job.
     */
    public function getHyperparameters(): CreateFineTuneRequestHyperparameters
    {
        return $this->hyperparameters;
    }

    /**
     * The hyperparameters used for the fine-tuning job.
     */
    public function setHyperparameters(CreateFineTuneRequestHyperparameters $hyperparameters): self
    {
        $this->initialized['hyperparameters'] = true;
        $this->hyperparameters = $hyperparameters;
        return $this;
    }

    /**
     * The learning rate multiplier to use for training.
    results.
     */
    public function getLearningRateMultiplier(): ?float
    {
        return $this->learningRateMultiplier;
    }

    /**
     * The learning rate multiplier to use for training.
    results.
     */
    public function setLearningRateMultiplier(?float $learningRateMultiplier): self
    {
        $this->initialized['learningRateMultiplier'] = true;
        $this->learningRateMultiplier = $learningRateMultiplier;
        return $this;
    }

    /**
     * The name of the base model to fine-tune. You can select one of "ada",
     *
     * @return string|string|null
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The name of the base model to fine-tune. You can select one of "ada",
     *
     * @param string|string|null $model
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The weight to use for loss on the prompt tokens. This controls how
    learning the prompt.
     */
    public function getPromptLossWeight(): ?float
    {
        return $this->promptLossWeight;
    }

    /**
     * The weight to use for loss on the prompt tokens. This controls how
    learning the prompt.
     */
    public function setPromptLossWeight(?float $promptLossWeight): self
    {
        $this->initialized['promptLossWeight'] = true;
        $this->promptLossWeight = $promptLossWeight;
        return $this;
    }

    /**
     * A string of up to 40 characters that will be added to your fine-tuned model name.

    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * A string of up to 40 characters that will be added to your fine-tuned model name.

    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
     */
    public function setSuffix(?string $suffix): self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * The ID of an uploaded file that contains validation data.

    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     */
    public function getValidationFile(): ?string
    {
        return $this->validationFile;
    }

    /**
     * The ID of an uploaded file that contains validation data.

    See the [fine-tuning guide](/docs/guides/legacy-fine-tuning/creating-training-data) for more details.
     */
    public function setValidationFile(?string $validationFile): self
    {
        $this->initialized['validationFile'] = true;
        $this->validationFile = $validationFile;
        return $this;
    }
}
