<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ListFineTunesResponse extends ArrayObject
{
    protected array $initialized = [];

    /**
     * @var FineTune[]
     */
    protected ?array $data = null;

    protected string $object = 'list';

    /**
     * @param FineTune[] $data
     * @param string $object
     */
    public function __construct($data = null, $object = null)
    {
        if ($data !== null) {
            $this->setData($data);
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
     * @return FineTune[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param FineTune[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
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
