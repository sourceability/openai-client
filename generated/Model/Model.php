<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class Model extends ArrayObject
{
    protected array $initialized = [];

    protected string $id;

    protected string $object;

    protected int $created;

    protected string $ownedBy;

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

    public function getOwnedBy(): string
    {
        return $this->ownedBy;
    }

    public function setOwnedBy(string $ownedBy): self
    {
        $this->initialized['ownedBy'] = true;
        $this->ownedBy = $ownedBy;
        return $this;
    }
}
