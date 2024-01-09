<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class Error extends ArrayObject
{
    protected array $initialized = [];

    protected ?string $code = null;

    protected ?string $message = null;

    protected ?string $param = null;

    protected ?string $type = null;

    /**
     * @param string|null $code
     * @param string $message
     * @param string|null $param
     * @param string $type
     */
    public function __construct($code = null, $message = null, $param = null, $type = null)
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
        if ($type !== null) {
            $this->setType($type);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }

    public function getParam(): ?string
    {
        return $this->param;
    }

    public function setParam(?string $param): self
    {
        $this->initialized['param'] = true;
        $this->param = $param;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
