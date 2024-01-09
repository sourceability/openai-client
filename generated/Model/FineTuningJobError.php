<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class FineTuningJobError extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A machine-readable error code.
     */
    protected ?string $code = null;

    /**
     * A human-readable error message.
     */
    protected ?string $message = null;

    /**
     * The parameter that was invalid, usually `training_file` or `validation_file`. This field will be null if the failure was not parameter-specific.
     */
    protected ?string $param = null;

    /**
     * @param string $code A machine-readable error code.
     * @param string $message A human-readable error message.
     * @param string|null $param The parameter that was invalid, usually `training_file` or `validation_file`. This field will be null if the failure was not parameter-specific.
     */
    public function __construct($code = null, $message = null, $param = null)
    {
        if ($code !== null) {
            $this->setCode($code);
        }
        if ($message !== null) {
            $this->setMessage($message);
        }
        if ($param !== null) {
            $this->setParam($param);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A machine-readable error code.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * A machine-readable error code.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }

    /**
     * A human-readable error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * A human-readable error message.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }

    /**
     * The parameter that was invalid, usually `training_file` or `validation_file`. This field will be null if the failure was not parameter-specific.
     */
    public function getParam(): ?string
    {
        return $this->param;
    }

    /**
     * The parameter that was invalid, usually `training_file` or `validation_file`. This field will be null if the failure was not parameter-specific.
     */
    public function setParam(?string $param): self
    {
        $this->initialized['param'] = true;
        $this->param = $param;
        return $this;
    }
}
