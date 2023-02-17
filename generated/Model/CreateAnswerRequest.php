<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateAnswerRequest
{
    protected array $initialized = [];

    /**
     * ID of the model to use for completion. You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    protected ?string $model = null;

    /**
     * Question to get answered.
     */
    protected ?string $question = null;

    /**
     * List of (question, answer) pairs that will help steer the model towards the tone and answer format you'd like. We recommend adding 2 to 3 examples.
     *
     * @var string[][]|null
     */
    protected ?array $examples = null;

    /**
     * A text snippet containing the contextual information used to generate the answers for the `examples` you provide.
     */
    protected ?string $examplesContext = null;

    /**
     * List of documents from which the answer for the input `question` should be derived. If this is an empty list, the question will be answered based on the question-answer examples.

     *
     * @var string[]|null
     */
    protected ?array $documents = null;

    /**
     * The ID of an uploaded file that contains documents to search over. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
    You should specify either `documents` or a `file`, but not both.
     */
    protected ?string $file = null;

    /**
     * ID of the model to use for [Search](/docs/api-reference/searches/create). You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    protected ?string $searchModel = 'ada';

    /**
     * The maximum number of documents to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     */
    protected ?int $maxRerank = 200;

    /**
     * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer.
     */
    protected ?float $temperature;

    /**
     * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    When `logprobs` is set, `completion` will be automatically added into `expand` to get the logprobs.
     */
    protected ?int $logprobs = null;

    /**
     * The maximum number of tokens allowed for the generated answer
     */
    protected ?int $maxTokens = 16;

    /**
     * Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     *
     * @var mixed|null
     */
    protected $stop = null;

    /**
     * How many answers to generate for each question.
     */
    protected ?int $n = 1;

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @var mixed[]|null
     */
    protected ?iterable $logitBias = null;

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    protected ?bool $returnMetadata = false;

    /**
     * If set to `true`, the returned JSON will include a "prompt" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     */
    protected ?bool $returnPrompt = false;

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
     * @param string|null $model ID of the model to use for completion. You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     * @param string|null $question Question to get answered.
     * @param string[][]|null $examples List of (question, answer) pairs that will help steer the model towards the tone and answer format you'd like. We recommend adding 2 to 3 examples.
     * @param string|null $examplesContext A text snippet containing the contextual information used to generate the answers for the `examples` you provide.
     * @param string[]|null $documents List of documents from which the answer for the input `question` should be derived. If this is an empty list, the question will be answered based on the question-answer examples.
     *                                 You should specify either `documents` or a `file`, but not both.
     * @param string|null $file The ID of an uploaded file that contains documents to search over. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
     *                          You should specify either `documents` or a `file`, but not both.
     * @param string|null $searchModel ID of the model to use for [Search](/docs/api-reference/searches/create). You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     * @param int|null $maxRerank The maximum number of documents to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     * @param float|null $temperature What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer.
     * @param int|null $logprobs Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
     *                           The maximum value for `logprobs` is 5. If you need more than this, please contact us through our [Help center](https://help.openai.com) and describe your use case.
     *                           When `logprobs` is set, `completion` will be automatically added into `expand` to get the logprobs.
     * @param int|null $maxTokens The maximum number of tokens allowed for the generated answer
     * @param mixed $stop Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     * @param int|null $n How many answers to generate for each question.
     * @param mixed[]|null $logitBias Modify the likelihood of specified tokens appearing in the completion.
     *                                Accepts a json object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     *                                As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
     * @param bool|null $returnMetadata A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
     *                                  This flag only takes effect when `file` is set.
     * @param bool|null $returnPrompt If set to `true`, the returned JSON will include a "prompt" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     * @param mixed[]|null $expand If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support `completion` and `file` objects for expansion.
     * @param string|null $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function __construct(?string $model = null, ?string $question = null, ?array $examples = null, ?string $examplesContext = null, ?array $documents = null, ?string $file = null, ?string $searchModel = 'ada', ?int $maxRerank = 200, ?float $temperature = 0, ?int $logprobs = null, ?int $maxTokens = 16, mixed $stop = null, ?int $n = 1, ?array $logitBias = null, ?bool $returnMetadata = false, ?bool $returnPrompt = false, ?array $expand = [], ?string $user = null)
    {
        $this->model = $model;
        $this->question = $question;
        $this->examples = $examples;
        $this->examplesContext = $examplesContext;
        $this->documents = $documents;
        $this->file = $file;
        $this->searchModel = $searchModel;
        $this->maxRerank = $maxRerank;
        $this->temperature = $temperature;
        $this->logprobs = $logprobs;
        $this->maxTokens = $maxTokens;
        $this->stop = $stop;
        $this->n = $n;
        $this->logitBias = $logitBias;
        $this->returnMetadata = $returnMetadata;
        $this->returnPrompt = $returnPrompt;
        $this->expand = $expand;
        $this->user = $user;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the model to use for completion. You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * ID of the model to use for completion. You can select one of `ada`, `babbage`, `curie`, or `davinci`.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * Question to get answered.
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * Question to get answered.
     */
    public function setQuestion(string $question): self
    {
        $this->initialized['question'] = true;
        $this->question = $question;
        return $this;
    }

    /**
     * List of (question, answer) pairs that will help steer the model towards the tone and answer format you'd like. We recommend adding 2 to 3 examples.
     *
     * @return string[][]
     */
    public function getExamples(): array
    {
        return $this->examples;
    }

    /**
     * List of (question, answer) pairs that will help steer the model towards the tone and answer format you'd like. We recommend adding 2 to 3 examples.
     *
     * @param string[][] $examples
     */
    public function setExamples(array $examples): self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;
        return $this;
    }

    /**
     * A text snippet containing the contextual information used to generate the answers for the `examples` you provide.
     */
    public function getExamplesContext(): string
    {
        return $this->examplesContext;
    }

    /**
     * A text snippet containing the contextual information used to generate the answers for the `examples` you provide.
     */
    public function setExamplesContext(string $examplesContext): self
    {
        $this->initialized['examplesContext'] = true;
        $this->examplesContext = $examplesContext;
        return $this;
    }

    /**
     * List of documents from which the answer for the input `question` should be derived. If this is an empty list, the question will be answered based on the question-answer examples.

     *
     * @return string[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * List of documents from which the answer for the input `question` should be derived. If this is an empty list, the question will be answered based on the question-answer examples.
     *
     * @param string[]|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }

    /**
     * The ID of an uploaded file that contains documents to search over. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
    You should specify either `documents` or a `file`, but not both.
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * The ID of an uploaded file that contains documents to search over. See [upload file](/docs/api-reference/files/upload) for how to upload a file of the desired format and purpose.
    You should specify either `documents` or a `file`, but not both.
     */
    public function setFile(?string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
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
     * The maximum number of documents to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     */
    public function getMaxRerank(): ?int
    {
        return $this->maxRerank;
    }

    /**
     * The maximum number of documents to be ranked by [Search](/docs/api-reference/searches/create) when using `file`. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     */
    public function setMaxRerank(?int $maxRerank): self
    {
        $this->initialized['maxRerank'] = true;
        $this->maxRerank = $maxRerank;
        return $this;
    }

    /**
     * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer.
     */
    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    /**
     * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer.
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
     * The maximum number of tokens allowed for the generated answer
     */
    public function getMaxTokens(): ?int
    {
        return $this->maxTokens;
    }

    /**
     * The maximum number of tokens allowed for the generated answer
     */
    public function setMaxTokens(?int $maxTokens): self
    {
        $this->initialized['maxTokens'] = true;
        $this->maxTokens = $maxTokens;
        return $this;
    }

    /**
     * Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     *
     * @return mixed
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     */
    public function setStop(mixed $stop): self
    {
        $this->initialized['stop'] = true;
        $this->stop = $stop;
        return $this;
    }

    /**
     * How many answers to generate for each question.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * How many answers to generate for each question.
     */
    public function setN(?int $n): self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
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
