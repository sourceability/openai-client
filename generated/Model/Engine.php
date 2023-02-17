<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class Engine extends ArrayObject
{
    protected array $initialized = [];

    protected string $id;

    protected string $object;

    protected ?int $created = null;

    protected bool $ready;

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

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    public function getReady(): bool
    {
        return $this->ready;
    }

    public function setReady(bool $ready): self
    {
        $this->initialized['ready'] = true;
        $this->ready = $ready;
        return $this;
    }
}
