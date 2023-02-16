<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateFineTuneRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The ID of an uploaded file that contains training data.
    
    See [upload file](/docs/api-reference/files/upload) for how to upload a file.
    
    Your dataset must be formatted as a JSONL file, where each training
    example is a JSON object with the keys "prompt" and "completion".
    Additionally, you must upload your file with the purpose `fine-tune`.
    
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
    
    *
    * @var string
    */
    protected $trainingFile;
    /**
    * The ID of an uploaded file that contains validation data.
    
    If you provide this file, the data is used to generate validation
    metrics periodically during fine-tuning. These metrics can be viewed in
    the [fine-tuning results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
    Your train and validation data should be mutually exclusive.
    
    Your dataset must be formatted as a JSONL file, where each validation
    example is a JSON object with the keys "prompt" and "completion".
    Additionally, you must upload your file with the purpose `fine-tune`.
    
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
    
    *
    * @var string|null
    */
    protected $validationFile;
    /**
    * The name of the base model to fine-tune. You can select one of "ada",
    "babbage", "curie", "davinci", or a fine-tuned model created after 2022-04-21.
    To learn more about these models, see the
    [Models](https://beta.openai.com/docs/models) documentation.
    
    *
    * @var string|null
    */
    protected $model = 'curie';
    /**
    * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
    
    *
    * @var int|null
    */
    protected $nEpochs = 4;
    /**
    * The batch size to use for training. The batch size is the number of
    training examples used to train a single forward and backward pass.
    
    By default, the batch size will be dynamically configured to be
    ~0.2% of the number of examples in the training set, capped at 256 -
    in general, we've found that larger batch sizes tend to work better
    for larger datasets.
    
    *
    * @var int|null
    */
    protected $batchSize;
    /**
    * The learning rate multiplier to use for training.
    The fine-tuning learning rate is the original learning rate used for
    pretraining multiplied by this value.
    
    By default, the learning rate multiplier is the 0.05, 0.1, or 0.2
    depending on final `batch_size` (larger learning rates tend to
    perform better with larger batch sizes). We recommend experimenting
    with values in the range 0.02 to 0.2 to see what produces the best
    results.
    
    *
    * @var float|null
    */
    protected $learningRateMultiplier;
    /**
    * The weight to use for loss on the prompt tokens. This controls how
    much the model tries to learn to generate the prompt (as compared
    to the completion which always has a weight of 1.0), and can add
    a stabilizing effect to training when completions are short.
    
    If prompts are extremely long (relative to completions), it may make
    sense to reduce this weight so as to avoid over-prioritizing
    learning the prompt.
    
    *
    * @var float|null
    */
    protected $promptLossWeight = 0.01;
    /**
    * If set, we calculate classification-specific metrics such as accuracy
    and F-1 score using the validation set at the end of every epoch.
    These metrics can be viewed in the [results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
    
    In order to compute classification metrics, you must provide a
    `validation_file`. Additionally, you must
    specify `classification_n_classes` for multiclass classification or
    `classification_positive_class` for binary classification.
    
    *
    * @var bool|null
    */
    protected $computeClassificationMetrics = false;
    /**
    * The number of classes in a classification task.
    
    This parameter is required for multiclass classification.
    
    *
    * @var int|null
    */
    protected $classificationNClasses;
    /**
    * The positive class in binary classification.
    
    This parameter is needed to generate precision, recall, and F1
    metrics when doing binary classification.
    
    *
    * @var string|null
    */
    protected $classificationPositiveClass;
    /**
    * If this is provided, we calculate F-beta scores at the specified
    beta values. The F-beta score is a generalization of F-1 score.
    This is only used for binary classification.
    
    With a beta of 1 (i.e. the F-1 score), precision and recall are
    given the same weight. A larger beta score puts more weight on
    recall and less on precision. A smaller beta score puts more weight
    on precision and less on recall.
    
    *
    * @var float[]|null
    */
    protected $classificationBetas;
    /**
    * A string of up to 40 characters that will be added to your fine-tuned model name.
    
    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
    
    *
    * @var string|null
    */
    protected $suffix;
    /**
    * The ID of an uploaded file that contains training data.
    
    See [upload file](/docs/api-reference/files/upload) for how to upload a file.
    
    Your dataset must be formatted as a JSONL file, where each training
    example is a JSON object with the keys "prompt" and "completion".
    Additionally, you must upload your file with the purpose `fine-tune`.
    
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
    
    *
    * @return string
    */
    public function getTrainingFile() : string
    {
        return $this->trainingFile;
    }
    /**
    * The ID of an uploaded file that contains training data.
    
    See [upload file](/docs/api-reference/files/upload) for how to upload a file.
    
    Your dataset must be formatted as a JSONL file, where each training
    example is a JSON object with the keys "prompt" and "completion".
    Additionally, you must upload your file with the purpose `fine-tune`.
    
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
    
    *
    * @param string $trainingFile
    *
    * @return self
    */
    public function setTrainingFile(string $trainingFile) : self
    {
        $this->initialized['trainingFile'] = true;
        $this->trainingFile = $trainingFile;
        return $this;
    }
    /**
    * The ID of an uploaded file that contains validation data.
    
    If you provide this file, the data is used to generate validation
    metrics periodically during fine-tuning. These metrics can be viewed in
    the [fine-tuning results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
    Your train and validation data should be mutually exclusive.
    
    Your dataset must be formatted as a JSONL file, where each validation
    example is a JSON object with the keys "prompt" and "completion".
    Additionally, you must upload your file with the purpose `fine-tune`.
    
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
    
    *
    * @return string|null
    */
    public function getValidationFile() : ?string
    {
        return $this->validationFile;
    }
    /**
    * The ID of an uploaded file that contains validation data.
    
    If you provide this file, the data is used to generate validation
    metrics periodically during fine-tuning. These metrics can be viewed in
    the [fine-tuning results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
    Your train and validation data should be mutually exclusive.
    
    Your dataset must be formatted as a JSONL file, where each validation
    example is a JSON object with the keys "prompt" and "completion".
    Additionally, you must upload your file with the purpose `fine-tune`.
    
    See the [fine-tuning guide](/docs/guides/fine-tuning/creating-training-data) for more details.
    
    *
    * @param string|null $validationFile
    *
    * @return self
    */
    public function setValidationFile(?string $validationFile) : self
    {
        $this->initialized['validationFile'] = true;
        $this->validationFile = $validationFile;
        return $this;
    }
    /**
    * The name of the base model to fine-tune. You can select one of "ada",
    "babbage", "curie", "davinci", or a fine-tuned model created after 2022-04-21.
    To learn more about these models, see the
    [Models](https://beta.openai.com/docs/models) documentation.
    
    *
    * @return string|null
    */
    public function getModel() : ?string
    {
        return $this->model;
    }
    /**
    * The name of the base model to fine-tune. You can select one of "ada",
    "babbage", "curie", "davinci", or a fine-tuned model created after 2022-04-21.
    To learn more about these models, see the
    [Models](https://beta.openai.com/docs/models) documentation.
    
    *
    * @param string|null $model
    *
    * @return self
    */
    public function setModel(?string $model) : self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
    * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
    
    *
    * @return int|null
    */
    public function getNEpochs() : ?int
    {
        return $this->nEpochs;
    }
    /**
    * The number of epochs to train the model for. An epoch refers to one
    full cycle through the training dataset.
    
    *
    * @param int|null $nEpochs
    *
    * @return self
    */
    public function setNEpochs(?int $nEpochs) : self
    {
        $this->initialized['nEpochs'] = true;
        $this->nEpochs = $nEpochs;
        return $this;
    }
    /**
    * The batch size to use for training. The batch size is the number of
    training examples used to train a single forward and backward pass.
    
    By default, the batch size will be dynamically configured to be
    ~0.2% of the number of examples in the training set, capped at 256 -
    in general, we've found that larger batch sizes tend to work better
    for larger datasets.
    
    *
    * @return int|null
    */
    public function getBatchSize() : ?int
    {
        return $this->batchSize;
    }
    /**
    * The batch size to use for training. The batch size is the number of
    training examples used to train a single forward and backward pass.
    
    By default, the batch size will be dynamically configured to be
    ~0.2% of the number of examples in the training set, capped at 256 -
    in general, we've found that larger batch sizes tend to work better
    for larger datasets.
    
    *
    * @param int|null $batchSize
    *
    * @return self
    */
    public function setBatchSize(?int $batchSize) : self
    {
        $this->initialized['batchSize'] = true;
        $this->batchSize = $batchSize;
        return $this;
    }
    /**
    * The learning rate multiplier to use for training.
    The fine-tuning learning rate is the original learning rate used for
    pretraining multiplied by this value.
    
    By default, the learning rate multiplier is the 0.05, 0.1, or 0.2
    depending on final `batch_size` (larger learning rates tend to
    perform better with larger batch sizes). We recommend experimenting
    with values in the range 0.02 to 0.2 to see what produces the best
    results.
    
    *
    * @return float|null
    */
    public function getLearningRateMultiplier() : ?float
    {
        return $this->learningRateMultiplier;
    }
    /**
    * The learning rate multiplier to use for training.
    The fine-tuning learning rate is the original learning rate used for
    pretraining multiplied by this value.
    
    By default, the learning rate multiplier is the 0.05, 0.1, or 0.2
    depending on final `batch_size` (larger learning rates tend to
    perform better with larger batch sizes). We recommend experimenting
    with values in the range 0.02 to 0.2 to see what produces the best
    results.
    
    *
    * @param float|null $learningRateMultiplier
    *
    * @return self
    */
    public function setLearningRateMultiplier(?float $learningRateMultiplier) : self
    {
        $this->initialized['learningRateMultiplier'] = true;
        $this->learningRateMultiplier = $learningRateMultiplier;
        return $this;
    }
    /**
    * The weight to use for loss on the prompt tokens. This controls how
    much the model tries to learn to generate the prompt (as compared
    to the completion which always has a weight of 1.0), and can add
    a stabilizing effect to training when completions are short.
    
    If prompts are extremely long (relative to completions), it may make
    sense to reduce this weight so as to avoid over-prioritizing
    learning the prompt.
    
    *
    * @return float|null
    */
    public function getPromptLossWeight() : ?float
    {
        return $this->promptLossWeight;
    }
    /**
    * The weight to use for loss on the prompt tokens. This controls how
    much the model tries to learn to generate the prompt (as compared
    to the completion which always has a weight of 1.0), and can add
    a stabilizing effect to training when completions are short.
    
    If prompts are extremely long (relative to completions), it may make
    sense to reduce this weight so as to avoid over-prioritizing
    learning the prompt.
    
    *
    * @param float|null $promptLossWeight
    *
    * @return self
    */
    public function setPromptLossWeight(?float $promptLossWeight) : self
    {
        $this->initialized['promptLossWeight'] = true;
        $this->promptLossWeight = $promptLossWeight;
        return $this;
    }
    /**
    * If set, we calculate classification-specific metrics such as accuracy
    and F-1 score using the validation set at the end of every epoch.
    These metrics can be viewed in the [results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
    
    In order to compute classification metrics, you must provide a
    `validation_file`. Additionally, you must
    specify `classification_n_classes` for multiclass classification or
    `classification_positive_class` for binary classification.
    
    *
    * @return bool|null
    */
    public function getComputeClassificationMetrics() : ?bool
    {
        return $this->computeClassificationMetrics;
    }
    /**
    * If set, we calculate classification-specific metrics such as accuracy
    and F-1 score using the validation set at the end of every epoch.
    These metrics can be viewed in the [results file](/docs/guides/fine-tuning/analyzing-your-fine-tuned-model).
    
    In order to compute classification metrics, you must provide a
    `validation_file`. Additionally, you must
    specify `classification_n_classes` for multiclass classification or
    `classification_positive_class` for binary classification.
    
    *
    * @param bool|null $computeClassificationMetrics
    *
    * @return self
    */
    public function setComputeClassificationMetrics(?bool $computeClassificationMetrics) : self
    {
        $this->initialized['computeClassificationMetrics'] = true;
        $this->computeClassificationMetrics = $computeClassificationMetrics;
        return $this;
    }
    /**
    * The number of classes in a classification task.
    
    This parameter is required for multiclass classification.
    
    *
    * @return int|null
    */
    public function getClassificationNClasses() : ?int
    {
        return $this->classificationNClasses;
    }
    /**
    * The number of classes in a classification task.
    
    This parameter is required for multiclass classification.
    
    *
    * @param int|null $classificationNClasses
    *
    * @return self
    */
    public function setClassificationNClasses(?int $classificationNClasses) : self
    {
        $this->initialized['classificationNClasses'] = true;
        $this->classificationNClasses = $classificationNClasses;
        return $this;
    }
    /**
    * The positive class in binary classification.
    
    This parameter is needed to generate precision, recall, and F1
    metrics when doing binary classification.
    
    *
    * @return string|null
    */
    public function getClassificationPositiveClass() : ?string
    {
        return $this->classificationPositiveClass;
    }
    /**
    * The positive class in binary classification.
    
    This parameter is needed to generate precision, recall, and F1
    metrics when doing binary classification.
    
    *
    * @param string|null $classificationPositiveClass
    *
    * @return self
    */
    public function setClassificationPositiveClass(?string $classificationPositiveClass) : self
    {
        $this->initialized['classificationPositiveClass'] = true;
        $this->classificationPositiveClass = $classificationPositiveClass;
        return $this;
    }
    /**
    * If this is provided, we calculate F-beta scores at the specified
    beta values. The F-beta score is a generalization of F-1 score.
    This is only used for binary classification.
    
    With a beta of 1 (i.e. the F-1 score), precision and recall are
    given the same weight. A larger beta score puts more weight on
    recall and less on precision. A smaller beta score puts more weight
    on precision and less on recall.
    
    *
    * @return float[]|null
    */
    public function getClassificationBetas() : ?array
    {
        return $this->classificationBetas;
    }
    /**
    * If this is provided, we calculate F-beta scores at the specified
    beta values. The F-beta score is a generalization of F-1 score.
    This is only used for binary classification.
    
    With a beta of 1 (i.e. the F-1 score), precision and recall are
    given the same weight. A larger beta score puts more weight on
    recall and less on precision. A smaller beta score puts more weight
    on precision and less on recall.
    
    *
    * @param float[]|null $classificationBetas
    *
    * @return self
    */
    public function setClassificationBetas(?array $classificationBetas) : self
    {
        $this->initialized['classificationBetas'] = true;
        $this->classificationBetas = $classificationBetas;
        return $this;
    }
    /**
    * A string of up to 40 characters that will be added to your fine-tuned model name.
    
    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
    
    *
    * @return string|null
    */
    public function getSuffix() : ?string
    {
        return $this->suffix;
    }
    /**
    * A string of up to 40 characters that will be added to your fine-tuned model name.
    
    For example, a `suffix` of "custom-model-name" would produce a model name like `ada:ft-your-org:custom-model-name-2022-02-15-04-21-04`.
    
    *
    * @param string|null $suffix
    *
    * @return self
    */
    public function setSuffix(?string $suffix) : self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }
}