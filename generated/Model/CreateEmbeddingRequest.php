<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEmbeddingRequest
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
     * Input text to get embeddings for, encoded as a string or array of tokens. To get embeddings for multiple inputs in a single request, pass an array of strings or array of token arrays. Each input must not exceed 8192 tokens in length.
     *
     * @var mixed
     */
    protected $input;
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
     * Input text to get embeddings for, encoded as a string or array of tokens. To get embeddings for multiple inputs in a single request, pass an array of strings or array of token arrays. Each input must not exceed 8192 tokens in length.
     *
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }
    /**
     * Input text to get embeddings for, encoded as a string or array of tokens. To get embeddings for multiple inputs in a single request, pass an array of strings or array of token arrays. Each input must not exceed 8192 tokens in length.
     *
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input) : self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
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