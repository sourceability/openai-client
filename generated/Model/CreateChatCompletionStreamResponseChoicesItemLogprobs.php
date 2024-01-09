<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionStreamResponseChoicesItemLogprobs extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A list of message content tokens with log probability information.
     *
     * @var ChatCompletionTokenLogprob[]|null
     */
    protected $content = null;

    /**
     * @param ChatCompletionTokenLogprob[]|null $content A list of message content tokens with log probability information.
     */
    public function __construct($content = null)
    {
        if ($content !== null) {
            $this->setContent($content);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A list of message content tokens with log probability information.
     *
     * @return ChatCompletionTokenLogprob[]|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * A list of message content tokens with log probability information.
     *
     * @param ChatCompletionTokenLogprob[]|null $content
     */
    public function setContent(?array $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}
