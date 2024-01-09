<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class DeleteThreadResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $id = null;

    protected ?bool $deleted = null;

    protected ?string $object = null;

    /**
     * @param string $id
     * @param bool $deleted
     * @param string $object
     */
    public function __construct($id = null, $deleted = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($deleted !== null) {
            $this->setDeleted($deleted);
        }
        if ($object !== null) {
            $this->setObject($object);
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

    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
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
}
