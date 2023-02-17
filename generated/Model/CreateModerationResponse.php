<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $id = null;

    protected ?string $model = null;

    /**
     * @var CreateModerationResponseResultsItem[]|null
     */
    protected ?array $results = null;

    /**
     * @param string $id
     * @param string $model
     * @param CreateModerationResponseResultsItem[] $results
     */
    public function __construct($id = null, $model = null, $results = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($results !== null) {
            $this->setResults($results);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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

    /**
     * @return CreateModerationResponseResultsItem[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param CreateModerationResponseResultsItem[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}
