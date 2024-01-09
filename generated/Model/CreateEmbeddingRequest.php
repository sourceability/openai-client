<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEmbeddingRequest
{
    protected array $initialized = [];

    /**
     * Input text to embed, encoded as a string or array of tokens. To embed multiple inputs in a single request, pass an array of strings or array of token arrays. The input must not exceed the max input tokens for the model (8192 tokens for `text-embedding-ada-002`), cannot be an empty string, and any array must be 2048 dimensions or less. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     *
     * @var string|string[]|int[]|int[][]
     */
    protected $input = null;

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @var string|string
     */
    protected $model = null;

    /**
     * The format to return the embeddings in. Can be either `float` or [`base64`](https://pypi.org/project/pybase64/).
     */
    protected string $encodingFormat = 'float';

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected ?string $user = null;

    /**
     * @param string|string[]|int[]|int[][] $input Input text to embed, encoded as a string or array of tokens. To embed multiple inputs in a single request, pass an array of strings or array of token arrays. The input must not exceed the max input tokens for the model (8192 tokens for `text-embedding-ada-002`), cannot be an empty string, and any array must be 2048 dimensions or less. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     * @param string|string $model ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     * @param string $encodingFormat The format to return the embeddings in. Can be either `float` or [`base64`](https://pypi.org/project/pybase64/).
     */
    public function __construct($input = null, $model = null, $user = null, $encodingFormat = 'float')
    {
        if ($input !== null) {
            $this->setInput($input);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($user !== null) {
            $this->setUser($user);
        }
        if ($encodingFormat !== null) {
            $this->setEncodingFormat($encodingFormat);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Input text to embed, encoded as a string or array of tokens. To embed multiple inputs in a single request, pass an array of strings or array of token arrays. The input must not exceed the max input tokens for the model (8192 tokens for `text-embedding-ada-002`), cannot be an empty string, and any array must be 2048 dimensions or less. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     *
     * @return string|string[]|int[]|int[][]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Input text to embed, encoded as a string or array of tokens. To embed multiple inputs in a single request, pass an array of strings or array of token arrays. The input must not exceed the max input tokens for the model (8192 tokens for `text-embedding-ada-002`), cannot be an empty string, and any array must be 2048 dimensions or less. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     *
     * @param string|string[]|int[]|int[][] $input
     */
    public function setInput($input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @return string|string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
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
     * The format to return the embeddings in. Can be either `float` or [`base64`](https://pypi.org/project/pybase64/).
     */
    public function getEncodingFormat(): string
    {
        return $this->encodingFormat;
    }

    /**
     * The format to return the embeddings in. Can be either `float` or [`base64`](https://pypi.org/project/pybase64/).
     */
    public function setEncodingFormat(string $encodingFormat): self
    {
        $this->initialized['encodingFormat'] = true;
        $this->encodingFormat = $encodingFormat;
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
