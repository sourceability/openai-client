<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItemCategories extends ArrayObject
{
    protected array $initialized = [];

    protected ?bool $hate = null;

    protected ?bool $hateThreatening = null;

    protected ?bool $selfHarm = null;

    protected ?bool $sexual = null;

    protected ?bool $sexualMinors = null;

    protected ?bool $violence = null;

    protected ?bool $violenceGraphic = null;

    public function __construct(?bool $hate = null, ?bool $hateThreatening = null, ?bool $selfHarm = null, ?bool $sexual = null, ?bool $sexualMinors = null, ?bool $violence = null, ?bool $violenceGraphic = null)
    {
        $this->hate = $hate;
        $this->hateThreatening = $hateThreatening;
        $this->selfHarm = $selfHarm;
        $this->sexual = $sexual;
        $this->sexualMinors = $sexualMinors;
        $this->violence = $violence;
        $this->violenceGraphic = $violenceGraphic;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getHate(): bool
    {
        return $this->hate;
    }

    public function setHate(bool $hate): self
    {
        $this->initialized['hate'] = true;
        $this->hate = $hate;
        return $this;
    }

    public function getHateThreatening(): bool
    {
        return $this->hateThreatening;
    }

    public function setHateThreatening(bool $hateThreatening): self
    {
        $this->initialized['hateThreatening'] = true;
        $this->hateThreatening = $hateThreatening;
        return $this;
    }

    public function getSelfHarm(): bool
    {
        return $this->selfHarm;
    }

    public function setSelfHarm(bool $selfHarm): self
    {
        $this->initialized['selfHarm'] = true;
        $this->selfHarm = $selfHarm;
        return $this;
    }

    public function getSexual(): bool
    {
        return $this->sexual;
    }

    public function setSexual(bool $sexual): self
    {
        $this->initialized['sexual'] = true;
        $this->sexual = $sexual;
        return $this;
    }

    public function getSexualMinors(): bool
    {
        return $this->sexualMinors;
    }

    public function setSexualMinors(bool $sexualMinors): self
    {
        $this->initialized['sexualMinors'] = true;
        $this->sexualMinors = $sexualMinors;
        return $this;
    }

    public function getViolence(): bool
    {
        return $this->violence;
    }

    public function setViolence(bool $violence): self
    {
        $this->initialized['violence'] = true;
        $this->violence = $violence;
        return $this;
    }

    public function getViolenceGraphic(): bool
    {
        return $this->violenceGraphic;
    }

    public function setViolenceGraphic(bool $violenceGraphic): self
    {
        $this->initialized['violenceGraphic'] = true;
        $this->violenceGraphic = $violenceGraphic;
        return $this;
    }
}
