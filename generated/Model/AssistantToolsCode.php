<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class AssistantToolsCode extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The type of tool being defined: `code_interpreter`
     */
    protected string $type = 'code_interpreter';

    /**
     * @param string $type The type of tool being defined: `code_interpreter`
     */
    public function __construct($type = null)
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
     * The type of tool being defined: `code_interpreter`
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool being defined: `code_interpreter`
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
