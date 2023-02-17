<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateClassificationRequest
{
    protected array $initialized = [];

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     */
    protected string $model;

    /**
     * Query to be classified.
     */
    protected string $query;

    /**
     * A list of examples with labels, in the following format:

     *
     * @var string[][]|null
     */
    protected ?array $examples = null;

    /**
     * The ID of the uploaded file that contains training examples. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
    You should specify either `examples` or `file`, but not both.
     */
    protected ?string $file = null;

    /**
     * The set of categories being classified. If not specified, candidate labels will be automatically collected from the examples you provide. All the label strings will be normalized to be capitalized.
     *
     * @var string[]|null
     */
    protected ?array $labels = null;

    /**
     * ID of the model to use for [Search](/docs/api-reference/searches/create). You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    protected ?string $searchModel = 'ada';

    /**
     * What sampling `temperature` to use. Higher values mean the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
     *
     * @var float|null
     */
    protected $temperature = 0;

    /**
     * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    When `logprobs` is set, `completion` will be automatically added into `expand` to get the logprobs.
     */
    protected ?int $logprobs = null;

    /**
     * The maximum number of examples to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     */
    protected ?int $maxExamples = 200;

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @var mixed[]|null
     */
    protected ?iterable $logitBias = null;

    /**
     * If set to `true`, the returned JSON will include a "prompt" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     */
    protected ?bool $returnPrompt = false;

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    protected ?bool $returnMetadata = false;

    /**
     * If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support `completion` and `file` objects for expansion.
     *
     * @var mixed[]|null
     */
    protected ?array $expand = [];

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected string $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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
     * Query to be classified.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Query to be classified.
     */
    public function setQuery(string $query): self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }

    /**
     * A list of examples with labels, in the following format:

     *
     * @return string[][]|null
     */
    public function getExamples(): ?array
    {
        return $this->examples;
    }

    /**
     * A list of examples with labels, in the following format:
     *
     * @param string[][]|null $examples
     */
    public function setExamples(?array $examples): self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;
        return $this;
    }

    /**
     * The ID of the uploaded file that contains training examples. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
    You should specify either `examples` or `file`, but not both.
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * The ID of the uploaded file that contains training examples. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
    You should specify either `examples` or `file`, but not both.
     */
    public function setFile(?string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }

    /**
     * The set of categories being classified. If not specified, candidate labels will be automatically collected from the examples you provide. All the label strings will be normalized to be capitalized.
     *
     * @return string[]|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * The set of categories being classified. If not specified, candidate labels will be automatically collected from the examples you provide. All the label strings will be normalized to be capitalized.
     *
     * @param string[]|null $labels
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }

    /**
     * ID of the model to use for [Search](/docs/api-reference/searches/create). You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    public function getSearchModel(): ?string
    {
        return $this->searchModel;
    }

    /**
     * ID of the model to use for [Search](/docs/api-reference/searches/create). You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    public function setSearchModel(?string $searchModel): self
    {
        $this->initialized['searchModel'] = true;
        $this->searchModel = $searchModel;
        return $this;
    }

    /**
     * What sampling `temperature` to use. Higher values mean the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
     */
    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    /**
     * What sampling `temperature` to use. Higher values mean the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
     */
    public function setTemperature(?float $temperature): self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    When `logprobs` is set, `completion` will be automatically added into `expand` to get the logprobs.
     */
    public function getLogprobs(): ?int
    {
        return $this->logprobs;
    }

    /**
     * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    When `logprobs` is set, `completion` will be automatically added into `expand` to get the logprobs.
     */
    public function setLogprobs(?int $logprobs): self
    {
        $this->initialized['logprobs'] = true;
        $this->logprobs = $logprobs;
        return $this;
    }

    /**
     * The maximum number of examples to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     */
    public function getMaxExamples(): ?int
    {
        return $this->maxExamples;
    }

    /**
     * The maximum number of examples to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     */
    public function setMaxExamples(?int $maxExamples): self
    {
        $this->initialized['maxExamples'] = true;
        $this->maxExamples = $maxExamples;
        return $this;
    }

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @return mixed[]|null
     */
    public function getLogitBias(): ?iterable
    {
        return $this->logitBias;
    }

    /**
     * Modify the likelihood of specified tokens appearing in the completion.
     *
     * @param mixed[]|null $logitBias
     */
    public function setLogitBias(?iterable $logitBias): self
    {
        $this->initialized['logitBias'] = true;
        $this->logitBias = $logitBias;
        return $this;
    }

    /**
     * If set to `true`, the returned JSON will include a "prompt" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     */
    public function getReturnPrompt(): ?bool
    {
        return $this->returnPrompt;
    }

    /**
     * If set to `true`, the returned JSON will include a "prompt" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     */
    public function setReturnPrompt(?bool $returnPrompt): self
    {
        $this->initialized['returnPrompt'] = true;
        $this->returnPrompt = $returnPrompt;
        return $this;
    }

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    public function getReturnMetadata(): ?bool
    {
        return $this->returnMetadata;
    }

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    public function setReturnMetadata(?bool $returnMetadata): self
    {
        $this->initialized['returnMetadata'] = true;
        $this->returnMetadata = $returnMetadata;
        return $this;
    }

    /**
     * If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support `completion` and `file` objects for expansion.
     *
     * @return mixed[]|null
     */
    public function getExpand(): ?array
    {
        return $this->expand;
    }

    /**
     * If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support `completion` and `file` objects for expansion.
     *
     * @param mixed[]|null $expand
     */
    public function setExpand(?array $expand): self
    {
        $this->initialized['expand'] = true;
        $this->expand = $expand;
        return $this;
    }

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}
