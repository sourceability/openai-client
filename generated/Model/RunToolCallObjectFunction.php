<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunToolCallObjectFunction extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The name of the function.
     */
    protected ?string $name = null;

    /**
     * The arguments that the model expects you to pass to the function.
     */
    protected ?string $arguments = null;

    /**
     * @param string $name The name of the function.
     * @param string $arguments The arguments that the model expects you to pass to the function.
     */
    public function __construct($name = null, $arguments = null)
    {
        if ($name !== null) {
            $this->setName($name);
        }
        if ($arguments !== null) {
            $this->setArguments($arguments);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The name of the function.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the function.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }

    /**
     * The arguments that the model expects you to pass to the function.
     */
    public function getArguments(): string
    {
        return $this->arguments;
    }

    /**
     * The arguments that the model expects you to pass to the function.
     */
    public function setArguments(string $arguments): self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }
}
