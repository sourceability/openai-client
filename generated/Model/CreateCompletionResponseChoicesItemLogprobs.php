<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateCompletionResponseChoicesItemLogprobs extends \ArrayObject
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
     * @var string[]
     */
    protected $tokens;
    /**
     * 
     *
     * @var float[]
     */
    protected $tokenLogprobs;
    /**
     * 
     *
     * @var mixed[][]
     */
    protected $topLogprobs;
    /**
     * 
     *
     * @var int[]
     */
    protected $textOffset;
    /**
     * 
     *
     * @return string[]
     */
    public function getTokens() : array
    {
        return $this->tokens;
    }
    /**
     * 
     *
     * @param string[] $tokens
     *
     * @return self
     */
    public function setTokens(array $tokens) : self
    {
        $this->initialized['tokens'] = true;
        $this->tokens = $tokens;
        return $this;
    }
    /**
     * 
     *
     * @return float[]
     */
    public function getTokenLogprobs() : array
    {
        return $this->tokenLogprobs;
    }
    /**
     * 
     *
     * @param float[] $tokenLogprobs
     *
     * @return self
     */
    public function setTokenLogprobs(array $tokenLogprobs) : self
    {
        $this->initialized['tokenLogprobs'] = true;
        $this->tokenLogprobs = $tokenLogprobs;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[][]
     */
    public function getTopLogprobs() : array
    {
        return $this->topLogprobs;
    }
    /**
     * 
     *
     * @param mixed[][] $topLogprobs
     *
     * @return self
     */
    public function setTopLogprobs(array $topLogprobs) : self
    {
        $this->initialized['topLogprobs'] = true;
        $this->topLogprobs = $topLogprobs;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getTextOffset() : array
    {
        return $this->textOffset;
    }
    /**
     * 
     *
     * @param int[] $textOffset
     *
     * @return self
     */
    public function setTextOffset(array $textOffset) : self
    {
        $this->initialized['textOffset'] = true;
        $this->textOffset = $textOffset;
        return $this;
    }
}