<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationResponse extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The unique identifier for the moderation request.
     */
    protected ?string $id = null;

    /**
     * The model used to generate the moderation results.
     */
    protected ?string $model = null;

    /**
     * A list of moderation objects.
     *
     * @var CreateModerationResponseResultsItem[]
     */
    protected ?array $results = null;

    /**
     * @param string $id The unique identifier for the moderation request.
     * @param string $model The model used to generate the moderation results.
     * @param CreateModerationResponseResultsItem[] $results A list of moderation objects.
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

    /**
     * The unique identifier for the moderation request.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The unique identifier for the moderation request.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The model used to generate the moderation results.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The model used to generate the moderation results.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * A list of moderation objects.
     *
     * @return CreateModerationResponseResultsItem[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * A list of moderation objects.
     *
     * @param CreateModerationResponseResultsItem[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}
