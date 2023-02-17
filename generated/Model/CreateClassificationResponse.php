<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateClassificationResponse extends ArrayObject
{
    protected array $initialized = [];

    protected string $object;

    protected string $model;

    protected string $searchModel;

    protected string $completion;

    protected string $label;

    /**
     * @var CreateClassificationResponseSelectedExamplesItem[]|null
     */
    protected ?array $selectedExamples = null;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    public function getSearchModel(): string
    {
        return $this->searchModel;
    }

    public function setSearchModel(string $searchModel): self
    {
        $this->initialized['searchModel'] = true;
        $this->searchModel = $searchModel;
        return $this;
    }

    public function getCompletion(): string
    {
        return $this->completion;
    }

    public function setCompletion(string $completion): self
    {
        $this->initialized['completion'] = true;
        $this->completion = $completion;
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }

    /**
     * @return CreateClassificationResponseSelectedExamplesItem[]
     */
    public function getSelectedExamples(): array
    {
        return $this->selectedExamples;
    }

    /**
     * @param CreateClassificationResponseSelectedExamplesItem[] $selectedExamples
     */
    public function setSelectedExamples(array $selectedExamples): self
    {
        $this->initialized['selectedExamples'] = true;
        $this->selectedExamples = $selectedExamples;
        return $this;
    }
}
