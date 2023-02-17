<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateFineTuneRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of an uploaded file that contains training data.
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     */
    protected ?string $trainingFile = null;

    /**
     * The ID of an uploaded file that contains validation data.
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     */
    protected ?string $validationFile = null;

    /**
     * The name of the base model to fine-tune. You can select one of "ada",
    [Models](https://beta.openai.com/docs/models) documentation.
     */
    protected ?string $model = 'curie';

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    protected ?int $nEpochs = 4;

    /**
     * The batch size to use for training. The batch size is the number of
    for larger datasets.
     */
    protected ?int $batchSize = null;

    /**
     * The learning rate multiplier to use for training.
    results.
     */
    protected ?float $learningRateMultiplier = null;

    /**
     * The weight to use for loss on the prompt tokens. This controls how
    learning the prompt.
     */
    protected ?float $promptLossWeight = 0.01;

    /**
     * If set, we calculate classification-specific metrics such as accuracy
    `classification_positive_class` for binary classification.
     */
    protected ?bool $computeClassificationMetrics = false;

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
     * If this is provided, we calculate F-beta scores at the specified
     *
     * @var float[]|null
     */
    protected ?array $classificationBetas = null;

    /**
     * A string of up to 40 characters that will be added to your fine-tuned model name.
    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
     */
    protected ?string $suffix = null;

    /**
     * @param string|null $trainingFile The ID of an uploaded file that contains training data.
                           See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     * @param string|null $validationFile The ID of an uploaded file that contains validation data.
     *                                    If you provide this file, the data is used to generate validation
     *                                    metrics periodically during fine-tuning. These metrics can be viewed in
     *                                    the [fine-tuning results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
     *                                    Your train and validation data should be mutually exclusive.
     *                                    Your dataset must be formatted as a JSONL file, where each validation
     *                                    example is a JSON object with the keys "prompt" and "completion".
     *                                    Additionally, you must upload your file with the purpose `fine-tune`.
     *                                    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     * @param string|null $model The name of the base model to fine-tune. You can select one of "ada",
     *                           "babbage", "curie", "davinci", or a fine-tuned model created after 2022-04-21.
     *                           To learn more about these models, see the
     *                           [Models](https://beta.openai.com/docs/models) documentation.
     * @param int|null $nEpochs The number of epochs to train the model for. An epoch refers to one
     *                          full cycle through the training dataset.
     * @param int|null $batchSize The batch size to use for training. The batch size is the number of
     *                            training examples used to train a single forward and backward pass.
     *                            By default, the batch size will be dynamically configured to be
     *                            ~0.2% of the number of examples in the training set, capped at 256 -
     *                            in general, we've found that larger batch sizes tend to work better
     *                            for larger datasets.
     * @param float|null $learningRateMultiplier The learning rate multiplier to use for training.
     *                                           The fine-tuning learning rate is the original learning rate used for
     *                                           pretraining multiplied by this value.
     *                                           By default, the learning rate multiplier is the 0.05, 0.1, or 0.2
     *                                           depending on final `batch_size` (larger learning rates tend to
     *                                           perform better with larger batch sizes). We recommend experimenting
     *                                           with values in the range 0.02 to 0.2 to see what produces the best
     *                                           results.
     * @param float|null $promptLossWeight The weight to use for loss on the prompt tokens. This controls how
     *                                     much the model tries to learn to generate the prompt (as compared
     *                                     to the completion which always has a weight of 1.0), and can add
     *                                     a stabilizing effect to training when completions are short.
     *                                     If prompts are extremely long (relative to completions), it may make
     *                                     sense to reduce this weight so as to avoid over-prioritizing
     *                                     learning the prompt.
     * @param bool|null $computeClassificationMetrics If set, we calculate classification-specific metrics such as accuracy
     *                                                and F-1 score using the validation set at the end of every epoch.
     *                                                These metrics can be viewed in the [results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
     *                                                In order to compute classification metrics, you must provide a
     *                                                `validation_file`. Additionally, you must
     *                                                specify `classification_n_classes` for multiclass classification or
     *                                                `classification_positive_class` for binary classification.
     * @param int|null $classificationNClasses The number of classes in a classification task.
     *                                         This parameter is required for multiclass classification.
     * @param string|null $classificationPositiveClass The positive class in binary classification.
     *                                                 This parameter is needed to generate precision, recall, and F1
     *                                                 metrics when doing binary classification.
     * @param float[]|null $classificationBetas If this is provided, we calculate F-beta scores at the specified
     *                                          beta values. The F-beta score is a generalization of F-1 score.
     *                                          This is only used for binary classification.
     *                                          With a beta of 1 (i.e. the F-1 score), precision and recall are
     *                                          given the same weight. A larger beta score puts more weight on
     *                                          recall and less on precision. A smaller beta score puts more weight
     *                                          on precision and less on recall.
     * @param string|null $suffix A string of up to 40 characters that will be added to your fine-tuned model name.
     *                            For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
     */
    public function __construct(?string $trainingFile = null, ?string $validationFile = null, ?string $model = 'curie', ?int $nEpochs = 4, ?int $batchSize = null, ?float $learningRateMultiplier = null, ?float $promptLossWeight = 0.01, ?bool $computeClassificationMetrics = false, ?int $classificationNClasses = null, ?string $classificationPositiveClass = null, ?array $classificationBetas = null, ?string $suffix = null)
    {
        $this->trainingFile = $trainingFile;
        $this->validationFile = $validationFile;
        $this->model = $model;
        $this->nEpochs = $nEpochs;
        $this->batchSize = $batchSize;
        $this->learningRateMultiplier = $learningRateMultiplier;
        $this->promptLossWeight = $promptLossWeight;
        $this->computeClassificationMetrics = $computeClassificationMetrics;
        $this->classificationNClasses = $classificationNClasses;
        $this->classificationPositiveClass = $classificationPositiveClass;
        $this->classificationBetas = $classificationBetas;
        $this->suffix = $suffix;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of an uploaded file that contains training data.
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     */
    public function getTrainingFile(): string
    {
        return $this->trainingFile;
    }

    /**
     * The ID of an uploaded file that contains training data.
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     */
    public function setTrainingFile(string $trainingFile): self
    {
        $this->initialized['trainingFile'] = true;
        $this->trainingFile = $trainingFile;
        return $this;
    }

    /**
     * The ID of an uploaded file that contains validation data.
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     */
    public function getValidationFile(): ?string
    {
        return $this->validationFile;
    }

    /**
     * The ID of an uploaded file that contains validation data.
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
     */
    public function setValidationFile(?string $validationFile): self
    {
        $this->initialized['validationFile'] = true;
        $this->validationFile = $validationFile;
        return $this;
    }

    /**
     * The name of the base model to fine-tune. You can select one of "ada",
    [Models](https://beta.openai.com/docs/models) documentation.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * The name of the base model to fine-tune. You can select one of "ada",
    [Models](https://beta.openai.com/docs/models) documentation.
     */
    public function setModel(?string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    public function getNEpochs(): ?int
    {
        return $this->nEpochs;
    }

    /**
     * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
     */
    public function setNEpochs(?int $nEpochs): self
    {
        $this->initialized['nEpochs'] = true;
        $this->nEpochs = $nEpochs;
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
}
