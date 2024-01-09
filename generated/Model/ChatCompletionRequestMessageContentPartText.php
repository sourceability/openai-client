<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestMessageContentPartText extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The type of the content part.
     */
    protected ?string $type = null;

    /**
     * The text content.
     */
    protected ?string $text = null;

    /**
     * @param string $type The type of the content part.
     * @param string $text The text content.
     */
    public function __construct($type = null, $text = null)
    {
        if ($type !== null) {
            $this->setType($type);
        }
        if ($text !== null) {
            $this->setText($text);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The type of the content part.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the content part.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The text content.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * The text content.
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}
