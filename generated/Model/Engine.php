<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class Engine extends \ArrayObject
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
     * @var int|null
     */
    protected $created;
    /**
     * 
     *
     * @var bool
     */
    protected $ready;
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
     * @return int|null
     */
    public function getCreated() : ?int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int|null $created
     *
     * @return self
     */
    public function setCreated(?int $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReady() : bool
    {
        return $this->ready;
    }
    /**
     * 
     *
     * @param bool $ready
     *
     * @return self
     */
    public function setReady(bool $ready) : self
    {
        $this->initialized['ready'] = true;
        $this->ready = $ready;
        return $this;
    }
}