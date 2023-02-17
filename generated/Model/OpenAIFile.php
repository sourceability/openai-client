<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class OpenAIFile extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $id = null;

    protected ?string $object = null;

    protected ?int $bytes = null;

    protected ?int $createdAt = null;

    protected ?string $filename = null;

    protected ?string $purpose = null;

    protected ?string $status = null;

    /**
     * @var mixed[]|null
     */
    protected ?iterable $statusDetails = null;

    /**
     * @param string $id
     * @param string $object
     * @param int $bytes
     * @param int $createdAt
     * @param string $filename
     * @param string $purpose
     * @param string $status
     * @param mixed[]|null $statusDetails
     */
    public function __construct($id = null, $object = null, $bytes = null, $createdAt = null, $filename = null, $purpose = null, $status = null, $statusDetails = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($bytes !== null) {
            $this->setBytes($bytes);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($filename !== null) {
            $this->setFilename($filename);
        }
        if ($purpose !== null) {
            $this->setPurpose($purpose);
        }
        if ($status !== null) {
            $this->setStatus($status);
        }
        if ($statusDetails !== null) {
            $this->setStatusDetails($statusDetails);
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

    public function getBytes(): int
    {
        return $this->bytes;
    }

    public function setBytes(int $bytes): self
    {
        $this->initialized['bytes'] = true;
        $this->bytes = $bytes;
        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }

    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getStatusDetails(): ?iterable
    {
        return $this->statusDetails;
    }

    /**
     * @param mixed[]|null $statusDetails
     */
    public function setStatusDetails(?iterable $statusDetails): self
    {
        $this->initialized['statusDetails'] = true;
        $this->statusDetails = $statusDetails;
        return $this;
    }
}
