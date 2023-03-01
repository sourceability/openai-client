<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateTranslationResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $text = null;

    /**
     * @param string $text
     */
    public function __construct($text = null)
    {
        if ($text !== null) {
            $this->setText($text);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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
