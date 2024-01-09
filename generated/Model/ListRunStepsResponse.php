<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ListRunStepsResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    /**
     * @var RunStepObject[]
     */
    protected ?array $data = null;

    protected ?string $firstId = null;

    protected ?string $lastId = null;

    protected ?bool $hasMore = null;

    /**
     * @param string $object
     * @param RunStepObject[] $data
     * @param string $firstId
     * @param string $lastId
     * @param bool $hasMore
     */
    public function __construct($object = null, $data = null, $firstId = null, $lastId = null, $hasMore = null)
    {
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($data !== null) {
            $this->setData($data);
        }
        if ($firstId !== null) {
            $this->setFirstId($firstId);
        }
        if ($lastId !== null) {
            $this->setLastId($lastId);
        }
        if ($hasMore !== null) {
            $this->setHasMore($hasMore);
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

    /**
     * @return RunStepObject[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param RunStepObject[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }

    public function getFirstId(): string
    {
        return $this->firstId;
    }

    public function setFirstId(string $firstId): self
    {
        $this->initialized['firstId'] = true;
        $this->firstId = $firstId;
        return $this;
    }

    public function getLastId(): string
    {
        return $this->lastId;
    }

    public function setLastId(string $lastId): self
    {
        $this->initialized['lastId'] = true;
        $this->lastId = $lastId;
        return $this;
    }

    public function getHasMore(): bool
    {
        return $this->hasMore;
    }

    public function setHasMore(bool $hasMore): self
    {
        $this->initialized['hasMore'] = true;
        $this->hasMore = $hasMore;
        return $this;
    }
}
