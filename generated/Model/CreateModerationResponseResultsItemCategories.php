<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItemCategories extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Content that expresses, incites, or promotes hate based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste. Hateful content aimed at non-protected groups (e.g., chess players) is harassment.
     */
    protected ?bool $hate = null;

    /**
     * Hateful content that also includes violence or serious harm towards the targeted group based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste.
     */
    protected ?bool $hateThreatening = null;

    /**
     * Content that expresses, incites, or promotes harassing language towards any target.
     */
    protected ?bool $harassment = null;

    /**
     * Harassment content that also includes violence or serious harm towards any target.
     */
    protected ?bool $harassmentThreatening = null;

    /**
     * Content that promotes, encourages, or depicts acts of self-harm, such as suicide, cutting, and eating disorders.
     */
    protected ?bool $selfHarm = null;

    /**
     * Content where the speaker expresses that they are engaging or intend to engage in acts of self-harm, such as suicide, cutting, and eating disorders.
     */
    protected ?bool $selfHarmIntent = null;

    /**
     * Content that encourages performing acts of self-harm, such as suicide, cutting, and eating disorders, or that gives instructions or advice on how to commit such acts.
     */
    protected ?bool $selfHarmInstructions = null;

    /**
     * Content meant to arouse sexual excitement, such as the description of sexual activity, or that promotes sexual services (excluding sex education and wellness).
     */
    protected ?bool $sexual = null;

    /**
     * Sexual content that includes an individual who is under 18 years old.
     */
    protected ?bool $sexualMinors = null;

    /**
     * Content that depicts death, violence, or physical injury.
     */
    protected ?bool $violence = null;

    /**
     * Content that depicts death, violence, or physical injury in graphic detail.
     */
    protected ?bool $violenceGraphic = null;

    /**
     * @param bool $hate Content that expresses, incites, or promotes hate based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste. Hateful content aimed at non-protected groups (e.g., chess players) is harassment.
     * @param bool $hateThreatening Hateful content that also includes violence or serious harm towards the targeted group based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste.
     * @param bool $harassment Content that expresses, incites, or promotes harassing language towards any target.
     * @param bool $harassmentThreatening Harassment content that also includes violence or serious harm towards any target.
     * @param bool $selfHarm Content that promotes, encourages, or depicts acts of self-harm, such as suicide, cutting, and eating disorders.
     * @param bool $selfHarmIntent Content where the speaker expresses that they are engaging or intend to engage in acts of self-harm, such as suicide, cutting, and eating disorders.
     * @param bool $selfHarmInstructions Content that encourages performing acts of self-harm, such as suicide, cutting, and eating disorders, or that gives instructions or advice on how to commit such acts.
     * @param bool $sexual Content meant to arouse sexual excitement, such as the description of sexual activity, or that promotes sexual services (excluding sex education and wellness).
     * @param bool $sexualMinors Sexual content that includes an individual who is under 18 years old.
     * @param bool $violence Content that depicts death, violence, or physical injury.
     * @param bool $violenceGraphic Content that depicts death, violence, or physical injury in graphic detail.
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
     * Content that expresses, incites, or promotes hate based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste. Hateful content aimed at non-protected groups (e.g., chess players) is harassment.
     */
    public function getHate(): bool
    {
        return $this->hate;
    }

    /**
     * Content that expresses, incites, or promotes hate based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste. Hateful content aimed at non-protected groups (e.g., chess players) is harassment.
     */
    public function setHate(bool $hate): self
    {
        $this->initialized['hate'] = true;
        $this->hate = $hate;
        return $this;
    }

    /**
     * Hateful content that also includes violence or serious harm towards the targeted group based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste.
     */
    public function getHateThreatening(): bool
    {
        return $this->hateThreatening;
    }

    /**
     * Hateful content that also includes violence or serious harm towards the targeted group based on race, gender, ethnicity, religion, nationality, sexual orientation, disability status, or caste.
     */
    public function setHateThreatening(bool $hateThreatening): self
    {
        $this->initialized['hateThreatening'] = true;
        $this->hateThreatening = $hateThreatening;
        return $this;
    }

    /**
     * Content that expresses, incites, or promotes harassing language towards any target.
     */
    public function getHarassment(): bool
    {
        return $this->harassment;
    }

    /**
     * Content that expresses, incites, or promotes harassing language towards any target.
     */
    public function setHarassment(bool $harassment): self
    {
        $this->initialized['harassment'] = true;
        $this->harassment = $harassment;
        return $this;
    }

    /**
     * Harassment content that also includes violence or serious harm towards any target.
     */
    public function getHarassmentThreatening(): bool
    {
        return $this->harassmentThreatening;
    }

    /**
     * Harassment content that also includes violence or serious harm towards any target.
     */
    public function setHarassmentThreatening(bool $harassmentThreatening): self
    {
        $this->initialized['harassmentThreatening'] = true;
        $this->harassmentThreatening = $harassmentThreatening;
        return $this;
    }

    /**
     * Content that promotes, encourages, or depicts acts of self-harm, such as suicide, cutting, and eating disorders.
     */
    public function getSelfHarm(): bool
    {
        return $this->selfHarm;
    }

    /**
     * Content that promotes, encourages, or depicts acts of self-harm, such as suicide, cutting, and eating disorders.
     */
    public function setSelfHarm(bool $selfHarm): self
    {
        $this->initialized['selfHarm'] = true;
        $this->selfHarm = $selfHarm;
        return $this;
    }

    /**
     * Content where the speaker expresses that they are engaging or intend to engage in acts of self-harm, such as suicide, cutting, and eating disorders.
     */
    public function getSelfHarmIntent(): bool
    {
        return $this->selfHarmIntent;
    }

    /**
     * Content where the speaker expresses that they are engaging or intend to engage in acts of self-harm, such as suicide, cutting, and eating disorders.
     */
    public function setSelfHarmIntent(bool $selfHarmIntent): self
    {
        $this->initialized['selfHarmIntent'] = true;
        $this->selfHarmIntent = $selfHarmIntent;
        return $this;
    }

    /**
     * Content that encourages performing acts of self-harm, such as suicide, cutting, and eating disorders, or that gives instructions or advice on how to commit such acts.
     */
    public function getSelfHarmInstructions(): bool
    {
        return $this->selfHarmInstructions;
    }

    /**
     * Content that encourages performing acts of self-harm, such as suicide, cutting, and eating disorders, or that gives instructions or advice on how to commit such acts.
     */
    public function setSelfHarmInstructions(bool $selfHarmInstructions): self
    {
        $this->initialized['selfHarmInstructions'] = true;
        $this->selfHarmInstructions = $selfHarmInstructions;
        return $this;
    }

    /**
     * Content meant to arouse sexual excitement, such as the description of sexual activity, or that promotes sexual services (excluding sex education and wellness).
     */
    public function getSexual(): bool
    {
        return $this->sexual;
    }

    /**
     * Content meant to arouse sexual excitement, such as the description of sexual activity, or that promotes sexual services (excluding sex education and wellness).
     */
    public function setSexual(bool $sexual): self
    {
        $this->initialized['sexual'] = true;
        $this->sexual = $sexual;
        return $this;
    }

    /**
     * Sexual content that includes an individual who is under 18 years old.
     */
    public function getSexualMinors(): bool
    {
        return $this->sexualMinors;
    }

    /**
     * Sexual content that includes an individual who is under 18 years old.
     */
    public function setSexualMinors(bool $sexualMinors): self
    {
        $this->initialized['sexualMinors'] = true;
        $this->sexualMinors = $sexualMinors;
        return $this;
    }

    /**
     * Content that depicts death, violence, or physical injury.
     */
    public function getViolence(): bool
    {
        return $this->violence;
    }

    /**
     * Content that depicts death, violence, or physical injury.
     */
    public function setViolence(bool $violence): self
    {
        $this->initialized['violence'] = true;
        $this->violence = $violence;
        return $this;
    }

    /**
     * Content that depicts death, violence, or physical injury in graphic detail.
     */
    public function getViolenceGraphic(): bool
    {
        return $this->violenceGraphic;
    }

    /**
     * Content that depicts death, violence, or physical injury in graphic detail.
     */
    public function setViolenceGraphic(bool $violenceGraphic): self
    {
        $this->initialized['violenceGraphic'] = true;
        $this->violenceGraphic = $violenceGraphic;
        return $this;
    }
}
