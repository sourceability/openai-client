<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateImageEditRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     *
     * @var string
     */
    protected $image;
    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     *
     * @var string
     */
    protected $mask;
    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     *
     * @var string
     */
    protected $prompt;
    /**
     * The number of images to generate. Must be between 1 and 10.
     *
     * @var int|null
     */
    protected $n = 1;
    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     *
     * @var string|null
     */
    protected $size = '1024x1024';
    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     *
     * @var string|null
     */
    protected $responseFormat = 'url';
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @var string
     */
    protected $user;
    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     *
     * @return string
     */
    public function getMask() : string
    {
        return $this->mask;
    }
    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     *
     * @param string $mask
     *
     * @return self
     */
    public function setMask(string $mask) : self
    {
        $this->initialized['mask'] = true;
        $this->mask = $mask;
        return $this;
    }
    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     *
     * @return string
     */
    public function getPrompt() : string
    {
        return $this->prompt;
    }
    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     *
     * @param string $prompt
     *
     * @return self
     */
    public function setPrompt(string $prompt) : self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }
    /**
     * The number of images to generate. Must be between 1 and 10.
     *
     * @return int|null
     */
    public function getN() : ?int
    {
        return $this->n;
    }
    /**
     * The number of images to generate. Must be between 1 and 10.
     *
     * @param int|null $n
     *
     * @return self
     */
    public function setN(?int $n) : self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }
    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     *
     * @return string|null
     */
    public function getSize() : ?string
    {
        return $this->size;
    }
    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     *
     * @param string|null $size
     *
     * @return self
     */
    public function setSize(?string $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     *
     * @return string|null
     */
    public function getResponseFormat() : ?string
    {
        return $this->responseFormat;
    }
    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     *
     * @param string|null $responseFormat
     *
     * @return self
     */
    public function setResponseFormat(?string $responseFormat) : self
    {
        $this->initialized['responseFormat'] = true;
        $this->responseFormat = $responseFormat;
        return $this;
    }
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}