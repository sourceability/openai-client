<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItemCategoryScores extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The score for the category 'hate'.
     */
    protected ?float $hate = null;

    /**
     * The score for the category 'hate/threatening'.
     */
    protected ?float $hateThreatening = null;

    /**
     * The score for the category 'harassment'.
     */
    protected ?float $harassment = null;

    /**
     * The score for the category 'harassment/threatening'.
     */
    protected ?float $harassmentThreatening = null;

    /**
     * The score for the category 'self-harm'.
     */
    protected ?float $selfHarm = null;

    /**
     * The score for the category 'self-harm/intent'.
     */
    protected ?float $selfHarmIntent = null;

    /**
     * The score for the category 'self-harm/instructions'.
     */
    protected ?float $selfHarmInstructions = null;

    /**
     * The score for the category 'sexual'.
     */
    protected ?float $sexual = null;

    /**
     * The score for the category 'sexual/minors'.
     */
    protected ?float $sexualMinors = null;

    /**
     * The score for the category 'violence'.
     */
    protected ?float $violence = null;

    /**
     * The score for the category 'violence/graphic'.
     */
    protected ?float $violenceGraphic = null;

    /**
     * @param float $hate The score for the category 'hate'.
     * @param float $hateThreatening The score for the category 'hate/threatening'.
     * @param float $harassment The score for the category 'harassment'.
     * @param float $harassmentThreatening The score for the category 'harassment/threatening'.
     * @param float $selfHarm The score for the category 'self-harm'.
     * @param float $selfHarmIntent The score for the category 'self-harm/intent'.
     * @param float $selfHarmInstructions The score for the category 'self-harm/instructions'.
     * @param float $sexual The score for the category 'sexual'.
     * @param float $sexualMinors The score for the category 'sexual/minors'.
     * @param float $violence The score for the category 'violence'.
     * @param float $violenceGraphic The score for the category 'violence/graphic'.
     */
    public function __construct($hate = null, $hateThreatening = null, $harassment = null, $harassmentThreatening = null, $selfHarm = null, $selfHarmIntent = null, $selfHarmInstructions = null, $sexual = null, $sexualMinors = null, $violence = null, $violenceGraphic = null)
    {
        if ($hate !== null) {
            $this->setHate($hate);
        }
        if ($hateThreatening !== null) {
            $this->setHateThreatening($hateThreatening);
        }
        if ($harassment !== null) {
            $this->setHarassment($harassment);
        }
        if ($harassmentThreatening !== null) {
            $this->setHarassmentThreatening($harassmentThreatening);
        }
        if ($selfHarm !== null) {
            $this->setSelfHarm($selfHarm);
        }
        if ($selfHarmIntent !== null) {
            $this->setSelfHarmIntent($selfHarmIntent);
        }
        if ($selfHarmInstructions !== null) {
            $this->setSelfHarmInstructions($selfHarmInstructions);
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

    /**
     * The score for the category 'hate'.
     */
    public function getHate(): float
    {
        return $this->hate;
    }

    /**
     * The score for the category 'hate'.
     */
    public function setHate(float $hate): self
    {
        $this->initialized['hate'] = true;
        $this->hate = $hate;
        return $this;
    }

    /**
     * The score for the category 'hate/threatening'.
     */
    public function getHateThreatening(): float
    {
        return $this->hateThreatening;
    }

    /**
     * The score for the category 'hate/threatening'.
     */
    public function setHateThreatening(float $hateThreatening): self
    {
        $this->initialized['hateThreatening'] = true;
        $this->hateThreatening = $hateThreatening;
        return $this;
    }

    /**
     * The score for the category 'harassment'.
     */
    public function getHarassment(): float
    {
        return $this->harassment;
    }

    /**
     * The score for the category 'harassment'.
     */
    public function setHarassment(float $harassment): self
    {
        $this->initialized['harassment'] = true;
        $this->harassment = $harassment;
        return $this;
    }

    /**
     * The score for the category 'harassment/threatening'.
     */
    public function getHarassmentThreatening(): float
    {
        return $this->harassmentThreatening;
    }

    /**
     * The score for the category 'harassment/threatening'.
     */
    public function setHarassmentThreatening(float $harassmentThreatening): self
    {
        $this->initialized['harassmentThreatening'] = true;
        $this->harassmentThreatening = $harassmentThreatening;
        return $this;
    }

    /**
     * The score for the category 'self-harm'.
     */
    public function getSelfHarm(): float
    {
        return $this->selfHarm;
    }

    /**
     * The score for the category 'self-harm'.
     */
    public function setSelfHarm(float $selfHarm): self
    {
        $this->initialized['selfHarm'] = true;
        $this->selfHarm = $selfHarm;
        return $this;
    }

    /**
     * The score for the category 'self-harm/intent'.
     */
    public function getSelfHarmIntent(): float
    {
        return $this->selfHarmIntent;
    }

    /**
     * The score for the category 'self-harm/intent'.
     */
    public function setSelfHarmIntent(float $selfHarmIntent): self
    {
        $this->initialized['selfHarmIntent'] = true;
        $this->selfHarmIntent = $selfHarmIntent;
        return $this;
    }

    /**
     * The score for the category 'self-harm/instructions'.
     */
    public function getSelfHarmInstructions(): float
    {
        return $this->selfHarmInstructions;
    }

    /**
     * The score for the category 'self-harm/instructions'.
     */
    public function setSelfHarmInstructions(float $selfHarmInstructions): self
    {
        $this->initialized['selfHarmInstructions'] = true;
        $this->selfHarmInstructions = $selfHarmInstructions;
        return $this;
    }

    /**
     * The score for the category 'sexual'.
     */
    public function getSexual(): float
    {
        return $this->sexual;
    }

    /**
     * The score for the category 'sexual'.
     */
    public function setSexual(float $sexual): self
    {
        $this->initialized['sexual'] = true;
        $this->sexual = $sexual;
        return $this;
    }

    /**
     * The score for the category 'sexual/minors'.
     */
    public function getSexualMinors(): float
    {
        return $this->sexualMinors;
    }

    /**
     * The score for the category 'sexual/minors'.
     */
    public function setSexualMinors(float $sexualMinors): self
    {
        $this->initialized['sexualMinors'] = true;
        $this->sexualMinors = $sexualMinors;
        return $this;
    }

    /**
     * The score for the category 'violence'.
     */
    public function getViolence(): float
    {
        return $this->violence;
    }

    /**
     * The score for the category 'violence'.
     */
    public function setViolence(float $violence): self
    {
        $this->initialized['violence'] = true;
        $this->violence = $violence;
        return $this;
    }

    /**
     * The score for the category 'violence/graphic'.
     */
    public function getViolenceGraphic(): float
    {
        return $this->violenceGraphic;
    }

    /**
     * The score for the category 'violence/graphic'.
     */
    public function setViolenceGraphic(float $violenceGraphic): self
    {
        $this->initialized['violenceGraphic'] = true;
        $this->violenceGraphic = $violenceGraphic;
        return $this;
    }
}
