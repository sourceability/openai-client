<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEmbeddingResponseUsage extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $promptTokens;
    /**
     * 
     *
     * @var int
     */
    protected $totalTokens;
    /**
     * 
     *
     * @return int
     */
    public function getPromptTokens() : int
    {
        return $this->promptTokens;
    }
    /**
     * 
     *
     * @param int $promptTokens
     *
     * @return self
     */
    public function setPromptTokens(int $promptTokens) : self
    {
        $this->initialized['promptTokens'] = true;
        $this->promptTokens = $promptTokens;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalTokens() : int
    {
        return $this->totalTokens;
    }
    /**
     * 
     *
     * @param int $totalTokens
     *
     * @return self
     */
    public function setTotalTokens(int $totalTokens) : self
    {
        $this->initialized['totalTokens'] = true;
        $this->totalTokens = $totalTokens;
        return $this;
    }
}