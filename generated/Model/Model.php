<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class Model extends \ArrayObject
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
    protected $ownedBy;
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
    public function getOwnedBy() : string
    {
        return $this->ownedBy;
    }
    /**
     * 
     *
     * @param string $ownedBy
     *
     * @return self
     */
    public function setOwnedBy(string $ownedBy) : self
    {
        $this->initialized['ownedBy'] = true;
        $this->ownedBy = $ownedBy;
        return $this;
    }
}