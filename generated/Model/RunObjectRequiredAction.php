<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunObjectRequiredAction extends ArrayObject
{
    protected array $initialized = [];

    /**
     * For now, this is always `submit_tool_outputs`.
     */
    protected ?string $type = null;

    /**
     * Details on the tool outputs needed for this run to continue.
     */
    protected ?RunObjectRequiredActionSubmitToolOutputs $submitToolOutputs = null;

    /**
     * @param string $type For now, this is always `submit_tool_outputs`.
     * @param RunObjectRequiredActionSubmitToolOutputs $submitToolOutputs Details on the tool outputs needed for this run to continue.
     */
    public function __construct($type = null, $submitToolOutputs = null)
    {
        if ($type !== null) {
            $this->setType($type);
        }
        if ($submitToolOutputs !== null) {
            $this->setSubmitToolOutputs($submitToolOutputs);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * For now, this is always `submit_tool_outputs`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * For now, this is always `submit_tool_outputs`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * Details on the tool outputs needed for this run to continue.
     */
    public function getSubmitToolOutputs(): RunObjectRequiredActionSubmitToolOutputs
    {
        return $this->submitToolOutputs;
    }

    /**
     * Details on the tool outputs needed for this run to continue.
     */
    public function setSubmitToolOutputs(RunObjectRequiredActionSubmitToolOutputs $submitToolOutputs): self
    {
        $this->initialized['submitToolOutputs'] = true;
        $this->submitToolOutputs = $submitToolOutputs;
        return $this;
    }
}
