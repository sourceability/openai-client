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
    protected string $type = 'text';

    /**
     * The text content.
     */
    protected ?string $text = null;

    /**
     * @param string $text The text content.
     * @param string $type The type of the content part.
     */
    public function __construct($text = null, $type = null)
    {
        if ($text !== null) {
            $this->setText($text);
        }
        if ($type !== null) {
            $this->setType($type);
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
