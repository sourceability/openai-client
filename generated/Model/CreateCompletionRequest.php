<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateCompletionRequest extends \ArrayObject
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
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @var string
     */
    protected $model;
    /**
    * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.
    
    Note that <|endoftext|> is the document separator that the model sees during training, so if a prompt is not specified the model will generate as if from the beginning of a new document.
    
    *
    * @var mixed|null
    */
    protected $prompt = '<|endoftext|>';
    /**
     * The suffix that comes after a completion of inserted text.
     *
     * @var string|null
     */
    protected $suffix;
    /**
    * The maximum number of [tokens](/tokenizer) to generate in the completion.
    
    The token count of your prompt plus `max_tokens` cannot exceed the model's context length. Most models have a context length of 2048 tokens (except for the newest models, which support 4096).
    
    *
    * @var int|null
    */
    protected $maxTokens = 16;
    /**
    * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values means the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
    
    We generally recommend altering this or `top_p` but not both.
    
    *
    * @var float|null
    */
    protected $temperature = 1;
    /**
    * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    
    We generally recommend altering this or `temperature` but not both.
    
    *
    * @var float|null
    */
    protected $topP = 1;
    /**
     * How many completions to generate for each prompt.
     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     *
     * @var int|null
     */
    protected $n = 1;
    /**
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message.
     *
     * @var bool|null
     */
    protected $stream = false;
    /**
    * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    
    The maximum value for `logprobs` is 5. If you need more than this, please contact us through our [Help center](https://help.openai.com) and describe your use case.
    
    *
    * @var int|null
    */
    protected $logprobs;
    /**
     * Echo back the prompt in addition to the completion
     *
     * @var bool|null
     */
    protected $echo = false;
    /**
     * Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
     *
     * @var mixed|null
     */
    protected $stop;
    /**
    * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
    
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
    
    *
    * @var float|null
    */
    protected $presencePenalty = 0;
    /**
    * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
    
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
    
    *
    * @var float|null
    */
    protected $frequencyPenalty = 0;
    /**
    * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.
    
    When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.
    
    **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
    
    *
    * @var int|null
    */
    protected $bestOf = 1;
    /**
    * Modify the likelihood of specified tokens appearing in the completion.
    
    Accepts a json object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
    
    As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
    
    *
    * @var mixed[]|null
    */
    protected $logitBias;
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @var string
     */
    protected $user;
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @return string
     */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model) : self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
    * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.
    
    Note that <|endoftext|> is the document separator that the model sees during training, so if a prompt is not specified the model will generate as if from the beginning of a new document.
    
    *
    * @return mixed
    */
    public function getPrompt()
    {
        return $this->prompt;
    }
    /**
    * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.
    
    Note that <|endoftext|> is the document separator that the model sees during training, so if a prompt is not specified the model will generate as if from the beginning of a new document.
    
    *
    * @param mixed $prompt
    *
    * @return self
    */
    public function setPrompt($prompt) : self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }
    /**
     * The suffix that comes after a completion of inserted text.
     *
     * @return string|null
     */
    public function getSuffix() : ?string
    {
        return $this->suffix;
    }
    /**
     * The suffix that comes after a completion of inserted text.
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
    /**
    * The maximum number of [tokens](/tokenizer) to generate in the completion.
    
    The token count of your prompt plus `max_tokens` cannot exceed the model's context length. Most models have a context length of 2048 tokens (except for the newest models, which support 4096).
    
    *
    * @return int|null
    */
    public function getMaxTokens() : ?int
    {
        return $this->maxTokens;
    }
    /**
    * The maximum number of [tokens](/tokenizer) to generate in the completion.
    
    The token count of your prompt plus `max_tokens` cannot exceed the model's context length. Most models have a context length of 2048 tokens (except for the newest models, which support 4096).
    
    *
    * @param int|null $maxTokens
    *
    * @return self
    */
    public function setMaxTokens(?int $maxTokens) : self
    {
        $this->initialized['maxTokens'] = true;
        $this->maxTokens = $maxTokens;
        return $this;
    }
    /**
    * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values means the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
    
    We generally recommend altering this or `top_p` but not both.
    
    *
    * @return float|null
    */
    public function getTemperature() : ?float
    {
        return $this->temperature;
    }
    /**
    * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values means the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
    
    We generally recommend altering this or `top_p` but not both.
    
    *
    * @param float|null $temperature
    *
    * @return self
    */
    public function setTemperature(?float $temperature) : self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }
    /**
    * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    
    We generally recommend altering this or `temperature` but not both.
    
    *
    * @return float|null
    */
    public function getTopP() : ?float
    {
        return $this->topP;
    }
    /**
    * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    
    We generally recommend altering this or `temperature` but not both.
    
    *
    * @param float|null $topP
    *
    * @return self
    */
    public function setTopP(?float $topP) : self
    {
        $this->initialized['topP'] = true;
        $this->topP = $topP;
        return $this;
    }
    /**
     * How many completions to generate for each prompt.
     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     *
     * @return int|null
     */
    public function getN() : ?int
    {
        return $this->n;
    }
    /**
     * How many completions to generate for each prompt.
     **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     *
     * @param int|null $n
     *
     * @return self
     */
    public function setN(?int $n) : self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }
    /**
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message.
     *
     * @return bool|null
     */
    public function getStream() : ?bool
    {
        return $this->stream;
    }
    /**
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message.
     *
     * @param bool|null $stream
     *
     * @return self
     */
    public function setStream(?bool $stream) : self
    {
        $this->initialized['stream'] = true;
        $this->stream = $stream;
        return $this;
    }
    /**
    * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    
    The maximum value for `logprobs` is 5. If you need more than this, please contact us through our [Help center](https://help.openai.com) and describe your use case.
    
    *
    * @return int|null
    */
    public function getLogprobs() : ?int
    {
        return $this->logprobs;
    }
    /**
    * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
    
    The maximum value for `logprobs` is 5. If you need more than this, please contact us through our [Help center](https://help.openai.com) and describe your use case.
    
    *
    * @param int|null $logprobs
    *
    * @return self
    */
    public function setLogprobs(?int $logprobs) : self
    {
        $this->initialized['logprobs'] = true;
        $this->logprobs = $logprobs;
        return $this;
    }
    /**
     * Echo back the prompt in addition to the completion
     *
     * @return bool|null
     */
    public function getEcho() : ?bool
    {
        return $this->echo;
    }
    /**
     * Echo back the prompt in addition to the completion
     *
     * @param bool|null $echo
     *
     * @return self
     */
    public function setEcho(?bool $echo) : self
    {
        $this->initialized['echo'] = true;
        $this->echo = $echo;
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
     *
     * @param mixed $stop
     *
     * @return self
     */
    public function setStop($stop) : self
    {
        $this->initialized['stop'] = true;
        $this->stop = $stop;
        return $this;
    }
    /**
    * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
    
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
    
    *
    * @return float|null
    */
    public function getPresencePenalty() : ?float
    {
        return $this->presencePenalty;
    }
    /**
    * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
    
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
    
    *
    * @param float|null $presencePenalty
    *
    * @return self
    */
    public function setPresencePenalty(?float $presencePenalty) : self
    {
        $this->initialized['presencePenalty'] = true;
        $this->presencePenalty = $presencePenalty;
        return $this;
    }
    /**
    * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
    
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
    
    *
    * @return float|null
    */
    public function getFrequencyPenalty() : ?float
    {
        return $this->frequencyPenalty;
    }
    /**
    * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
    
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
    
    *
    * @param float|null $frequencyPenalty
    *
    * @return self
    */
    public function setFrequencyPenalty(?float $frequencyPenalty) : self
    {
        $this->initialized['frequencyPenalty'] = true;
        $this->frequencyPenalty = $frequencyPenalty;
        return $this;
    }
    /**
    * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.
    
    When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.
    
    **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
    
    *
    * @return int|null
    */
    public function getBestOf() : ?int
    {
        return $this->bestOf;
    }
    /**
    * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.
    
    When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.
    
    **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
    
    *
    * @param int|null $bestOf
    *
    * @return self
    */
    public function setBestOf(?int $bestOf) : self
    {
        $this->initialized['bestOf'] = true;
        $this->bestOf = $bestOf;
        return $this;
    }
    /**
    * Modify the likelihood of specified tokens appearing in the completion.
    
    Accepts a json object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
    
    As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
    
    *
    * @return mixed[]|null
    */
    public function getLogitBias() : ?iterable
    {
        return $this->logitBias;
    }
    /**
    * Modify the likelihood of specified tokens appearing in the completion.
    
    Accepts a json object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
    
    As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
    
    *
    * @param mixed[]|null $logitBias
    *
    * @return self
    */
    public function setLogitBias(?iterable $logitBias) : self
    {
        $this->initialized['logitBias'] = true;
        $this->logitBias = $logitBias;
        return $this;
    }
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}