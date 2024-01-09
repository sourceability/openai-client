<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunObjectRequiredActionSubmitToolOutputs extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A list of the relevant tool calls.
     *
     * @var RunToolCallObject[]
     */
    protected ?array $toolCalls = null;

    /**
     * @param RunToolCallObject[] $toolCalls A list of the relevant tool calls.
     */
    public function __construct($toolCalls = null)
    {
        if ($toolCalls !== null) {
            $this->setToolCalls($toolCalls);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A list of the relevant tool calls.
     *
     * @return RunToolCallObject[]
     */
    public function getToolCalls(): array
    {
        return $this->toolCalls;
    }

    /**
     * A list of the relevant tool calls.
     *
     * @param RunToolCallObject[] $toolCalls
     */
    public function setToolCalls(array $toolCalls): self
    {
        $this->initialized['toolCalls'] = true;
        $this->toolCalls = $toolCalls;
        return $this;
    }
}
