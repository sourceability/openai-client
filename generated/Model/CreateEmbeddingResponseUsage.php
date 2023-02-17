<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEmbeddingResponseUsage extends ArrayObject
{
    protected array $initialized = [];

    protected ?int $promptTokens = null;

    protected ?int $totalTokens = null;

    /**
     * @param int $promptTokens
     * @param int $totalTokens
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

    public function getPromptTokens(): int
    {
        return $this->promptTokens;
    }

    public function setPromptTokens(int $promptTokens): self
    {
        $this->initialized['promptTokens'] = true;
        $this->promptTokens = $promptTokens;
        return $this;
    }

    public function getTotalTokens(): int
    {
        return $this->totalTokens;
    }

    public function setTotalTokens(int $totalTokens): self
    {
        $this->initialized['totalTokens'] = true;
        $this->totalTokens = $totalTokens;
        return $this;
    }
}
