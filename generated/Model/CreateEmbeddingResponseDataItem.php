<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEmbeddingResponseDataItem extends \ArrayObject
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
    protected $index;
    /**
     * 
     *
     * @var string
     */
    protected $object;
    /**
     * 
     *
     * @var float[]
     */
    protected $embedding;
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
     * @return float[]
     */
    public function getEmbedding() : array
    {
        return $this->embedding;
    }
    /**
     * 
     *
     * @param float[] $embedding
     *
     * @return self
     */
    public function setEmbedding(array $embedding) : self
    {
        $this->initialized['embedding'] = true;
        $this->embedding = $embedding;
        return $this;
    }
}