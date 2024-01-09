<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateImageRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A text description of the desired image(s). The maximum length is 1000 characters for `dall-e-2` and 4000 characters for `dall-e-3`.
     */
    protected ?string $prompt = null;

    /**
     * The model to use for image generation.
     */
    protected string $model = 'dall-e-2';

    /**
     * The number of images to generate. Must be between 1 and 10. For `dall-e-3`, only `n=1` is supported.
     */
    protected ?int $n = 1;

    /**
     * The quality of the image that will be generated. `hd` creates images with finer details and greater consistency across the image. This param is only supported for `dall-e-3`.
     */
    protected string $quality = 'standard';

    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     */
    protected ?string $responseFormat = 'url';

    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024` for `dall-e-2`. Must be one of `1024x1024`, `1792x1024`, or `1024x1792` for `dall-e-3` models.
     */
    protected ?string $size = '1024x1024';

    /**
     * The style of the generated images. Must be one of `vivid` or `natural`. Vivid causes the model to lean towards generating hyper-real and dramatic images. Natural causes the model to produce more natural, less hyper-real looking images. This param is only supported for `dall-e-3`.
     */
    protected ?string $style = 'vivid';

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected ?string $user = null;

    /**
     * @param string $prompt A text description of the desired image(s). The maximum length is 1000 characters for `dall-e-2` and 4000 characters for `dall-e-3`.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     * @param string|string|null $model The model to use for image generation.
     * @param int|null $n The number of images to generate. Must be between 1 and 10. For `dall-e-3`, only `n=1` is supported.
     * @param string $quality The quality of the image that will be generated. `hd` creates images with finer details and greater consistency across the image. This param is only supported for `dall-e-3`.
     * @param string|null $responseFormat The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     * @param string|null $size The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024` for `dall-e-2`. Must be one of `1024x1024`, `1792x1024`, or `1024x1792` for `dall-e-3` models.
     * @param string|null $style The style of the generated images. Must be one of `vivid` or `natural`. Vivid causes the model to lean towards generating hyper-real and dramatic images. Natural causes the model to produce more natural, less hyper-real looking images. This param is only supported for `dall-e-3`.
     */
    public function __construct($prompt = null, $user = null, $model = 'dall-e-2', $n = 1, $quality = 'standard', $responseFormat = 'url', $size = '1024x1024', $style = 'vivid')
    {
        if ($prompt !== null) {
            $this->setPrompt($prompt);
        }
        if ($user !== null) {
            $this->setUser($user);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($n !== null) {
            $this->setN($n);
        }
        if ($quality !== null) {
            $this->setQuality($quality);
        }
        if ($responseFormat !== null) {
            $this->setResponseFormat($responseFormat);
        }
        if ($size !== null) {
            $this->setSize($size);
        }
        if ($style !== null) {
            $this->setStyle($style);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A text description of the desired image(s). The maximum length is 1000 characters for `dall-e-2` and 4000 characters for `dall-e-3`.
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * A text description of the desired image(s). The maximum length is 1000 characters for `dall-e-2` and 4000 characters for `dall-e-3`.
     */
    public function setPrompt(string $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }

    /**
     * The model to use for image generation.
     *
     * @return string|string|null
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The model to use for image generation.
     *
     * @param string|string|null $model
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The number of images to generate. Must be between 1 and 10. For `dall-e-3`, only `n=1` is supported.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * The number of images to generate. Must be between 1 and 10. For `dall-e-3`, only `n=1` is supported.
     */
    public function setN(?int $n): self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }

    /**
     * The quality of the image that will be generated. `hd` creates images with finer details and greater consistency across the image. This param is only supported for `dall-e-3`.
     */
    public function getQuality(): string
    {
        return $this->quality;
    }

    /**
     * The quality of the image that will be generated. `hd` creates images with finer details and greater consistency across the image. This param is only supported for `dall-e-3`.
     */
    public function setQuality(string $quality): self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;
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
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024` for `dall-e-2`. Must be one of `1024x1024`, `1792x1024`, or `1024x1792` for `dall-e-3` models.
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024` for `dall-e-2`. Must be one of `1024x1024`, `1792x1024`, or `1024x1792` for `dall-e-3` models.
     */
    public function setSize(?string $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }

    /**
     * The style of the generated images. Must be one of `vivid` or `natural`. Vivid causes the model to lean towards generating hyper-real and dramatic images. Natural causes the model to produce more natural, less hyper-real looking images. This param is only supported for `dall-e-3`.
     */
    public function getStyle(): ?string
    {
        return $this->style;
    }

    /**
     * The style of the generated images. Must be one of `vivid` or `natural`. Vivid causes the model to lean towards generating hyper-real and dramatic images. Natural causes the model to produce more natural, less hyper-real looking images. This param is only supported for `dall-e-3`.
     */
    public function setStyle(?string $style): self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
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
