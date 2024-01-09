<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItem extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Whether the content violates [OpenAI's usage policies](/policies/usage-policies).
     */
    protected ?bool $flagged = null;

    /**
     * A list of the categories, and whether they are flagged or not.
     */
    protected ?CreateModerationResponseResultsItemCategories $categories = null;

    /**
     * A list of the categories along with their scores as predicted by model.
     */
    protected ?CreateModerationResponseResultsItemCategoryScores $categoryScores = null;

    /**
     * @param bool $flagged Whether the content violates [OpenAI's usage policies](/policies/usage-policies).
     * @param CreateModerationResponseResultsItemCategories $categories A list of the categories, and whether they are flagged or not.
     * @param CreateModerationResponseResultsItemCategoryScores $categoryScores A list of the categories along with their scores as predicted by model.
     */
    public function __construct($flagged = null, $categories = null, $categoryScores = null)
    {
        if ($flagged !== null) {
            $this->setFlagged($flagged);
        }
        if ($categories !== null) {
            $this->setCategories($categories);
        }
        if ($categoryScores !== null) {
            $this->setCategoryScores($categoryScores);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Whether the content violates [OpenAI's usage policies](/policies/usage-policies).
     */
    public function getFlagged(): bool
    {
        return $this->flagged;
    }

    /**
     * Whether the content violates [OpenAI's usage policies](/policies/usage-policies).
     */
    public function setFlagged(bool $flagged): self
    {
        $this->initialized['flagged'] = true;
        $this->flagged = $flagged;
        return $this;
    }

    /**
     * A list of the categories, and whether they are flagged or not.
     */
    public function getCategories(): CreateModerationResponseResultsItemCategories
    {
        return $this->categories;
    }

    /**
     * A list of the categories, and whether they are flagged or not.
     */
    public function setCategories(CreateModerationResponseResultsItemCategories $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }

    /**
     * A list of the categories along with their scores as predicted by model.
     */
    public function getCategoryScores(): CreateModerationResponseResultsItemCategoryScores
    {
        return $this->categoryScores;
    }

    /**
     * A list of the categories along with their scores as predicted by model.
     */
    public function setCategoryScores(CreateModerationResponseResultsItemCategoryScores $categoryScores): self
    {
        $this->initialized['categoryScores'] = true;
        $this->categoryScores = $categoryScores;
        return $this;
    }
}
