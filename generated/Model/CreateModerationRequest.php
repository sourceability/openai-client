<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateModerationRequest extends \ArrayObject
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
     * The input text to classify
     *
     * @var mixed
     */
    protected $input;
    /**
    * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.
    
    The default is `text-moderation-latest` which will be automatically upgraded over time. This ensures you are always using our most accurate model. If you use `text-moderation-stable`, we will provide advanced notice before updating the model. Accuracy of `text-moderation-stable` may be slightly lower than for `text-moderation-latest`.
    
    *
    * @var string
    */
    protected $model = 'text-moderation-latest';
    /**
     * The input text to classify
     *
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }
    /**
     * The input text to classify
     *
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input) : self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
    * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.
    
    The default is `text-moderation-latest` which will be automatically upgraded over time. This ensures you are always using our most accurate model. If you use `text-moderation-stable`, we will provide advanced notice before updating the model. Accuracy of `text-moderation-stable` may be slightly lower than for `text-moderation-latest`.
    
    *
    * @return string
    */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
    * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.
    
    The default is `text-moderation-latest` which will be automatically upgraded over time. This ensures you are always using our most accurate model. If you use `text-moderation-stable`, we will provide advanced notice before updating the model. Accuracy of `text-moderation-stable` may be slightly lower than for `text-moderation-latest`.
    
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
}