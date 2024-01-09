<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateModerationRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The input text to classify
     *
     * @var mixed
     */
    protected $input = null;

    /**
     * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.

     *
     * @var mixed
     */
    protected string $model = 'text-moderation-latest';

    /**
     * @param mixed $input The input text to classify
     * @param mixed $model Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.
     *                     The default is `text-moderation-latest` which will be automatically upgraded over time. This ensures you are always using our most accurate model. If you use `text-moderation-stable`, we will provide advanced notice before updating the model. Accuracy of `text-moderation-stable` may be slightly lower than for `text-moderation-latest`.
     */
    public function __construct(mixed $input = null, mixed $model = 'text-moderation-latest')
    {
        if ($input !== null) {
            $this->setInput($input);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The input text to classify
     *
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * The input text to classify
     */
    public function setInput(mixed $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }

    /**
     * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.

     *
     * @return mixed
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.

    The default is `text-moderation-latest` which will be automatically upgraded over time. This ensures you are always using our most accurate model. If you use `text-moderation-stable`, we will provide advanced notice before updating the model. Accuracy of `text-moderation-stable` may be slightly lower than for `text-moderation-latest`.
     */
    public function setModel(mixed $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
}
