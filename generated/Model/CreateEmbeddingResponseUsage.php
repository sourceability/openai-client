<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEmbeddingResponseUsage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The number of tokens used by the prompt.
     */
    protected ?int $promptTokens = null;

    /**
     * The total number of tokens used by the request.
     */
    protected ?int $totalTokens = null;

    /**
     * @param int $promptTokens The number of tokens used by the prompt.
     * @param int $totalTokens The total number of tokens used by the request.
     */
    public function __construct($promptTokens = null, $totalTokens = null)
    {
        if ($promptTokens !== null) {
            $this->setPromptTokens($promptTokens);
        }
        if ($totalTokens !== null) {
            $this->setTotalTokens($totalTokens);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The number of tokens used by the prompt.
     */
    public function getPromptTokens(): int
    {
        return $this->promptTokens;
    }

    /**
     * The number of tokens used by the prompt.
     */
    public function setPromptTokens(int $promptTokens): self
    {
        $this->initialized['promptTokens'] = true;
        $this->promptTokens = $promptTokens;
        return $this;
    }

    /**
     * The total number of tokens used by the request.
     */
    public function getTotalTokens(): int
    {
        return $this->totalTokens;
    }

    /**
     * The total number of tokens used by the request.
     */
    public function setTotalTokens(int $totalTokens): self
    {
        $this->initialized['totalTokens'] = true;
        $this->totalTokens = $totalTokens;
        return $this;
    }
}
