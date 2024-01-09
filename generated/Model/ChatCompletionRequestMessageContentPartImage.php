<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestMessageContentPartImage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The type of the content part.
     */
    protected string $type = 'image_url';

    protected ?ChatCompletionRequestMessageContentPartImageImageUrl $imageUrl = null;

    /**
     * @param ChatCompletionRequestMessageContentPartImageImageUrl $imageUrl
     * @param string $type The type of the content part.
     */
    public function __construct($imageUrl = null, $type = null)
    {
        if ($imageUrl !== null) {
            $this->setImageUrl($imageUrl);
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

    public function getImageUrl(): ChatCompletionRequestMessageContentPartImageImageUrl
    {
        return $this->imageUrl;
    }

    public function setImageUrl(ChatCompletionRequestMessageContentPartImageImageUrl $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
        return $this;
    }
}
