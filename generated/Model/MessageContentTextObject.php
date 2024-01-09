<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentTextObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `text`.
     */
    protected ?string $type = null;

    protected ?MessageContentTextObjectText $text = null;

    /**
     * @param string $type Always `text`.
     * @param MessageContentTextObjectText $text
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
     * Always `text`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `text`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    public function getText(): MessageContentTextObjectText
    {
        return $this->text;
    }

    public function setText(MessageContentTextObjectText $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}
