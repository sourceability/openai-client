<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class Model extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The model identifier, which can be referenced in the API endpoints.
     */
    protected ?string $id = null;

    /**
     * The Unix timestamp (in seconds) when the model was created.
     */
    protected ?int $created = null;

    /**
     * The object type, which is always "model".
     */
    protected string $object = 'model';

    /**
     * The organization that owns the model.
     */
    protected ?string $ownedBy = null;

    /**
     * @param string $id The model identifier, which can be referenced in the API endpoints.
     * @param int $created The Unix timestamp (in seconds) when the model was created.
     * @param string $ownedBy The organization that owns the model.
     * @param string $object The object type, which is always "model".
     */
    public function __construct($id = null, $created = null, $ownedBy = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($created !== null) {
            $this->setCreated($created);
        }
        if ($ownedBy !== null) {
            $this->setOwnedBy($ownedBy);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The model identifier, which can be referenced in the API endpoints.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The model identifier, which can be referenced in the API endpoints.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) when the model was created.
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * The Unix timestamp (in seconds) when the model was created.
     */
    public function setCreated(int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * The object type, which is always "model".
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always "model".
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The organization that owns the model.
     */
    public function getOwnedBy(): string
    {
        return $this->ownedBy;
    }

    /**
     * The organization that owns the model.
     */
    public function setOwnedBy(string $ownedBy): self
    {
        $this->initialized['ownedBy'] = true;
        $this->ownedBy = $ownedBy;
        return $this;
    }
}
