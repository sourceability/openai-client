<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateAssistantFileRequest
{
    protected array $initialized = [];

    /**
     * A [File](/docs/api-reference/files) ID (with `purpose="assistants"`) that the assistant should use. Useful for tools like `retrieval` and `code_interpreter` that can access files.
     */
    protected ?string $fileId = null;

    /**
     * @param string $fileId A [File](/docs/api-reference/files) ID (with `purpose="assistants"`) that the assistant should use. Useful for tools like `retrieval` and `code_interpreter` that can access files.
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
     * A [File](/docs/api-reference/files) ID (with `purpose="assistants"`) that the assistant should use. Useful for tools like `retrieval` and `code_interpreter` that can access files.
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * A [File](/docs/api-reference/files) ID (with `purpose="assistants"`) that the assistant should use. Useful for tools like `retrieval` and `code_interpreter` that can access files.
     */
    public function setFileId(string $fileId): self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }
}
