<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentImageFileObjectImageFile extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The [File](/docs/api-reference/files) ID of the image in the message content.
     */
    protected ?string $fileId = null;

    /**
     * @param string $fileId The [File](/docs/api-reference/files) ID of the image in the message content.
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
     * The [File](/docs/api-reference/files) ID of the image in the message content.
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * The [File](/docs/api-reference/files) ID of the image in the message content.
     */
    public function setFileId(string $fileId): self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }
}
