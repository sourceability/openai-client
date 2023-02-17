<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateSearchResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    protected ?string $model = null;

    /**
     * @var CreateSearchResponseDataItem[]|null
     */
    protected ?array $data = null;

    /**
     * @param string $object
     * @param string $model
     * @param CreateSearchResponseDataItem[] $data
     */
    public function __construct($object = null, $model = null, $data = null)
    {
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($data !== null) {
            $this->setData($data);
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
     * @return CreateSearchResponseDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CreateSearchResponseDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
