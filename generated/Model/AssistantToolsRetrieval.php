<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class AssistantToolsRetrieval extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The type of tool being defined: `retrieval`
     */
    protected string $type = 'retrieval';

    /**
     * @param string $type The type of tool being defined: `retrieval`
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
     * The type of tool being defined: `retrieval`
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool being defined: `retrieval`
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
