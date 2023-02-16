<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class OpenAIFile extends \ArrayObject
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
    protected $bytes;
    /**
     * 
     *
     * @var int
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $filename;
    /**
     * 
     *
     * @var string
     */
    protected $purpose;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $statusDetails;
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
    public function getBytes() : int
    {
        return $this->bytes;
    }
    /**
     * 
     *
     * @param int $bytes
     *
     * @return self
     */
    public function setBytes(int $bytes) : self
    {
        $this->initialized['bytes'] = true;
        $this->bytes = $bytes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedAt() : int
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param int $createdAt
     *
     * @return self
     */
    public function setCreatedAt(int $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFilename() : string
    {
        return $this->filename;
    }
    /**
     * 
     *
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename) : self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurpose() : string
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(string $purpose) : self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getStatusDetails() : ?iterable
    {
        return $this->statusDetails;
    }
    /**
     * 
     *
     * @param mixed[]|null $statusDetails
     *
     * @return self
     */
    public function setStatusDetails(?iterable $statusDetails) : self
    {
        $this->initialized['statusDetails'] = true;
        $this->statusDetails = $statusDetails;
        return $this;
    }
}