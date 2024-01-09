<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsCodeOutputImageObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `image`.
     */
    protected string $type = 'image';

    protected ?RunStepDetailsToolCallsCodeOutputImageObjectImage $image = null;

    /**
     * @param RunStepDetailsToolCallsCodeOutputImageObjectImage $image
     * @param string $type Always `image`.
     */
    public function __construct($image = null, $type = null)
    {
        if ($image !== null) {
            $this->setImage($image);
        }
        if ($type !== null) {
            $this->setType($type);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Always `image`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `image`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    public function getImage(): RunStepDetailsToolCallsCodeOutputImageObjectImage
    {
        return $this->image;
    }

    public function setImage(RunStepDetailsToolCallsCodeOutputImageObjectImage $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}
