<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateAnswerResponseSelectedDocumentsItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $document = null;

    protected ?string $text = null;

    /**
     * @param int $document
     * @param string $text
     */
    public function __construct($document = null, $text = null)
    {
        if ($document !== null) {
            $this->setDocument($document);
        }
        if ($text !== null) {
            $this->setText($text);
        }
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
