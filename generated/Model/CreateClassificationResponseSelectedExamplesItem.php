<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateClassificationResponseSelectedExamplesItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $document = null;

    protected ?string $text = null;

    protected ?string $label = null;

    public function __construct(?int $document = null, ?string $text = null, ?string $label = null)
    {
        $this->document = $document;
        $this->text = $text;
        $this->label = $label;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
}
