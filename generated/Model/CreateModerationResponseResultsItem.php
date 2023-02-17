<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?bool $flagged = null;

    protected ?CreateModerationResponseResultsItemCategories $categories = null;

    protected ?CreateModerationResponseResultsItemCategoryScores $categoryScores = null;

    /**
     * @param bool $flagged
     * @param CreateModerationResponseResultsItemCategories $categories
     * @param CreateModerationResponseResultsItemCategoryScores $categoryScores
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

    public function getFlagged(): bool
    {
        return $this->flagged;
    }

    public function setFlagged(bool $flagged): self
    {
        $this->initialized['flagged'] = true;
        $this->flagged = $flagged;
        return $this;
    }

    public function getCategories(): CreateModerationResponseResultsItemCategories
    {
        return $this->categories;
    }

    public function setCategories(CreateModerationResponseResultsItemCategories $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }

    public function getCategoryScores(): CreateModerationResponseResultsItemCategoryScores
    {
        return $this->categoryScores;
    }

    public function setCategoryScores(CreateModerationResponseResultsItemCategoryScores $categoryScores): self
    {
        $this->initialized['categoryScores'] = true;
        $this->categoryScores = $categoryScores;
        return $this;
    }
}
