<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEmbeddingResponseDataItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $index = null;

    protected ?string $object = null;

    /**
     * @var float[]|null
     */
    protected ?array $embedding = null;

    /**
     * @param float[]|null $embedding
     */
    public function __construct(?int $index = null, ?string $object = null, ?array $embedding = null)
    {
        $this->index = $index;
        $this->object = $object;
        $this->embedding = $embedding;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
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

    /**
     * @return float[]
     */
    public function getEmbedding(): array
    {
        return $this->embedding;
    }

    /**
     * @param float[] $embedding
     */
    public function setEmbedding(array $embedding): self
    {
        $this->initialized['embedding'] = true;
        $this->embedding = $embedding;
        return $this;
    }
}
