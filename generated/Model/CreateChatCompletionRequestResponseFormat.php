<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionRequestResponseFormat extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Must be one of `text` or `json_object`.
     */
    protected string $type = 'text';

    /**
     * @param string $type Must be one of `text` or `json_object`.
     */
    public function __construct($type = 'text')
    {
        if ($type !== null) {
            $this->setType($type);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Must be one of `text` or `json_object`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Must be one of `text` or `json_object`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
