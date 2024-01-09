<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ChatCompletionRequestMessageContentPartImageImageUrl extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Either a URL of the image or the base64 encoded image data.
     */
    protected ?string $url = null;

    /**
     * Specifies the detail level of the image. Learn more in the [Vision guide](/docs/guides/vision/low-or-high-fidelity-image-understanding).
     */
    protected string $detail = 'auto';

    /**
     * @param string $url Either a URL of the image or the base64 encoded image data.
     * @param string $detail Specifies the detail level of the image. Learn more in the [Vision guide](/docs/guides/vision/low-or-high-fidelity-image-understanding).
     */
    public function __construct($url = null, $detail = 'auto')
    {
        if ($url !== null) {
            $this->setUrl($url);
        }
        if ($detail !== null) {
            $this->setDetail($detail);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Either a URL of the image or the base64 encoded image data.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Either a URL of the image or the base64 encoded image data.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }

    /**
     * Specifies the detail level of the image. Learn more in the [Vision guide](/docs/guides/vision/low-or-high-fidelity-image-understanding).
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * Specifies the detail level of the image. Learn more in the [Vision guide](/docs/guides/vision/low-or-high-fidelity-image-understanding).
     */
    public function setDetail(string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
}
