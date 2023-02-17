<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponseResultsItem extends ArrayObject
{
    protected array $initialized = [];

    protected bool $flagged;

    protected CreateModerationResponseResultsItemCategories $categories;

    protected CreateModerationResponseResultsItemCategoryScores $categoryScores;

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
