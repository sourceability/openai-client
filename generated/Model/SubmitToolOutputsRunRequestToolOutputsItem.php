<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class SubmitToolOutputsRunRequestToolOutputsItem extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the tool call in the `required_action` object within the run object the output is being submitted for.
     */
    protected ?string $toolCallId = null;

    /**
     * The output of the tool call to be submitted to continue the run.
     */
    protected ?string $output = null;

    /**
     * @param string $toolCallId The ID of the tool call in the `required_action` object within the run object the output is being submitted for.
     * @param string $output The output of the tool call to be submitted to continue the run.
     */
    public function __construct($toolCallId = null, $output = null)
    {
        if ($toolCallId !== null) {
            $this->setToolCallId($toolCallId);
        }
        if ($output !== null) {
            $this->setOutput($output);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the tool call in the `required_action` object within the run object the output is being submitted for.
     */
    public function getToolCallId(): string
    {
        return $this->toolCallId;
    }

    /**
     * The ID of the tool call in the `required_action` object within the run object the output is being submitted for.
     */
    public function setToolCallId(string $toolCallId): self
    {
        $this->initialized['toolCallId'] = true;
        $this->toolCallId = $toolCallId;
        return $this;
    }

    /**
     * The output of the tool call to be submitted to continue the run.
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * The output of the tool call to be submitted to continue the run.
     */
    public function setOutput(string $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
