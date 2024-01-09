<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class Image extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The base64-encoded JSON of the generated image, if `response_format` is `b64_json`.
     */
    protected ?string $b64Json = null;

    /**
     * The URL of the generated image, if `response_format` is `url` (default).
     */
    protected ?string $url = null;

    /**
     * The prompt that was used to generate the image, if there was any revision to the prompt.
     */
    protected ?string $revisedPrompt = null;

    /**
     * @param string $b64Json The base64-encoded JSON of the generated image, if `response_format` is `b64_json`.
     * @param string $url The URL of the generated image, if `response_format` is `url` (default).
     * @param string $revisedPrompt The prompt that was used to generate the image, if there was any revision to the prompt.
     */
    public function __construct($b64Json = null, $url = null, $revisedPrompt = null)
    {
        if ($b64Json !== null) {
            $this->setB64Json($b64Json);
        }
        if ($url !== null) {
            $this->setUrl($url);
        }
        if ($revisedPrompt !== null) {
            $this->setRevisedPrompt($revisedPrompt);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The base64-encoded JSON of the generated image, if `response_format` is `b64_json`.
     */
    public function getB64Json(): string
    {
        return $this->b64Json;
    }

    /**
     * The base64-encoded JSON of the generated image, if `response_format` is `b64_json`.
     */
    public function setB64Json(string $b64Json): self
    {
        $this->initialized['b64Json'] = true;
        $this->b64Json = $b64Json;
        return $this;
    }

    /**
     * The URL of the generated image, if `response_format` is `url` (default).
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The URL of the generated image, if `response_format` is `url` (default).
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }

    /**
     * The prompt that was used to generate the image, if there was any revision to the prompt.
     */
    public function getRevisedPrompt(): string
    {
        return $this->revisedPrompt;
    }

    /**
     * The prompt that was used to generate the image, if there was any revision to the prompt.
     */
    public function setRevisedPrompt(string $revisedPrompt): self
    {
        $this->initialized['revisedPrompt'] = true;
        $this->revisedPrompt = $revisedPrompt;
        return $this;
    }
}
