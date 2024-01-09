<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ImagesResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $created = null;

    /**
     * @var Image[]
     */
    protected ?array $data = null;

    /**
     * @param int $created
     * @param Image[] $data
     */
    public function __construct($created = null, $data = null)
    {
        if ($created !== null) {
            $this->setCreated($created);
        }
        if ($data !== null) {
            $this->setData($data);
        }
    }

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
     * @return Image[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Image[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
