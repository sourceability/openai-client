<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateClassificationResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    protected ?string $model = null;

    protected ?string $searchModel = null;

    protected ?string $completion = null;

    protected ?string $label = null;

    /**
     * @var CreateClassificationResponseSelectedExamplesItem[]|null
     */
    protected ?array $selectedExamples = null;

    /**
     * @param string $object
     * @param string $model
     * @param string $searchModel
     * @param string $completion
     * @param string $label
     * @param CreateClassificationResponseSelectedExamplesItem[] $selectedExamples
     */
    public function __construct($object = null, $model = null, $searchModel = null, $completion = null, $label = null, $selectedExamples = null)
    {
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($searchModel !== null) {
            $this->setSearchModel($searchModel);
        }
        if ($completion !== null) {
            $this->setCompletion($completion);
        }
        if ($label !== null) {
            $this->setLabel($label);
        }
        if ($selectedExamples !== null) {
            $this->setSelectedExamples($selectedExamples);
        }
    }

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
