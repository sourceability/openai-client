<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionResponseChoicesItem extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $index = null;

    protected ?ChatCompletionResponseMessage $message = null;

    protected ?string $finishReason = null;

    /**
     * @param int $index
     * @param ChatCompletionResponseMessage $message
     * @param string $finishReason
     */
    public function __construct($index = null, $message = null, $finishReason = null)
    {
        if ($index !== null) {
            $this->setIndex($index);
        }
        if ($message !== null) {
            $this->setMessage($message);
        }
        if ($finishReason !== null) {
            $this->setFinishReason($finishReason);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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

    public function getMessage(): ChatCompletionResponseMessage
    {
        return $this->message;
    }

    public function setMessage(ChatCompletionResponseMessage $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
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
