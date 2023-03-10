<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateImageEditRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     */
    protected ?string $image = null;

    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     */
    protected ?string $mask = null;

    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     */
    protected ?string $prompt = null;

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
    protected ?string $user = null;

    /**
     * @param string $image The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     * @param string $mask An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     * @param string $prompt A text description of the desired image(s). The maximum length is 1000 characters.
     * @param int|null $n The number of images to generate. Must be between 1 and 10.
     * @param string|null $size The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     * @param string|null $responseFormat The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function __construct($image = null, $mask = null, $prompt = null, $n = 1, $size = '1024x1024', $responseFormat = 'url', $user = null)
    {
        if ($image !== null) {
            $this->setImage($image);
        }
        if ($mask !== null) {
            $this->setMask($mask);
        }
        if ($prompt !== null) {
            $this->setPrompt($prompt);
        }
        if ($n !== null) {
            $this->setN($n);
        }
        if ($size !== null) {
            $this->setSize($size);
        }
        if ($responseFormat !== null) {
            $this->setResponseFormat($responseFormat);
        }
        if ($user !== null) {
            $this->setUser($user);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }

    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     */
    public function getMask(): string
    {
        return $this->mask;
    }

    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     */
    public function setMask(string $mask): self
    {
        $this->initialized['mask'] = true;
        $this->mask = $mask;
        return $this;
    }

    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     */
    public function setPrompt(string $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
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
