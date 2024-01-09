<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateCompletionRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @var mixed
     */
    protected $model = null;

    /**
     * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.

     *
     * @var mixed|null
     */
    protected string $prompt = '<|endoftext|>';

    /**
     * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.

    When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.

     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     */
    protected ?int $bestOf = 1;

    /**
     * Echo back the prompt in addition to the completion
     */
    protected ?bool $echo = false;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.

     *
     * @var float|null
     */
    protected $frequencyPenalty = 0;

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @var array<string, int>|null
     */
    protected $logitBias = null;

    /**
     * Include the log probabilities on the `logprobs` most likely output tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.

    The maximum value for `logprobs` is 5.
     */
    protected ?int $logprobs = null;

    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the completion.

    The token count of your prompt plus `max_tokens` cannot exceed the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     */
    protected ?int $maxTokens = 16;

    /**
     * How many completions to generate for each prompt.
     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     */
    protected ?int $n = 1;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.

     *
     * @var float|null
     */
    protected $presencePenalty = 0;

    /**
     * If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.

    Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     */
    protected ?int $seed = null;

    /**
     * Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     *
     * @var mixed|null
     */
    protected $stop = null;

    /**
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     */
    protected ?bool $stream = false;

    /**
     * The suffix that comes after a completion of inserted text.
     */
    protected ?string $suffix = null;

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.

     *
     * @var float|null
     */
    protected $temperature = 1;

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.

     *
     * @var float|null
     */
    protected $topP = 1;

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected ?string $user = null;

    /**
     * @param mixed $model ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     * @param mixed|null $prompt The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.
     *                           Note that <|endoftext|> is the document separator that the model sees during training, so if a prompt is not specified the model will generate as if from the beginning of a new document.
     * @param int|null $bestOf Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.
     *                         When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.
     *                         **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     * @param bool|null $echo Echo back the prompt in addition to the completion
     * @param float|null $frequencyPenalty Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
     *                                     [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     * @param array<string, int>|null $logitBias Modify the likelihood of specified tokens appearing in the completion.
     *                                           Accepts a JSON object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     *                                           As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
     * @param int|null $logprobs Include the log probabilities on the `logprobs` most likely output tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
     *                           The maximum value for `logprobs` is 5.
     * @param int|null $maxTokens The maximum number of [tokens](/tokenizer) that can be generated in the completion.
     *                            The token count of your prompt plus `max_tokens` cannot exceed the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     * @param int|null $n How many completions to generate for each prompt.
     *                    **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     * @param float|null $presencePenalty Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
     *                                    [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     * @param int|null $seed If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.
     *                       Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     * @param mixed|null $stop Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     * @param bool|null $stream Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     * @param string|null $suffix The suffix that comes after a completion of inserted text.
     * @param float|null $temperature What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     *                                We generally recommend altering this or `top_p` but not both.
     * @param float|null $topP An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
     *                         We generally recommend altering this or `temperature` but not both.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function __construct(mixed $model = null, $prompt = '<|endoftext|>', $bestOf = 1, $echo = false, $frequencyPenalty = 0, $logitBias = null, $logprobs = null, $maxTokens = 16, $n = 1, $presencePenalty = 0, $seed = null, $stop = null, $stream = false, $suffix = null, $temperature = 1, $topP = 1, $user = null)
    {
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($prompt !== null) {
            $this->setPrompt($prompt);
        }
        if ($bestOf !== null) {
            $this->setBestOf($bestOf);
        }
        if ($echo !== null) {
            $this->setEcho($echo);
        }
        if ($frequencyPenalty !== null) {
            $this->setFrequencyPenalty($frequencyPenalty);
        }
        if ($logitBias !== null) {
            $this->setLogitBias($logitBias);
        }
        if ($logprobs !== null) {
            $this->setLogprobs($logprobs);
        }
        if ($maxTokens !== null) {
            $this->setMaxTokens($maxTokens);
        }
        if ($n !== null) {
            $this->setN($n);
        }
        if ($presencePenalty !== null) {
            $this->setPresencePenalty($presencePenalty);
        }
        if ($seed !== null) {
            $this->setSeed($seed);
        }
        if ($stop !== null) {
            $this->setStop($stop);
        }
        if ($stream !== null) {
            $this->setStream($stream);
        }
        if ($suffix !== null) {
            $this->setSuffix($suffix);
        }
        if ($temperature !== null) {
            $this->setTemperature($temperature);
        }
        if ($topP !== null) {
            $this->setTopP($topP);
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
     *
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     */
    public function setModel(mixed $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.

     *
     * @return mixed
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.

    Note that <|endoftext|> is the document separator that the model sees during training, so if a prompt is not specified the model will generate as if from the beginning of a new document.
     */
    public function setPrompt(mixed $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }

    /**
     * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.

    When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.

     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     */
    public function getBestOf(): ?int
    {
        return $this->bestOf;
    }

    /**
     * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.

    When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.

     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     */
    public function setBestOf(?int $bestOf): self
    {
        $this->initialized['bestOf'] = true;
        $this->bestOf = $bestOf;
        return $this;
    }

    /**
     * Echo back the prompt in addition to the completion
     */
    public function getEcho(): ?bool
    {
        return $this->echo;
    }

    /**
     * Echo back the prompt in addition to the completion
     */
    public function setEcho(?bool $echo): self
    {
        $this->initialized['echo'] = true;
        $this->echo = $echo;
        return $this;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.

    [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     */
    public function getFrequencyPenalty(): ?float
    {
        return $this->frequencyPenalty;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.

    [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     */
    public function setFrequencyPenalty(?float $frequencyPenalty): self
    {
        $this->initialized['frequencyPenalty'] = true;
        $this->frequencyPenalty = $frequencyPenalty;
        return $this;
    }

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @return array<string, int>|null
     */
    public function getLogitBias(): ?iterable
    {
        return $this->logitBias;
    }

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @param array<string, int>|null $logitBias
     */
    public function setLogitBias(?iterable $logitBias): self
    {
        $this->initialized['logitBias'] = true;
        $this->logitBias = $logitBias;
        return $this;
    }

    /**
     * Include the log probabilities on the `logprobs` most likely output tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.

    The maximum value for `logprobs` is 5.
     */
    public function getLogprobs(): ?int
    {
        return $this->logprobs;
    }

    /**
     * Include the log probabilities on the `logprobs` most likely output tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.

    The maximum value for `logprobs` is 5.
     */
    public function setLogprobs(?int $logprobs): self
    {
        $this->initialized['logprobs'] = true;
        $this->logprobs = $logprobs;
        return $this;
    }

    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the completion.

    The token count of your prompt plus `max_tokens` cannot exceed the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     */
    public function getMaxTokens(): ?int
    {
        return $this->maxTokens;
    }

    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the completion.

    The token count of your prompt plus `max_tokens` cannot exceed the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     */
    public function setMaxTokens(?int $maxTokens): self
    {
        $this->initialized['maxTokens'] = true;
        $this->maxTokens = $maxTokens;
        return $this;
    }

    /**
     * How many completions to generate for each prompt.
     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * How many completions to generate for each prompt.
     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     */
    public function setN(?int $n): self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.

    [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     */
    public function getPresencePenalty(): ?float
    {
        return $this->presencePenalty;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.

    [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     */
    public function setPresencePenalty(?float $presencePenalty): self
    {
        $this->initialized['presencePenalty'] = true;
        $this->presencePenalty = $presencePenalty;
        return $this;
    }

    /**
     * If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.

    Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     */
    public function getSeed(): ?int
    {
        return $this->seed;
    }

    /**
     * If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.

    Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     */
    public function setSeed(?int $seed): self
    {
        $this->initialized['seed'] = true;
        $this->seed = $seed;
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
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     */
    public function getStream(): ?bool
    {
        return $this->stream;
    }

    /**
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     */
    public function setStream(?bool $stream): self
    {
        $this->initialized['stream'] = true;
        $this->stream = $stream;
        return $this;
    }

    /**
     * The suffix that comes after a completion of inserted text.
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * The suffix that comes after a completion of inserted text.
     */
    public function setSuffix(?string $suffix): self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.

    We generally recommend altering this or `top_p` but not both.
     */
    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.

    We generally recommend altering this or `top_p` but not both.
     */
    public function setTemperature(?float $temperature): self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.

    We generally recommend altering this or `temperature` but not both.
     */
    public function getTopP(): ?float
    {
        return $this->topP;
    }

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.

    We generally recommend altering this or `temperature` but not both.
     */
    public function setTopP(?float $topP): self
    {
        $this->initialized['topP'] = true;
        $this->topP = $topP;
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
