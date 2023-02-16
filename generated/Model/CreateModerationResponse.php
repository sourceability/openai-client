<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateModerationResponse extends \ArrayObject
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
    protected $model;
    /**
     * 
     *
     * @var CreateModerationResponseResultsItem[]
     */
    protected $results;
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
     * @return CreateModerationResponseResultsItem[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param CreateModerationResponseResultsItem[] $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}