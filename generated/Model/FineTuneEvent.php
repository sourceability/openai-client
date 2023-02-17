<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTuneEvent extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    protected ?int $createdAt = null;

    protected ?string $level = null;

    protected ?string $message = null;

    /**
     * @param string $object
     * @param int $createdAt
     * @param string $level
     * @param string $message
     */
    public function __construct($object = null, $createdAt = null, $level = null, $message = null)
    {
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($level !== null) {
            $this->setLevel($level);
        }
        if ($message !== null) {
            $this->setMessage($message);
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

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
