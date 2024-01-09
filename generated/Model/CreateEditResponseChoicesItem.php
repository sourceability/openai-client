<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEditResponseChoicesItem extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The reason the model stopped generating tokens. This will be `stop` if the model hit a natural stop point or a provided stop sequence,
    or `content_filter` if content was omitted due to a flag from our content filters.
     */
    protected ?string $finishReason = null;

    /**
     * The index of the choice in the list of choices.
     */
    protected ?int $index = null;

    /**
     * The edited result.
     */
    protected ?string $text = null;

    /**
     * @param string $finishReason The reason the model stopped generating tokens. This will be `stop` if the model hit a natural stop point or a provided stop sequence,
     *                             `length` if the maximum number of tokens specified in the request was reached,
     *                             or `content_filter` if content was omitted due to a flag from our content filters.
     * @param int $index The index of the choice in the list of choices.
     * @param string $text The edited result.
     */
    public function __construct($finishReason = null, $index = null, $text = null)
    {
        if ($finishReason !== null) {
            $this->setFinishReason($finishReason);
        }
        if ($index !== null) {
            $this->setIndex($index);
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
     * The reason the model stopped generating tokens. This will be `stop` if the model hit a natural stop point or a provided stop sequence,
    or `content_filter` if content was omitted due to a flag from our content filters.
     */
    public function getFinishReason(): string
    {
        return $this->finishReason;
    }

    /**
     * The reason the model stopped generating tokens. This will be `stop` if the model hit a natural stop point or a provided stop sequence,
    or `content_filter` if content was omitted due to a flag from our content filters.
     */
    public function setFinishReason(string $finishReason): self
    {
        $this->initialized['finishReason'] = true;
        $this->finishReason = $finishReason;
        return $this;
    }

    /**
     * The index of the choice in the list of choices.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * The index of the choice in the list of choices.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }

    /**
     * The edited result.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * The edited result.
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}
