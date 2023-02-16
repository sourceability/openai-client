<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateClassificationResponseSelectedExamplesItem extends \ArrayObject
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
    protected $document;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @return int
     */
    public function getDocument() : int
    {
        return $this->document;
    }
    /**
     * 
     *
     * @param int $document
     *
     * @return self
     */
    public function setDocument(int $document) : self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
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
}