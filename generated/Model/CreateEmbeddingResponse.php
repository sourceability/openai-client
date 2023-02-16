<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEmbeddingResponse extends \ArrayObject
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
     * @var string
     */
    protected $model;
    /**
     * 
     *
     * @var CreateEmbeddingResponseDataItem[]
     */
    protected $data;
    /**
     * 
     *
     * @var CreateEmbeddingResponseUsage
     */
    protected $usage;
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
     * @return string
     */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
     * 
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
     * 
     *
     * @return CreateEmbeddingResponseDataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CreateEmbeddingResponseDataItem[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return CreateEmbeddingResponseUsage
     */
    public function getUsage() : CreateEmbeddingResponseUsage
    {
        return $this->usage;
    }
    /**
     * 
     *
     * @param CreateEmbeddingResponseUsage $usage
     *
     * @return self
     */
    public function setUsage(CreateEmbeddingResponseUsage $usage) : self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}