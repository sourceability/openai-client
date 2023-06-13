<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestMessageFunctionCall extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The name of the function to call.
     */
    protected ?string $name = null;

    /**
     * The arguments to call the function with, as generated by the model in JSON format. Note that the model does not always generate valid JSON, and may hallucinate parameters not defined by your function schema. Validate the arguments in your code before calling your function.
     */
    protected ?string $arguments = null;

    /**
     * @param string $name The name of the function to call.
     * @param string $arguments The arguments to call the function with, as generated by the model in JSON format. Note that the model does not always generate valid JSON, and may hallucinate parameters not defined by your function schema. Validate the arguments in your code before calling your function.
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

    /**
     * The arguments to call the function with, as generated by the model in JSON format. Note that the model does not always generate valid JSON, and may hallucinate parameters not defined by your function schema. Validate the arguments in your code before calling your function.
     */
    public function getArguments(): string
    {
        return $this->arguments;
    }

    /**
     * The arguments to call the function with, as generated by the model in JSON format. Note that the model does not always generate valid JSON, and may hallucinate parameters not defined by your function schema. Validate the arguments in your code before calling your function.
     */
    public function setArguments(string $arguments): self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }
}
