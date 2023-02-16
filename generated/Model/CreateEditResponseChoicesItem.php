<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEditResponseChoicesItem extends \ArrayObject
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
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var int
     */
    protected $index;
    /**
     * 
     *
     * @var CreateEditResponseChoicesItemLogprobs|null
     */
    protected $logprobs;
    /**
     * 
     *
     * @var string
     */
    protected $finishReason;
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIndex() : int
    {
        return $this->index;
    }
    /**
     * 
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index) : self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * 
     *
     * @return CreateEditResponseChoicesItemLogprobs|null
     */
    public function getLogprobs() : ?CreateEditResponseChoicesItemLogprobs
    {
        return $this->logprobs;
    }
    /**
     * 
     *
     * @param CreateEditResponseChoicesItemLogprobs|null $logprobs
     *
     * @return self
     */
    public function setLogprobs(?CreateEditResponseChoicesItemLogprobs $logprobs) : self
    {
        $this->initialized['logprobs'] = true;
        $this->logprobs = $logprobs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFinishReason() : string
    {
        return $this->finishReason;
    }
    /**
     * 
     *
     * @param string $finishReason
     *
     * @return self
     */
    public function setFinishReason(string $finishReason) : self
    {
        $this->initialized['finishReason'] = true;
        $this->finishReason = $finishReason;
        return $this;
    }
}