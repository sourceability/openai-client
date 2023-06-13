<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     */
    protected ?string $model = null;

    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_format_inputs_to_ChatGPT_models.ipynb).
     *
     * @var ChatCompletionRequestMessage[]|null
     */
    protected ?array $messages = null;

    /**
     * A list of functions the model may generate JSON inputs for.
     *
     * @var ChatCompletionFunctions[]|null
     */
    protected ?array $functions = null;

    /**
     * Controls how the model responds to function calls. "none" means the model does not call a function, and responds to the end-user. "auto" means the model can pick between an end-user or calling a function.  Specifying a particular function via `{"name":\ "my_function"}` forces the model to call that function. "none" is the default when no functions are present. "auto" is the default if functions are present.
     *
     * @var mixed
     */
    protected $functionCall = null;

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
     * How many chat completion choices to generate for each input message.
     */
    protected ?int $n = 1;

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_stream_completions.ipynb).
     */
    protected ?bool $stream = false;

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     *
     * @var mixed
     */
    protected $stop = null;

    /**
     * The maximum number of [tokens](/tokenizer) to generate in the chat completion.
    The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_count_tokens_with_tiktoken.ipynb) for counting tokens.
     */
    protected ?int $maxTokens = null;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.

     *
     * @var float|null
     */
    protected $presencePenalty = 0;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.

     *
     * @var float|null
     */
    protected $frequencyPenalty = 0;

    /**
     * Modify the likelihood of specified tokens appearing in the completion.

     *
     * @var mixed[]|null
     */
    protected ?iterable $logitBias = null;

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected ?string $user = null;

    /**
     * @param string $model ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     * @param ChatCompletionRequestMessage[] $messages A list of messages comprising the conversation so far. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_format_inputs_to_ChatGPT_models.ipynb).
     * @param ChatCompletionFunctions[] $functions A list of functions the model may generate JSON inputs for.
     * @param mixed $functionCall Controls how the model responds to function calls. "none" means the model does not call a function, and responds to the end-user. "auto" means the model can pick between an end-user or calling a function.  Specifying a particular function via `{"name":\ "my_function"}` forces the model to call that function. "none" is the default when no functions are present. "auto" is the default if functions are present.
     * @param float|null $temperature What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     *                                We generally recommend altering this or `top_p` but not both.
     * @param float|null $topP An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
     *                         We generally recommend altering this or `temperature` but not both.
     * @param int|null $n How many chat completion choices to generate for each input message.
     * @param bool|null $stream If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_stream_completions.ipynb).
     * @param mixed $stop Up to 4 sequences where the API will stop generating further tokens.
     * @param int|null $maxTokens The maximum number of [tokens](/tokenizer) to generate in the chat completion.
     *                            The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_count_tokens_with_tiktoken.ipynb) for counting tokens.
     * @param float|null $presencePenalty Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
     *                                    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
     * @param float|null $frequencyPenalty Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
     *                                     [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
     * @param mixed[]|null $logitBias Modify the likelihood of specified tokens appearing in the completion.
     *                                Accepts a json object that maps tokens (specified by their token ID in the tokenizer) to an associated bias value from -100 to 100. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function __construct($model = null, $messages = null, $functions = null, mixed $functionCall = null, $temperature = 1, $topP = 1, $n = 1, $stream = false, mixed $stop = null, $maxTokens = null, $presencePenalty = 0, $frequencyPenalty = 0, $logitBias = null, $user = null)
    {
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($messages !== null) {
            $this->setMessages($messages);
        }
        if ($functions !== null) {
            $this->setFunctions($functions);
        }
        if ($functionCall !== null) {
            $this->setFunctionCall($functionCall);
        }
        if ($temperature !== null) {
            $this->setTemperature($temperature);
        }
        if ($topP !== null) {
            $this->setTopP($topP);
        }
        if ($n !== null) {
            $this->setN($n);
        }
        if ($stream !== null) {
            $this->setStream($stream);
        }
        if ($stop !== null) {
            $this->setStop($stop);
        }
        if ($maxTokens !== null) {
            $this->setMaxTokens($maxTokens);
        }
        if ($presencePenalty !== null) {
            $this->setPresencePenalty($presencePenalty);
        }
        if ($frequencyPenalty !== null) {
            $this->setFrequencyPenalty($frequencyPenalty);
        }
        if ($logitBias !== null) {
            $this->setLogitBias($logitBias);
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
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_format_inputs_to_ChatGPT_models.ipynb).
     *
     * @return ChatCompletionRequestMessage[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_format_inputs_to_ChatGPT_models.ipynb).
     *
     * @param ChatCompletionRequestMessage[] $messages
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }

    /**
     * A list of functions the model may generate JSON inputs for.
     *
     * @return ChatCompletionFunctions[]
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * A list of functions the model may generate JSON inputs for.
     *
     * @param ChatCompletionFunctions[] $functions
     */
    public function setFunctions(array $functions): self
    {
        $this->initialized['functions'] = true;
        $this->functions = $functions;
        return $this;
    }

    /**
     * Controls how the model responds to function calls. "none" means the model does not call a function, and responds to the end-user. "auto" means the model can pick between an end-user or calling a function.  Specifying a particular function via `{"name":\ "my_function"}` forces the model to call that function. "none" is the default when no functions are present. "auto" is the default if functions are present.
     *
     * @return mixed
     */
    public function getFunctionCall()
    {
        return $this->functionCall;
    }

    /**
     * Controls how the model responds to function calls. "none" means the model does not call a function, and responds to the end-user. "auto" means the model can pick between an end-user or calling a function.  Specifying a particular function via `{"name":\ "my_function"}` forces the model to call that function. "none" is the default when no functions are present. "auto" is the default if functions are present.
     */
    public function setFunctionCall(mixed $functionCall): self
    {
        $this->initialized['functionCall'] = true;
        $this->functionCall = $functionCall;
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
     * How many chat completion choices to generate for each input message.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * How many chat completion choices to generate for each input message.
     */
    public function setN(?int $n): self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_stream_completions.ipynb).
     */
    public function getStream(): ?bool
    {
        return $this->stream;
    }

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_stream_completions.ipynb).
     */
    public function setStream(?bool $stream): self
    {
        $this->initialized['stream'] = true;
        $this->stream = $stream;
        return $this;
    }

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     *
     * @return mixed
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     */
    public function setStop(mixed $stop): self
    {
        $this->initialized['stop'] = true;
        $this->stop = $stop;
        return $this;
    }

    /**
     * The maximum number of [tokens](/tokenizer) to generate in the chat completion.
    The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_count_tokens_with_tiktoken.ipynb) for counting tokens.
     */
    public function getMaxTokens(): ?int
    {
        return $this->maxTokens;
    }

    /**
     * The maximum number of [tokens](/tokenizer) to generate in the chat completion.
    The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://github.com/openai/openai-cookbook/blob/main/examples/How_to_count_tokens_with_tiktoken.ipynb) for counting tokens.
     */
    public function setMaxTokens(?int $maxTokens): self
    {
        $this->initialized['maxTokens'] = true;
        $this->maxTokens = $maxTokens;
        return $this;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
     */
    public function getPresencePenalty(): ?float
    {
        return $this->presencePenalty;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
     */
    public function setPresencePenalty(?float $presencePenalty): self
    {
        $this->initialized['presencePenalty'] = true;
        $this->presencePenalty = $presencePenalty;
        return $this;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
     */
    public function getFrequencyPenalty(): ?float
    {
        return $this->frequencyPenalty;
    }

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
    [See more information about frequency and presence penalties.](/docs/api-reference/parameter-details)
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
