<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateCompletionResponse extends \ArrayObject
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
    protected $id;
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
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $model;
    /**
     * 
     *
     * @var CreateCompletionResponseChoicesItem[]
     */
    protected $choices;
    /**
     * 
     *
     * @var CreateCompletionResponseUsage
     */
    protected $usage;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     * @return int
     */
    public function getCreated() : int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
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
     * @return CreateCompletionResponseChoicesItem[]
     */
    public function getChoices() : array
    {
        return $this->choices;
    }
    /**
     * 
     *
     * @param CreateCompletionResponseChoicesItem[] $choices
     *
     * @return self
     */
    public function setChoices(array $choices) : self
    {
        $this->initialized['choices'] = true;
        $this->choices = $choices;
        return $this;
    }
    /**
     * 
     *
     * @return CreateCompletionResponseUsage
     */
    public function getUsage() : CreateCompletionResponseUsage
    {
        return $this->usage;
    }
    /**
     * 
     *
     * @param CreateCompletionResponseUsage $usage
     *
     * @return self
     */
    public function setUsage(CreateCompletionResponseUsage $usage) : self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}