<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ListPaginatedFineTuningJobsResponse extends ArrayObject
{
    protected array $initialized = [];

    /**
     * @var FineTuningJob[]
     */
    protected ?array $data = null;

    protected ?bool $hasMore = null;

    protected ?string $object = null;

    /**
     * @param FineTuningJob[] $data
     * @param bool $hasMore
     * @param string $object
     */
    public function __construct($data = null, $hasMore = null, $object = null)
    {
        if ($data !== null) {
            $this->setData($data);
        }
        if ($hasMore !== null) {
            $this->setHasMore($hasMore);
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
     * @return FineTuningJob[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param FineTuningJob[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
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
