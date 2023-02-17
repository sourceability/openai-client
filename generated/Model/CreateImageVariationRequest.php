<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateImageVariationRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The image to use as the basis for the variation(s). Must be a valid PNG file, less than 4MB, and square.
     */
    protected string $image;

    /**
     * The number of images to generate. Must be between 1 and 10.
     */
    protected ?int $n = 1;

    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     */
    protected ?string $size = '1024x1024';

    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     */
    protected ?string $responseFormat = 'url';

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected string $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The image to use as the basis for the variation(s). Must be a valid PNG file, less than 4MB, and square.
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * The image to use as the basis for the variation(s). Must be a valid PNG file, less than 4MB, and square.
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }

    /**
     * The number of images to generate. Must be between 1 and 10.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * The number of images to generate. Must be between 1 and 10.
     */
    public function setN(?int $n): self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }

    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     */
    public function setSize(?string $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }

    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     */
    public function getResponseFormat(): ?string
    {
        return $this->responseFormat;
    }

    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     */
    public function setResponseFormat(?string $responseFormat): self
    {
        $this->initialized['responseFormat'] = true;
        $this->responseFormat = $responseFormat;
        return $this;
    }

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}
