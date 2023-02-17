<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ImagesResponse extends ArrayObject
{
    protected array $initialized = [];

    protected int $created;

    /**
     * @var ImagesResponseDataItem[]|null
     */
    protected ?array $data = null;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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
     * @return ImagesResponseDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ImagesResponseDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
