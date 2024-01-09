<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class AssistantToolsFunction extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The type of tool being defined: `function`
     */
    protected string $type = 'function';

    protected ?FunctionObject $function = null;

    /**
     * @param FunctionObject $function
     * @param string $type The type of tool being defined: `function`
     */
    public function __construct($function = null, $type = null)
    {
        if ($function !== null) {
            $this->setFunction($function);
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
     * The type of tool being defined: `function`
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool being defined: `function`
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    public function getFunction(): FunctionObject
    {
        return $this->function;
    }

    public function setFunction(FunctionObject $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
}
