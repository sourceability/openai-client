<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEditResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    protected ?int $created = null;

    /**
     * @var CreateEditResponseChoicesItem[]|null
     */
    protected ?array $choices = null;

    protected ?CreateEditResponseUsage $usage = null;

    /**
     * @param string $object
     * @param int $created
     * @param CreateEditResponseChoicesItem[] $choices
     * @param CreateEditResponseUsage $usage
     */
    public function __construct($object = null, $created = null, $choices = null, $usage = null)
    {
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($created !== null) {
            $this->setCreated($created);
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
