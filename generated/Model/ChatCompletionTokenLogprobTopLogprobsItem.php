<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionTokenLogprobTopLogprobsItem extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The token.
     */
    protected ?string $token = null;

    /**
     * The log probability of this token.
     */
    protected ?float $logprob = null;

    /**
     * A list of integers representing the UTF-8 bytes representation of the token. Useful in instances where characters are represented by multiple tokens and their byte representations must be combined to generate the correct text representation. Can be `null` if there is no bytes representation for the token.
     *
     * @var int[]|null
     */
    protected $bytes = null;

    /**
     * @param string $token The token.
     * @param float $logprob The log probability of this token.
     * @param int[]|null $bytes A list of integers representing the UTF-8 bytes representation of the token. Useful in instances where characters are represented by multiple tokens and their byte representations must be combined to generate the correct text representation. Can be `null` if there is no bytes representation for the token.
     */
    public function __construct($token = null, $logprob = null, $bytes = null)
    {
        if ($token !== null) {
            $this->setToken($token);
        }
        if ($logprob !== null) {
            $this->setLogprob($logprob);
        }
        if ($bytes !== null) {
            $this->setBytes($bytes);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The token.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * The token.
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }

    /**
     * The log probability of this token.
     */
    public function getLogprob(): float
    {
        return $this->logprob;
    }

    /**
     * The log probability of this token.
     */
    public function setLogprob(float $logprob): self
    {
        $this->initialized['logprob'] = true;
        $this->logprob = $logprob;
        return $this;
    }

    /**
     * A list of integers representing the UTF-8 bytes representation of the token. Useful in instances where characters are represented by multiple tokens and their byte representations must be combined to generate the correct text representation. Can be `null` if there is no bytes representation for the token.
     *
     * @return int[]|null
     */
    public function getBytes(): ?array
    {
        return $this->bytes;
    }

    /**
     * A list of integers representing the UTF-8 bytes representation of the token. Useful in instances where characters are represented by multiple tokens and their byte representations must be combined to generate the correct text representation. Can be `null` if there is no bytes representation for the token.
     *
     * @param int[]|null $bytes
     */
    public function setBytes(?array $bytes): self
    {
        $this->initialized['bytes'] = true;
        $this->bytes = $bytes;
        return $this;
    }
}
