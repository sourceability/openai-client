<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEditResponseChoicesItemLogprobs extends ArrayObject
{
    protected array $initialized = [];

    /**
     * @var string[]|null
     */
    protected ?array $tokens = null;

    /**
     * @var float[]|null
     */
    protected ?array $tokenLogprobs = null;

    /**
     * @var mixed[][]|null
     */
    protected ?array $topLogprobs = null;

    /**
     * @var int[]|null
     */
    protected ?array $textOffset = null;

    /**
     * @param string[]|null $tokens
     * @param float[]|null $tokenLogprobs
     * @param mixed[][]|null $topLogprobs
     * @param int[]|null $textOffset
     */
    public function __construct(?array $tokens = null, ?array $tokenLogprobs = null, ?array $topLogprobs = null, ?array $textOffset = null)
    {
        $this->tokens = $tokens;
        $this->tokenLogprobs = $tokenLogprobs;
        $this->topLogprobs = $topLogprobs;
        $this->textOffset = $textOffset;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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
     * @return mixed[][]
     */
    public function getTopLogprobs(): array
    {
        return $this->topLogprobs;
    }

    /**
     * @param mixed[][] $topLogprobs
     */
    public function setTopLogprobs(array $topLogprobs): self
    {
        $this->initialized['topLogprobs'] = true;
        $this->topLogprobs = $topLogprobs;
        return $this;
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
}
