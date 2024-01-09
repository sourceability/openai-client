<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsCodeOutputLogsObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `logs`.
     */
    protected string $type = 'logs';

    /**
     * The text output from the Code Interpreter tool call.
     */
    protected ?string $logs = null;

    /**
     * @param string $logs The text output from the Code Interpreter tool call.
     * @param string $type Always `logs`.
     */
    public function __construct($logs = null, $type = null)
    {
        if ($logs !== null) {
            $this->setLogs($logs);
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
     * Always `logs`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `logs`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The text output from the Code Interpreter tool call.
     */
    public function getLogs(): string
    {
        return $this->logs;
    }

    /**
     * The text output from the Code Interpreter tool call.
     */
    public function setLogs(string $logs): self
    {
        $this->initialized['logs'] = true;
        $this->logs = $logs;
        return $this;
    }
}
