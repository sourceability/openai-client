<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateSearchResponseDataItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $object = null;

    protected ?int $document = null;

    protected ?float $score = null;

    public function __construct(?string $object = null, ?int $document = null, ?float $score = null)
    {
        $this->object = $object;
        $this->document = $document;
        $this->score = $score;
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

    public function getDocument(): int
    {
        return $this->document;
    }

    public function setDocument(int $document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function setScore(float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
}
