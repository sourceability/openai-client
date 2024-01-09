<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentTextAnnotationsFilePathObjectFilePath extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the file that was generated.
     */
    protected ?string $fileId = null;

    /**
     * @param string $fileId The ID of the file that was generated.
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
     * The ID of the file that was generated.
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * The ID of the file that was generated.
     */
    public function setFileId(string $fileId): self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }
}
