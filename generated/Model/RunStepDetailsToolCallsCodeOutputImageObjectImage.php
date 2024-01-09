<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsCodeOutputImageObjectImage extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The [file](/docs/api-reference/files) ID of the image.
     */
    protected ?string $fileId = null;

    /**
     * @param string $fileId The [file](/docs/api-reference/files) ID of the image.
     */
    public function __construct($fileId = null)
    {
        if ($fileId !== null) {
            $this->setFileId($fileId);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The [file](/docs/api-reference/files) ID of the image.
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * The [file](/docs/api-reference/files) ID of the image.
     */
    public function setFileId(string $fileId): self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }
}
