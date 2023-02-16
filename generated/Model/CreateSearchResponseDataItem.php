<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateSearchResponseDataItem extends \ArrayObject
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
    protected $object;
    /**
     * 
     *
     * @var int
     */
    protected $document;
    /**
     * 
     *
     * @var float
     */
    protected $score;
    /**
     * 
     *
     * @return string
     */
    public function getObject() : string
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(string $object) : self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDocument() : int
    {
        return $this->document;
    }
    /**
     * 
     *
     * @param int $document
     *
     * @return self
     */
    public function setDocument(int $document) : self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getScore() : float
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
}