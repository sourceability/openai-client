<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateCompletionResponseChoicesItemLogprobs extends ArrayObject
{
    protected array $initialized = [];

    /**
     * @var int[]
     */
    protected ?array $textOffset = null;

    /**
     * @var float[]
     */
    protected ?array $tokenLogprobs = null;

    /**
     * @var string[]
     */
    protected ?array $tokens = null;

    /**
     * @var array<string, float>[]
     */
    protected ?array $topLogprobs = null;

    /**
     * @param int[] $textOffset
     * @param float[] $tokenLogprobs
     * @param string[] $tokens
     * @param array<string, float>[] $topLogprobs
     */
    public function __construct($textOffset = null, $tokenLogprobs = null, $tokens = null, $topLogprobs = null)
    {
        if ($textOffset !== null) {
            $this->setTextOffset($textOffset);
        }
        if ($tokenLogprobs !== null) {
            $this->setTokenLogprobs($tokenLogprobs);
        }
        if ($tokens !== null) {
            $this->setTokens($tokens);
        }
        if ($topLogprobs !== null) {
            $this->setTopLogprobs($topLogprobs);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return int[]
     */
    public function getTextOffset(): array
    {
        return $this->textOffset;
    }

    /**
     * @param int[] $textOffset
     */
    public function setTextOffset(array $textOffset): self
    {
        $this->initialized['textOffset'] = true;
        $this->textOffset = $textOffset;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getTokenLogprobs(): array
    {
        return $this->tokenLogprobs;
    }

    /**
     * @param float[] $tokenLogprobs
     */
    public function setTokenLogprobs(array $tokenLogprobs): self
    {
        $this->initialized['tokenLogprobs'] = true;
        $this->tokenLogprobs = $tokenLogprobs;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTokens(): array
    {
        return $this->tokens;
    }

    /**
     * @param string[] $tokens
     */
    public function setTokens(array $tokens): self
    {
        $this->initialized['tokens'] = true;
        $this->tokens = $tokens;
        return $this;
    }

    /**
     * @return array<string, float>[]
     */
    public function getTopLogprobs(): array
    {
        return $this->topLogprobs;
    }

    /**
     * @param array<string, float>[] $topLogprobs
     */
    public function setTopLogprobs(array $topLogprobs): self
    {
        $this->initialized['topLogprobs'] = true;
        $this->topLogprobs = $topLogprobs;
        return $this;
    }
}
