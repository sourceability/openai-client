<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CompletionUsage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Number of tokens in the generated completion.
     */
    protected ?int $completionTokens = null;

    /**
     * Number of tokens in the prompt.
     */
    protected ?int $promptTokens = null;

    /**
     * Total number of tokens used in the request (prompt + completion).
     */
    protected ?int $totalTokens = null;

    /**
     * @param int $completionTokens Number of tokens in the generated completion.
     * @param int $promptTokens Number of tokens in the prompt.
     * @param int $totalTokens Total number of tokens used in the request (prompt + completion).
     */
    public function __construct($completionTokens = null, $promptTokens = null, $totalTokens = null)
    {
        if ($completionTokens !== null) {
            $this->setCompletionTokens($completionTokens);
        }
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
     * Number of tokens in the generated completion.
     */
    public function getCompletionTokens(): int
    {
        return $this->completionTokens;
    }

    /**
     * Number of tokens in the generated completion.
     */
    public function setCompletionTokens(int $completionTokens): self
    {
        $this->initialized['completionTokens'] = true;
        $this->completionTokens = $completionTokens;
        return $this;
    }

    /**
     * Number of tokens in the prompt.
     */
    public function getPromptTokens(): int
    {
        return $this->promptTokens;
    }

    /**
     * Number of tokens in the prompt.
     */
    public function setPromptTokens(int $promptTokens): self
    {
        $this->initialized['promptTokens'] = true;
        $this->promptTokens = $promptTokens;
        return $this;
    }

    /**
     * Total number of tokens used in the request (prompt + completion).
     */
    public function getTotalTokens(): int
    {
        return $this->totalTokens;
    }

    /**
     * Total number of tokens used in the request (prompt + completion).
     */
    public function setTotalTokens(int $totalTokens): self
    {
        $this->initialized['totalTokens'] = true;
        $this->totalTokens = $totalTokens;
        return $this;
    }
}
