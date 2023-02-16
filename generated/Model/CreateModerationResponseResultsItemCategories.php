<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateModerationResponseResultsItemCategories extends \ArrayObject
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
     * @var bool
     */
    protected $hate;
    /**
     * 
     *
     * @var bool
     */
    protected $hateThreatening;
    /**
     * 
     *
     * @var bool
     */
    protected $selfHarm;
    /**
     * 
     *
     * @var bool
     */
    protected $sexual;
    /**
     * 
     *
     * @var bool
     */
    protected $sexualMinors;
    /**
     * 
     *
     * @var bool
     */
    protected $violence;
    /**
     * 
     *
     * @var bool
     */
    protected $violenceGraphic;
    /**
     * 
     *
     * @return bool
     */
    public function getHate() : bool
    {
        return $this->hate;
    }
    /**
     * 
     *
     * @param bool $hate
     *
     * @return self
     */
    public function setHate(bool $hate) : self
    {
        $this->initialized['hate'] = true;
        $this->hate = $hate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHateThreatening() : bool
    {
        return $this->hateThreatening;
    }
    /**
     * 
     *
     * @param bool $hateThreatening
     *
     * @return self
     */
    public function setHateThreatening(bool $hateThreatening) : self
    {
        $this->initialized['hateThreatening'] = true;
        $this->hateThreatening = $hateThreatening;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSelfHarm() : bool
    {
        return $this->selfHarm;
    }
    /**
     * 
     *
     * @param bool $selfHarm
     *
     * @return self
     */
    public function setSelfHarm(bool $selfHarm) : self
    {
        $this->initialized['selfHarm'] = true;
        $this->selfHarm = $selfHarm;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSexual() : bool
    {
        return $this->sexual;
    }
    /**
     * 
     *
     * @param bool $sexual
     *
     * @return self
     */
    public function setSexual(bool $sexual) : self
    {
        $this->initialized['sexual'] = true;
        $this->sexual = $sexual;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSexualMinors() : bool
    {
        return $this->sexualMinors;
    }
    /**
     * 
     *
     * @param bool $sexualMinors
     *
     * @return self
     */
    public function setSexualMinors(bool $sexualMinors) : self
    {
        $this->initialized['sexualMinors'] = true;
        $this->sexualMinors = $sexualMinors;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getViolence() : bool
    {
        return $this->violence;
    }
    /**
     * 
     *
     * @param bool $violence
     *
     * @return self
     */
    public function setViolence(bool $violence) : self
    {
        $this->initialized['violence'] = true;
        $this->violence = $violence;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getViolenceGraphic() : bool
    {
        return $this->violenceGraphic;
    }
    /**
     * 
     *
     * @param bool $violenceGraphic
     *
     * @return self
     */
    public function setViolenceGraphic(bool $violenceGraphic) : self
    {
        $this->initialized['violenceGraphic'] = true;
        $this->violenceGraphic = $violenceGraphic;
        return $this;
    }
}