<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentTextObjectText extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The data that makes up the text.
     */
    protected ?string $value = null;

    /**
     * @var MessageContentTextAnnotationsFileCitationObject[]|MessageContentTextAnnotationsFilePathObject[]
     */
    protected ?array $annotations = null;

    /**
     * @param string $value The data that makes up the text.
     * @param MessageContentTextAnnotationsFileCitationObject[]|MessageContentTextAnnotationsFilePathObject[] $annotations
     */
    public function __construct($value = null, $annotations = null)
    {
        if ($value !== null) {
            $this->setValue($value);
        }
        if ($annotations !== null) {
            $this->setAnnotations($annotations);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The data that makes up the text.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The data that makes up the text.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }

    /**
     * @return MessageContentTextAnnotationsFileCitationObject[]|MessageContentTextAnnotationsFilePathObject[]
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @param MessageContentTextAnnotationsFileCitationObject[]|MessageContentTextAnnotationsFilePathObject[] $annotations
     */
    public function setAnnotations(array $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;
        return $this;
    }
}
