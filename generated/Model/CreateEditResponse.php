<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEditResponse extends ArrayObject
{
    protected array $initialized = [];

    protected string $id;

    protected string $object;

    protected int $created;

    protected string $model;

    /**
     * @var CreateEditResponseChoicesItem[]|null
     */
    protected ?array $choices = null;

    protected CreateEditResponseUsage $usage;

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
     * @return CreateEditResponseChoicesItem[]
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * @param CreateEditResponseChoicesItem[] $choices
     */
    public function setChoices(array $choices): self
    {
        $this->initialized['choices'] = true;
        $this->choices = $choices;
        return $this;
    }

    public function getUsage(): CreateEditResponseUsage
    {
        return $this->usage;
    }

    public function setUsage(CreateEditResponseUsage $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}
