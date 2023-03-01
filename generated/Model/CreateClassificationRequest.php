<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateClassificationRequest
{
    protected array $initialized = [];

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     */
    protected ?string $model = null;

    /**
     * Query to be classified.
     */
    protected ?string $query = null;

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
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
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
    protected ?string $user = null;

    /**
     * @param string $model ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     * @param string $query Query to be classified.
     * @param string[][]|null $examples A list of examples with labels, in the following format:
     *                                  `[["The movie is so interesting.", "Positive"], ["It is quite boring.", "Negative"], ...]`
     *                                  All the label strings will be normalized to be capitalized.
     *                                  You should specify either `examples` or `file`, but not both.
     * @param string|null $file The ID of the uploaded file that contains training examples. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
     *                          You should specify either `examples` or `file`, but not both.
     * @param string[]|null $labels The set of categories being classified. If not specified, candidate labels will be automatically collected from the examples you provide. All the label strings will be normalized to be capitalized.
     * @param string|null $searchModel ID of the model to use for [Search](/docs/api-reference/searches/create). You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     * @param float|null $temperature What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     * @param int|null $logprobs Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
     *                           The maximum value for `logprobs` is 5. If you need more than this, please contact us through our [Help center](https://help.openai.com) and describe your use case.
     *                           When `logprobs` is set, `completion` will be automatically added into `expand` to get the logprobs.
     * @param int|null $maxExamples The maximum number of examples to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     * @param mixed[]|null $logitBias Modify the likelihood of specified tokens appearing in the completion.
     *                                Accepts a json object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     *                                As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
     * @param bool|null $returnPrompt If set to `true`, the returned JSON will include a "prompt" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     * @param bool|null $returnMetadata A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
     *                                  This flag only takes effect when `file` is set.
     * @param mixed[]|null $expand If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support `completion` and `file` objects for expansion.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function __construct($model = null, $query = null, $examples = null, $file = null, $labels = null, $searchModel = 'ada', $temperature = 0, $logprobs = null, $maxExamples = 200, $logitBias = null, $returnPrompt = false, $returnMetadata = false, $expand = [], $user = null)
    {
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($query !== null) {
            $this->setQuery($query);
        }
        if ($examples !== null) {
            $this->setExamples($examples);
        }
        if ($file !== null) {
            $this->setFile($file);
        }
        if ($labels !== null) {
            $this->setLabels($labels);
        }
        if ($searchModel !== null) {
            $this->setSearchModel($searchModel);
        }
        if ($temperature !== null) {
            $this->setTemperature($temperature);
        }
        if ($logprobs !== null) {
            $this->setLogprobs($logprobs);
        }
        if ($maxExamples !== null) {
            $this->setMaxExamples($maxExamples);
        }
        if ($logitBias !== null) {
            $this->setLogitBias($logitBias);
        }
        if ($returnPrompt !== null) {
            $this->setReturnPrompt($returnPrompt);
        }
        if ($returnMetadata !== null) {
            $this->setReturnMetadata($returnMetadata);
        }
        if ($expand !== null) {
            $this->setExpand($expand);
        }
        if ($user !== null) {
            $this->setUser($user);
        }
    }

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
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     */
    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
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
