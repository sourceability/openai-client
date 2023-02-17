<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateAnswerResponse extends ArrayObject
{
    protected array $initialized = [];

    protected string $object;

    protected string $model;

    protected string $searchModel;

    protected string $completion;

    /**
     * @var string[]|null
     */
    protected ?array $answers = null;

    /**
     * @var CreateAnswerResponseSelectedDocumentsItem[]|null
     */
    protected ?array $selectedDocuments = null;

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

    /**
     * @return string[]
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    /**
     * @param string[] $answers
     */
    public function setAnswers(array $answers): self
    {
        $this->initialized['answers'] = true;
        $this->answers = $answers;
        return $this;
    }

    /**
     * @return CreateAnswerResponseSelectedDocumentsItem[]
     */
    public function getSelectedDocuments(): array
    {
        return $this->selectedDocuments;
    }

    /**
     * @param CreateAnswerResponseSelectedDocumentsItem[] $selectedDocuments
     */
    public function setSelectedDocuments(array $selectedDocuments): self
    {
        $this->initialized['selectedDocuments'] = true;
        $this->selectedDocuments = $selectedDocuments;
        return $this;
    }
}
