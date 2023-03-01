<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $id = null;

    protected ?string $object = null;

    protected ?int $created = null;

    protected ?string $model = null;

    /**
     * @var CreateChatCompletionResponseChoicesItem[]|null
     */
    protected ?array $choices = null;

    protected ?CreateChatCompletionResponseUsage $usage = null;

    /**
     * @param string $id
     * @param string $object
     * @param int $created
     * @param string $model
     * @param CreateChatCompletionResponseChoicesItem[] $choices
     * @param CreateChatCompletionResponseUsage $usage
     */
    public function __construct($id = null, $object = null, $created = null, $model = null, $choices = null, $usage = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($created !== null) {
            $this->setCreated($created);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($choices !== null) {
            $this->setChoices($choices);
        }
        if ($usage !== null) {
            $this->setUsage($usage);
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

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
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
     * @return CreateChatCompletionResponseChoicesItem[]
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * @param CreateChatCompletionResponseChoicesItem[] $choices
     */
    public function setChoices(array $choices): self
    {
        $this->initialized['choices'] = true;
        $this->choices = $choices;
        return $this;
    }

    public function getUsage(): CreateChatCompletionResponseUsage
    {
        return $this->usage;
    }

    public function setUsage(CreateChatCompletionResponseUsage $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}
