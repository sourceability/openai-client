<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEmbeddingResponse extends ArrayObject
{
    protected array $initialized = [];

    protected string $object;

    protected string $model;

    /**
     * @var CreateEmbeddingResponseDataItem[]|null
     */
    protected ?array $data = null;

    protected CreateEmbeddingResponseUsage $usage;

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

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * @return CreateEmbeddingResponseDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CreateEmbeddingResponseDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }

    public function getUsage(): CreateEmbeddingResponseUsage
    {
        return $this->usage;
    }

    public function setUsage(CreateEmbeddingResponseUsage $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}
