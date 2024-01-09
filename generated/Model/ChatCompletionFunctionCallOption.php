<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionFunctionCallOption extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The name of the function to call.
     */
    protected ?string $name = null;

    /**
     * @param string $name The name of the function to call.
     */
    public function __construct($name = null)
    {
        if ($name !== null) {
            $this->setName($name);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The name of the function to call.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the function to call.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
