<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTuningJobEvent extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $id = null;

    protected ?int $createdAt = null;

    protected ?string $level = null;

    protected ?string $message = null;

    protected string $object = 'fine_tuning.job.event';

    /**
     * @param string $id
     * @param int $createdAt
     * @param string $level
     * @param string $message
     * @param string $object
     */
    public function __construct($id = null, $createdAt = null, $level = null, $message = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
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
        if ($object !== null) {
            $this->setObject($object);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
