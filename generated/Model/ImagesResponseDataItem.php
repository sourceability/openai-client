<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class ImagesResponseDataItem extends ArrayObject
{
    protected array $initialized = [];

    protected string $url;

    protected string $b64Json;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }

    public function getB64Json(): string
    {
        return $this->b64Json;
    }

    public function setB64Json(string $b64Json): self
    {
        $this->initialized['b64Json'] = true;
        $this->b64Json = $b64Json;
        return $this;
    }
}
