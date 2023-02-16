<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateClassificationResponse extends \ArrayObject
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
     * @var string
     */
    protected $searchModel;
    /**
     * 
     *
     * @var string
     */
    protected $completion;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var CreateClassificationResponseSelectedExamplesItem[]
     */
    protected $selectedExamples;
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
     * @return string
     */
    public function getSearchModel() : string
    {
        return $this->searchModel;
    }
    /**
     * 
     *
     * @param string $searchModel
     *
     * @return self
     */
    public function setSearchModel(string $searchModel) : self
    {
        $this->initialized['searchModel'] = true;
        $this->searchModel = $searchModel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompletion() : string
    {
        return $this->completion;
    }
    /**
     * 
     *
     * @param string $completion
     *
     * @return self
     */
    public function setCompletion(string $completion) : self
    {
        $this->initialized['completion'] = true;
        $this->completion = $completion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return CreateClassificationResponseSelectedExamplesItem[]
     */
    public function getSelectedExamples() : array
    {
        return $this->selectedExamples;
    }
    /**
     * 
     *
     * @param CreateClassificationResponseSelectedExamplesItem[] $selectedExamples
     *
     * @return self
     */
    public function setSelectedExamples(array $selectedExamples) : self
    {
        $this->initialized['selectedExamples'] = true;
        $this->selectedExamples = $selectedExamples;
        return $this;
    }
}