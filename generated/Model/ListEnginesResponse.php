<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ListEnginesResponse extends ArrayObject
{
    protected array $initialized = [];

    protected string $object;

    /**
     * @var Engine[]|null
     */
    protected ?array $data = null;

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
     * @return Engine[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Engine[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
