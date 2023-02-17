<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItemCategoryScores extends ArrayObject
{
    protected array $initialized = [];

    protected ?float $hate = null;

    protected ?float $hateThreatening = null;

    protected ?float $selfHarm = null;

    protected ?float $sexual = null;

    protected ?float $sexualMinors = null;

    protected ?float $violence = null;

    protected ?float $violenceGraphic = null;

    /**
     * @param float $hate
     * @param float $hateThreatening
     * @param float $selfHarm
     * @param float $sexual
     * @param float $sexualMinors
     * @param float $violence
     * @param float $violenceGraphic
     */
    public function __construct($hate = null, $hateThreatening = null, $selfHarm = null, $sexual = null, $sexualMinors = null, $violence = null, $violenceGraphic = null)
    {
        if ($hate !== null) {
            $this->setHate($hate);
        }
        if ($hateThreatening !== null) {
            $this->setHateThreatening($hateThreatening);
        }
        if ($selfHarm !== null) {
            $this->setSelfHarm($selfHarm);
        }
        if ($sexual !== null) {
            $this->setSexual($sexual);
        }
        if ($sexualMinors !== null) {
            $this->setSexualMinors($sexualMinors);
        }
        if ($violence !== null) {
            $this->setViolence($violence);
        }
        if ($violenceGraphic !== null) {
            $this->setViolenceGraphic($violenceGraphic);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getHate(): float
    {
        return $this->hate;
    }

    public function setHate(float $hate): self
    {
        $this->initialized['hate'] = true;
        $this->hate = $hate;
        return $this;
    }

    public function getHateThreatening(): float
    {
        return $this->hateThreatening;
    }

    public function setHateThreatening(float $hateThreatening): self
    {
        $this->initialized['hateThreatening'] = true;
        $this->hateThreatening = $hateThreatening;
        return $this;
    }

    public function getSelfHarm(): float
    {
        return $this->selfHarm;
    }

    public function setSelfHarm(float $selfHarm): self
    {
        $this->initialized['selfHarm'] = true;
        $this->selfHarm = $selfHarm;
        return $this;
    }

    public function getSexual(): float
    {
        return $this->sexual;
    }

    public function setSexual(float $sexual): self
    {
        $this->initialized['sexual'] = true;
        $this->sexual = $sexual;
        return $this;
    }

    public function getSexualMinors(): float
    {
        return $this->sexualMinors;
    }

    public function setSexualMinors(float $sexualMinors): self
    {
        $this->initialized['sexualMinors'] = true;
        $this->sexualMinors = $sexualMinors;
        return $this;
    }

    public function getViolence(): float
    {
        return $this->violence;
    }

    public function setViolence(float $violence): self
    {
        $this->initialized['violence'] = true;
        $this->violence = $violence;
        return $this;
    }

    public function getViolenceGraphic(): float
    {
        return $this->violenceGraphic;
    }

    public function setViolenceGraphic(float $violenceGraphic): self
    {
        $this->initialized['violenceGraphic'] = true;
        $this->violenceGraphic = $violenceGraphic;
        return $this;
    }
}
