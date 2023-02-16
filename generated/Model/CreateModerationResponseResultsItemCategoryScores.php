<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateModerationResponseResultsItemCategoryScores extends \ArrayObject
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
     * @var float
     */
    protected $hate;
    /**
     * 
     *
     * @var float
     */
    protected $hateThreatening;
    /**
     * 
     *
     * @var float
     */
    protected $selfHarm;
    /**
     * 
     *
     * @var float
     */
    protected $sexual;
    /**
     * 
     *
     * @var float
     */
    protected $sexualMinors;
    /**
     * 
     *
     * @var float
     */
    protected $violence;
    /**
     * 
     *
     * @var float
     */
    protected $violenceGraphic;
    /**
     * 
     *
     * @return float
     */
    public function getHate() : float
    {
        return $this->hate;
    }
    /**
     * 
     *
     * @param float $hate
     *
     * @return self
     */
    public function setHate(float $hate) : self
    {
        $this->initialized['hate'] = true;
        $this->hate = $hate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHateThreatening() : float
    {
        return $this->hateThreatening;
    }
    /**
     * 
     *
     * @param float $hateThreatening
     *
     * @return self
     */
    public function setHateThreatening(float $hateThreatening) : self
    {
        $this->initialized['hateThreatening'] = true;
        $this->hateThreatening = $hateThreatening;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSelfHarm() : float
    {
        return $this->selfHarm;
    }
    /**
     * 
     *
     * @param float $selfHarm
     *
     * @return self
     */
    public function setSelfHarm(float $selfHarm) : self
    {
        $this->initialized['selfHarm'] = true;
        $this->selfHarm = $selfHarm;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSexual() : float
    {
        return $this->sexual;
    }
    /**
     * 
     *
     * @param float $sexual
     *
     * @return self
     */
    public function setSexual(float $sexual) : self
    {
        $this->initialized['sexual'] = true;
        $this->sexual = $sexual;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSexualMinors() : float
    {
        return $this->sexualMinors;
    }
    /**
     * 
     *
     * @param float $sexualMinors
     *
     * @return self
     */
    public function setSexualMinors(float $sexualMinors) : self
    {
        $this->initialized['sexualMinors'] = true;
        $this->sexualMinors = $sexualMinors;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getViolence() : float
    {
        return $this->violence;
    }
    /**
     * 
     *
     * @param float $violence
     *
     * @return self
     */
    public function setViolence(float $violence) : self
    {
        $this->initialized['violence'] = true;
        $this->violence = $violence;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getViolenceGraphic() : float
    {
        return $this->violenceGraphic;
    }
    /**
     * 
     *
     * @param float $violenceGraphic
     *
     * @return self
     */
    public function setViolenceGraphic(float $violenceGraphic) : self
    {
        $this->initialized['violenceGraphic'] = true;
        $this->violenceGraphic = $violenceGraphic;
        return $this;
    }
}