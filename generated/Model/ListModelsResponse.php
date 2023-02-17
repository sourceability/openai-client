<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ListModelsResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    /**
     * @var Model[]|null
     */
    protected ?array $data = null;

    /**
     * @param string $object
     * @param Model[] $data
     */
    public function __construct($object = null, $data = null)
    {
        if ($object !== null) {
            $this->setObject($object);
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

    /**
     * @return Model[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Model[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
