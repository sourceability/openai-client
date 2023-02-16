<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateModerationResponseResultsItem extends \ArrayObject
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
    protected $flagged;
    /**
     * 
     *
     * @var CreateModerationResponseResultsItemCategories
     */
    protected $categories;
    /**
     * 
     *
     * @var CreateModerationResponseResultsItemCategoryScores
     */
    protected $categoryScores;
    /**
     * 
     *
     * @return bool
     */
    public function getFlagged() : bool
    {
        return $this->flagged;
    }
    /**
     * 
     *
     * @param bool $flagged
     *
     * @return self
     */
    public function setFlagged(bool $flagged) : self
    {
        $this->initialized['flagged'] = true;
        $this->flagged = $flagged;
        return $this;
    }
    /**
     * 
     *
     * @return CreateModerationResponseResultsItemCategories
     */
    public function getCategories() : CreateModerationResponseResultsItemCategories
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param CreateModerationResponseResultsItemCategories $categories
     *
     * @return self
     */
    public function setCategories(CreateModerationResponseResultsItemCategories $categories) : self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * 
     *
     * @return CreateModerationResponseResultsItemCategoryScores
     */
    public function getCategoryScores() : CreateModerationResponseResultsItemCategoryScores
    {
        return $this->categoryScores;
    }
    /**
     * 
     *
     * @param CreateModerationResponseResultsItemCategoryScores $categoryScores
     *
     * @return self
     */
    public function setCategoryScores(CreateModerationResponseResultsItemCategoryScores $categoryScores) : self
    {
        $this->initialized['categoryScores'] = true;
        $this->categoryScores = $categoryScores;
        return $this;
    }
}