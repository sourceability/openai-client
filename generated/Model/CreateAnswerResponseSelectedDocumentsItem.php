<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateAnswerResponseSelectedDocumentsItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $document = null;

    protected ?string $text = null;

    public function __construct(?int $document = null, ?string $text = null)
    {
        $this->document = $document;
        $this->text = $text;
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
}
