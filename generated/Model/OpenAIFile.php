<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class OpenAIFile extends ArrayObject
{
    protected array $initialized = [];

    protected string $id;

    protected string $object;

    protected int $bytes;

    protected int $createdAt;

    protected string $filename;

    protected string $purpose;

    protected string $status;

    /**
     * @var mixed[]|null
     */
    protected ?iterable $statusDetails = null;

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
