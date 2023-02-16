<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class FineTune extends \ArrayObject
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
    protected $createdAt;
    /**
     * 
     *
     * @var int
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $model;
    /**
     * 
     *
     * @var string|null
     */
    protected $fineTunedModel;
    /**
     * 
     *
     * @var string
     */
    protected $organizationId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $hyperparams;
    /**
     * 
     *
     * @var OpenAIFile[]
     */
    protected $trainingFiles;
    /**
     * 
     *
     * @var OpenAIFile[]
     */
    protected $validationFiles;
    /**
     * 
     *
     * @var OpenAIFile[]
     */
    protected $resultFiles;
    /**
     * 
     *
     * @var FineTuneEvent[]
     */
    protected $events;
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
     * @return int
     */
    public function getUpdatedAt() : int
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param int $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(int $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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
     * @return string|null
     */
    public function getFineTunedModel() : ?string
    {
        return $this->fineTunedModel;
    }
    /**
     * 
     *
     * @param string|null $fineTunedModel
     *
     * @return self
     */
    public function setFineTunedModel(?string $fineTunedModel) : self
    {
        $this->initialized['fineTunedModel'] = true;
        $this->fineTunedModel = $fineTunedModel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationId() : string
    {
        return $this->organizationId;
    }
    /**
     * 
     *
     * @param string $organizationId
     *
     * @return self
     */
    public function setOrganizationId(string $organizationId) : self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
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
     * @return mixed[]
     */
    public function getHyperparams() : iterable
    {
        return $this->hyperparams;
    }
    /**
     * 
     *
     * @param mixed[] $hyperparams
     *
     * @return self
     */
    public function setHyperparams(iterable $hyperparams) : self
    {
        $this->initialized['hyperparams'] = true;
        $this->hyperparams = $hyperparams;
        return $this;
    }
    /**
     * 
     *
     * @return OpenAIFile[]
     */
    public function getTrainingFiles() : array
    {
        return $this->trainingFiles;
    }
    /**
     * 
     *
     * @param OpenAIFile[] $trainingFiles
     *
     * @return self
     */
    public function setTrainingFiles(array $trainingFiles) : self
    {
        $this->initialized['trainingFiles'] = true;
        $this->trainingFiles = $trainingFiles;
        return $this;
    }
    /**
     * 
     *
     * @return OpenAIFile[]
     */
    public function getValidationFiles() : array
    {
        return $this->validationFiles;
    }
    /**
     * 
     *
     * @param OpenAIFile[] $validationFiles
     *
     * @return self
     */
    public function setValidationFiles(array $validationFiles) : self
    {
        $this->initialized['validationFiles'] = true;
        $this->validationFiles = $validationFiles;
        return $this;
    }
    /**
     * 
     *
     * @return OpenAIFile[]
     */
    public function getResultFiles() : array
    {
        return $this->resultFiles;
    }
    /**
     * 
     *
     * @param OpenAIFile[] $resultFiles
     *
     * @return self
     */
    public function setResultFiles(array $resultFiles) : self
    {
        $this->initialized['resultFiles'] = true;
        $this->resultFiles = $resultFiles;
        return $this;
    }
    /**
     * 
     *
     * @return FineTuneEvent[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param FineTuneEvent[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
}