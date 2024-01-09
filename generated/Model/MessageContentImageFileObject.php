<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentImageFileObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `image_file`.
     */
    protected string $type = 'image_file';

    protected ?MessageContentImageFileObjectImageFile $imageFile = null;

    /**
     * @param MessageContentImageFileObjectImageFile $imageFile
     * @param string $type Always `image_file`.
     */
    public function __construct($imageFile = null, $type = null)
    {
        if ($imageFile !== null) {
            $this->setImageFile($imageFile);
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
     * Always `image_file`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `image_file`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    public function getImageFile(): MessageContentImageFileObjectImageFile
    {
        return $this->imageFile;
    }

    public function setImageFile(MessageContentImageFileObjectImageFile $imageFile): self
    {
        $this->initialized['imageFile'] = true;
        $this->imageFile = $imageFile;
        return $this;
    }
}
