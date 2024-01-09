<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://cookbook.openai.com/examples/how_to_format_inputs_to_chatgpt_models).
     *
     * @var ChatCompletionRequestSystemMessage[]|ChatCompletionRequestUserMessage[]|ChatCompletionRequestAssistantMessage[]|ChatCompletionRequestToolMessage[]|ChatCompletionRequestFunctionMessage[]
     */
    protected ?array $messages = null;

    /**
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     *
     * @var string|string
     */
    protected $model = null;

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
     * Whether to return log probabilities of the output tokens or not. If true, returns the log probabilities of each output token returned in the `content` of `message`. This option is currently not available on the `gpt-4-vision-preview` model.
     */
    protected ?bool $logprobs = null;

    /**
     * An integer between 0 and 5 specifying the number of most likely tokens to return at each token position, each with an associated log probability. `logprobs` must be set to `true` if this parameter is used.
     */
    protected ?int $topLogprobs = null;

    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the chat completion.

    The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     */
    protected ?int $maxTokens = null;

    /**
     * How many chat completion choices to generate for each input message. Note that you will be charged based on the number of generated tokens across all of the choices. Keep `n` as `1` to minimize costs.
     */
    protected ?int $n = 1;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.

     *
     * @var float|null
     */
    protected $presencePenalty = 0;

    /**
     * An object specifying the format that the model must output. Compatible with `gpt-4-1106-preview` and `gpt-3.5-turbo-1106`.

    Setting to `{ "type": "json_object" }` enables JSON mode, which guarantees the message the model generates is valid JSON.

     **Important:** when using JSON mode, you **must** also instruct the model to produce JSON yourself via a system or user message. Without this, the model may generate an unending stream of whitespace until the generation reaches the token limit, resulting in a long-running and seemingly "stuck" request. Also note that the message content may be partially cut off if `finish_reason="length"`, which indicates the generation exceeded `max_tokens` or the conversation exceeded the max context length.
     */
    protected ?CreateChatCompletionRequestResponseFormat $responseFormat = null;

    /**
     * This feature is in Beta.
    Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     */
    protected ?int $seed = null;

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     *
     * @var string|string[]
     */
    protected $stop = null;

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     */
    protected ?bool $stream = false;

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
     * A list of tools the model may call. Currently, only functions are supported as a tool. Use this to provide a list of functions the model may generate JSON inputs for.
     *
     * @var ChatCompletionTool[]
     */
    protected ?array $tools = null;

    /**
     * Controls which (if any) function is called by the model.
     *
     * @var string|ChatCompletionNamedToolChoice
     */
    protected $toolChoice = null;

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected ?string $user = null;

    /**
     * Deprecated in favor of `tool_choice`.

     *
     * @deprecated
     *
     * @var string|ChatCompletionFunctionCallOption
     */
    protected $functionCall = null;

    /**
     * Deprecated in favor of `tools`.

     *
     * @deprecated
     *
     * @var ChatCompletionFunctions[]
     */
    protected ?array $functions = null;

    /**
     * @param ChatCompletionRequestSystemMessage[]|ChatCompletionRequestUserMessage[]|ChatCompletionRequestAssistantMessage[]|ChatCompletionRequestToolMessage[]|ChatCompletionRequestFunctionMessage[] $messages A list of messages comprising the conversation so far. [Example Python code](https://cookbook.openai.com/examples/how_to_format_inputs_to_chatgpt_models).
     * @param string|string $model ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     * @param array<string, int>|null $logitBias Modify the likelihood of specified tokens appearing in the completion.
     *                                           Accepts a JSON object that maps tokens (specified by their token ID in the tokenizer) to an associated bias value from -100 to 100. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     * @param int|null $topLogprobs An integer between 0 and 5 specifying the number of most likely tokens to return at each token position, each with an associated log probability. `logprobs` must be set to `true` if this parameter is used.
     * @param int|null $maxTokens The maximum number of [tokens](/tokenizer) that can be generated in the chat completion.
     *                            The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     * @param CreateChatCompletionRequestResponseFormat $responseFormat An object specifying the format that the model must output. Compatible with `gpt-4-1106-preview` and `gpt-3.5-turbo-1106`.
     *                                                                                                              Setting to `{ "type": "json_object" }` enables JSON mode, which guarantees the message the model generates is valid JSON.
     *                                                                                                              **Important:** when using JSON mode, you **must** also instruct the model to produce JSON yourself via a system or user message. Without this, the model may generate an unending stream of whitespace until the generation reaches the token limit, resulting in a long-running and seemingly "stuck" request. Also note that the message content may be partially cut off if `finish_reason="length"`, which indicates the generation exceeded `max_tokens` or the conversation exceeded the max context length.
     * @param int|null $seed This feature is in Beta.
     *                       If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.
     *                       Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     * @param string|string[] $stop Up to 4 sequences where the API will stop generating further tokens.
     * @param ChatCompletionTool[] $tools A list of tools the model may call. Currently, only functions are supported as a tool. Use this to provide a list of functions the model may generate JSON inputs for.
     * @param string|ChatCompletionNamedToolChoice $toolChoice Controls which (if any) function is called by the model.
     *                                                                                                     `none` means the model will not call a function and instead generates a message.
     *                                                                                                     `auto` means the model can pick between generating a message or calling a function.
     *                                                                                                     Specifying a particular function via `{"type: "function", "function": {"name": "my_function"}}` forces the model to call that function.
     *                                                                                                     `none` is the default when no functions are present. `auto` is the default if functions are present.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     * @param string|ChatCompletionFunctionCallOption $functionCall Deprecated in favor of `tool_choice`.
     *                                                                                                          Controls which (if any) function is called by the model.
     *                                                                                                          `none` means the model will not call a function and instead generates a message.
     *                                                                                                          `auto` means the model can pick between generating a message or calling a function.
     *                                                                                                          Specifying a particular function via `{"name": "my_function"}` forces the model to call that function.
     *                                                                                                          `none` is the default when no functions are present. `auto` is the default if functions are present.
     * @param ChatCompletionFunctions[] $functions Deprecated in favor of `tools`.
     *                                                                                         A list of functions the model may generate JSON inputs for.
     * @param float|null $frequencyPenalty Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
     *                                     [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     * @param bool|null $logprobs Whether to return log probabilities of the output tokens or not. If true, returns the log probabilities of each output token returned in the `content` of `message`. This option is currently not available on the `gpt-4-vision-preview` model.
     * @param int|null $n How many chat completion choices to generate for each input message. Note that you will be charged based on the number of generated tokens across all of the choices. Keep `n` as `1` to minimize costs.
     * @param float|null $presencePenalty Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
     *                                    [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     * @param bool|null $stream If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     * @param float|null $temperature What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     *                                We generally recommend altering this or `top_p` but not both.
     * @param float|null $topP An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
     *                         We generally recommend altering this or `temperature` but not both.
     */
    public function __construct($messages = null, $model = null, $logitBias = null, $topLogprobs = null, $maxTokens = null, $responseFormat = null, $seed = null, $stop = null, $tools = null, $toolChoice = null, $user = null, $functionCall = null, $functions = null, $frequencyPenalty = 0, $logprobs = null, $n = 1, $presencePenalty = 0, $stream = false, $temperature = 1, $topP = 1)
    {
        if ($messages !== null) {
            $this->setMessages($messages);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($logitBias !== null) {
            $this->setLogitBias($logitBias);
        }
        if ($topLogprobs !== null) {
            $this->setTopLogprobs($topLogprobs);
        }
        if ($maxTokens !== null) {
            $this->setMaxTokens($maxTokens);
        }
        if ($responseFormat !== null) {
            $this->setResponseFormat($responseFormat);
        }
        if ($seed !== null) {
            $this->setSeed($seed);
        }
        if ($stop !== null) {
            $this->setStop($stop);
        }
        if ($tools !== null) {
            $this->setTools($tools);
        }
        if ($toolChoice !== null) {
            $this->setToolChoice($toolChoice);
        }
        if ($user !== null) {
            $this->setUser($user);
        }
        if ($functionCall !== null) {
            $this->setFunctionCall($functionCall);
        }
        if ($functions !== null) {
            $this->setFunctions($functions);
        }
        if ($frequencyPenalty !== null) {
            $this->setFrequencyPenalty($frequencyPenalty);
        }
        if ($logprobs !== null) {
            $this->setLogprobs($logprobs);
        }
        if ($n !== null) {
            $this->setN($n);
        }
        if ($presencePenalty !== null) {
            $this->setPresencePenalty($presencePenalty);
        }
        if ($stream !== null) {
            $this->setStream($stream);
        }
        if ($temperature !== null) {
            $this->setTemperature($temperature);
        }
        if ($topP !== null) {
            $this->setTopP($topP);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://cookbook.openai.com/examples/how_to_format_inputs_to_chatgpt_models).
     *
     * @return ChatCompletionRequestSystemMessage[]|ChatCompletionRequestUserMessage[]|ChatCompletionRequestAssistantMessage[]|ChatCompletionRequestToolMessage[]|ChatCompletionRequestFunctionMessage[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://cookbook.openai.com/examples/how_to_format_inputs_to_chatgpt_models).
     *
     * @param ChatCompletionRequestSystemMessage[]|ChatCompletionRequestUserMessage[]|ChatCompletionRequestAssistantMessage[]|ChatCompletionRequestToolMessage[]|ChatCompletionRequestFunctionMessage[] $messages
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }

    /**
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     *
     * @return string|string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     *
     * @param string|string $model
     */
    public function setModel($model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
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
     * Whether to return log probabilities of the output tokens or not. If true, returns the log probabilities of each output token returned in the `content` of `message`. This option is currently not available on the `gpt-4-vision-preview` model.
     */
    public function getLogprobs(): ?bool
    {
        return $this->logprobs;
    }

    /**
     * Whether to return log probabilities of the output tokens or not. If true, returns the log probabilities of each output token returned in the `content` of `message`. This option is currently not available on the `gpt-4-vision-preview` model.
     */
    public function setLogprobs(?bool $logprobs): self
    {
        $this->initialized['logprobs'] = true;
        $this->logprobs = $logprobs;
        return $this;
    }

    /**
     * An integer between 0 and 5 specifying the number of most likely tokens to return at each token position, each with an associated log probability. `logprobs` must be set to `true` if this parameter is used.
     */
    public function getTopLogprobs(): ?int
    {
        return $this->topLogprobs;
    }

    /**
     * An integer between 0 and 5 specifying the number of most likely tokens to return at each token position, each with an associated log probability. `logprobs` must be set to `true` if this parameter is used.
     */
    public function setTopLogprobs(?int $topLogprobs): self
    {
        $this->initialized['topLogprobs'] = true;
        $this->topLogprobs = $topLogprobs;
        return $this;
    }

    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the chat completion.

    The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     */
    public function getMaxTokens(): ?int
    {
        return $this->maxTokens;
    }

    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the chat completion.

    The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     */
    public function setMaxTokens(?int $maxTokens): self
    {
        $this->initialized['maxTokens'] = true;
        $this->maxTokens = $maxTokens;
        return $this;
    }

    /**
     * How many chat completion choices to generate for each input message. Note that you will be charged based on the number of generated tokens across all of the choices. Keep `n` as `1` to minimize costs.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * How many chat completion choices to generate for each input message. Note that you will be charged based on the number of generated tokens across all of the choices. Keep `n` as `1` to minimize costs.
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
     * An object specifying the format that the model must output. Compatible with `gpt-4-1106-preview` and `gpt-3.5-turbo-1106`.

    Setting to `{ "type": "json_object" }` enables JSON mode, which guarantees the message the model generates is valid JSON.

     **Important:** when using JSON mode, you **must** also instruct the model to produce JSON yourself via a system or user message. Without this, the model may generate an unending stream of whitespace until the generation reaches the token limit, resulting in a long-running and seemingly "stuck" request. Also note that the message content may be partially cut off if `finish_reason="length"`, which indicates the generation exceeded `max_tokens` or the conversation exceeded the max context length.
     */
    public function getResponseFormat(): CreateChatCompletionRequestResponseFormat
    {
        return $this->responseFormat;
    }

    /**
     * An object specifying the format that the model must output. Compatible with `gpt-4-1106-preview` and `gpt-3.5-turbo-1106`.

    Setting to `{ "type": "json_object" }` enables JSON mode, which guarantees the message the model generates is valid JSON.

     **Important:** when using JSON mode, you **must** also instruct the model to produce JSON yourself via a system or user message. Without this, the model may generate an unending stream of whitespace until the generation reaches the token limit, resulting in a long-running and seemingly "stuck" request. Also note that the message content may be partially cut off if `finish_reason="length"`, which indicates the generation exceeded `max_tokens` or the conversation exceeded the max context length.
     */
    public function setResponseFormat(CreateChatCompletionRequestResponseFormat $responseFormat): self
    {
        $this->initialized['responseFormat'] = true;
        $this->responseFormat = $responseFormat;
        return $this;
    }

    /**
     * This feature is in Beta.
    Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     */
    public function getSeed(): ?int
    {
        return $this->seed;
    }

    /**
     * This feature is in Beta.
    Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     */
    public function setSeed(?int $seed): self
    {
        $this->initialized['seed'] = true;
        $this->seed = $seed;
        return $this;
    }

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     *
     * @return string|string[]
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     *
     * @param string|string[] $stop
     */
    public function setStop($stop): self
    {
        $this->initialized['stop'] = true;
        $this->stop = $stop;
        return $this;
    }

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     */
    public function getStream(): ?bool
    {
        return $this->stream;
    }

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     */
    public function setStream(?bool $stream): self
    {
        $this->initialized['stream'] = true;
        $this->stream = $stream;
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
     * A list of tools the model may call. Currently, only functions are supported as a tool. Use this to provide a list of functions the model may generate JSON inputs for.
     *
     * @return ChatCompletionTool[]
     */
    public function getTools(): array
    {
        return $this->tools;
    }

    /**
     * A list of tools the model may call. Currently, only functions are supported as a tool. Use this to provide a list of functions the model may generate JSON inputs for.
     *
     * @param ChatCompletionTool[] $tools
     */
    public function setTools(array $tools): self
    {
        $this->initialized['tools'] = true;
        $this->tools = $tools;
        return $this;
    }

    /**
     * Controls which (if any) function is called by the model.
     *
     * @return string|ChatCompletionNamedToolChoice
     */
    public function getToolChoice()
    {
        return $this->toolChoice;
    }

    /**
     * Controls which (if any) function is called by the model.
     *
     * @param string|ChatCompletionNamedToolChoice $toolChoice
     */
    public function setToolChoice($toolChoice): self
    {
        $this->initialized['toolChoice'] = true;
        $this->toolChoice = $toolChoice;
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

    /**
     * Deprecated in favor of `tool_choice`.

     *
     * @deprecated
     *
     * @return string|ChatCompletionFunctionCallOption
     */
    public function getFunctionCall()
    {
        return $this->functionCall;
    }

    /**
     * Deprecated in favor of `tool_choice`.

     *
     * @param string|ChatCompletionFunctionCallOption $functionCall
     *
     * @deprecated
     */
    public function setFunctionCall($functionCall): self
    {
        $this->initialized['functionCall'] = true;
        $this->functionCall = $functionCall;
        return $this;
    }

    /**
     * Deprecated in favor of `tools`.

     *
     * @deprecated
     *
     * @return ChatCompletionFunctions[]
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * Deprecated in favor of `tools`.

     *
     * @param ChatCompletionFunctions[] $functions
     *
     * @deprecated
     */
    public function setFunctions(array $functions): self
    {
        $this->initialized['functions'] = true;
        $this->functions = $functions;
        return $this;
    }
}
