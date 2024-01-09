<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunObjectLastError extends ArrayObject
{
    protected array $initialized = [];

    /**
     * One of `server_error` or `rate_limit_exceeded`.
     */
    protected ?string $code = null;

    /**
     * A human-readable description of the error.
     */
    protected ?string $message = null;

    /**
     * @param string $code One of `server_error` or `rate_limit_exceeded`.
     * @param string $message A human-readable description of the error.
     */
    public function __construct($code = null, $message = null)
    {
        if ($code !== null) {
            $this->setCode($code);
        }
        if ($message !== null) {
            $this->setMessage($message);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * One of `server_error` or `rate_limit_exceeded`.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * One of `server_error` or `rate_limit_exceeded`.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }

    /**
     * A human-readable description of the error.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * A human-readable description of the error.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
