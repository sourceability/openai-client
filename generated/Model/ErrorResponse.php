<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ErrorResponse extends ArrayObject
{
    protected array $initialized = [];

    protected ?Error $error = null;

    /**
     * @param Error $error
     */
    public function __construct($error = null)
    {
        if ($error !== null) {
            $this->setError($error);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function setError(Error $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}
