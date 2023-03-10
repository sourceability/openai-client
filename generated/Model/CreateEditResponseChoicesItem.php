<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEditResponseChoicesItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $text = null;

    protected ?int $index = null;

    protected ?CreateEditResponseChoicesItemLogprobs $logprobs = null;

    protected ?string $finishReason = null;

    /**
     * @param string $text
     * @param int $index
     * @param CreateEditResponseChoicesItemLogprobs|null $logprobs
     * @param string $finishReason
     */
    public function __construct($text = null, $index = null, $logprobs = null, $finishReason = null)
    {
        if ($text !== null) {
            $this->setText($text);
        }
        if ($index !== null) {
            $this->setIndex($index);
        }
        if ($logprobs !== null) {
            $this->setLogprobs($logprobs);
        }
        if ($finishReason !== null) {
            $this->setFinishReason($finishReason);
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

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }

    public function getLogprobs(): ?CreateEditResponseChoicesItemLogprobs
    {
        return $this->logprobs;
    }

    public function setLogprobs(?CreateEditResponseChoicesItemLogprobs $logprobs): self
    {
        $this->initialized['logprobs'] = true;
        $this->logprobs = $logprobs;
        return $this;
    }

    public function getFinishReason(): string
    {
        return $this->finishReason;
    }

    public function setFinishReason(string $finishReason): self
    {
        $this->initialized['finishReason'] = true;
        $this->finishReason = $finishReason;
        return $this;
    }
}
