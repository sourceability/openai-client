<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FunctionObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A description of what the function does, used by the model to choose when and how to call the function.
     */
    protected ?string $description = null;

    /**
     * The name of the function to be called. Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 64.
     */
    protected ?string $name = null;

    /**
     * The parameters the functions accepts, described as a JSON Schema object. See the [guide](/docs/guides/text-generation/function-calling) for examples, and the [JSON Schema reference](https://json-schema.org/understanding-json-schema/) for documentation about the format.

     *
     * @var array<string, mixed>
     */
    protected ?iterable $parameters = null;

    /**
     * @param string $description A description of what the function does, used by the model to choose when and how to call the function.
     * @param string $name The name of the function to be called. Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 64.
     * @param array<string, mixed> $parameters The parameters the functions accepts, described as a JSON Schema object. See the [guide](/docs/guides/text-generation/function-calling) for examples, and the [JSON Schema reference](https://json-schema.org/understanding-json-schema/) for documentation about the format.
     *                                         Omitting `parameters` defines a function with an empty parameter list.
     */
    public function __construct($description = null, $name = null, $parameters = null)
    {
        if ($description !== null) {
            $this->setDescription($description);
        }
        if ($name !== null) {
            $this->setName($name);
        }
        if ($parameters !== null) {
            $this->setParameters($parameters);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A description of what the function does, used by the model to choose when and how to call the function.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * A description of what the function does, used by the model to choose when and how to call the function.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }

    /**
     * The name of the function to be called. Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 64.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the function to be called. Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 64.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }

    /**
     * The parameters the functions accepts, described as a JSON Schema object. See the [guide](/docs/guides/text-generation/function-calling) for examples, and the [JSON Schema reference](https://json-schema.org/understanding-json-schema/) for documentation about the format.

     *
     * @return array<string, mixed>
     */
    public function getParameters(): iterable
    {
        return $this->parameters;
    }

    /**
     * The parameters the functions accepts, described as a JSON Schema object. See the [guide](/docs/guides/text-generation/function-calling) for examples, and the [JSON Schema reference](https://json-schema.org/understanding-json-schema/) for documentation about the format.

     *
     * @param array<string, mixed> $parameters
     */
    public function setParameters(iterable $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}
