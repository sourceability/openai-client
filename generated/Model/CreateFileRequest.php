<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateFileRequest
{
    protected array $initialized = [];

    /**
     * The File object (not file name) to be uploaded.
     */
    protected ?string $file = null;

    /**
     * The intended purpose of the uploaded file.

    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tuning) and "assistants" for [Assistants](/docs/api-reference/assistants) and [Messages](/docs/api-reference/messages). This allows us to validate the format of the uploaded file is correct for fine-tuning.
     */
    protected ?string $purpose = null;

    /**
     * @param string $file The File object (not file name) to be uploaded.
     * @param string $purpose The intended purpose of the uploaded file.
     *                        Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tuning) and "assistants" for [Assistants](/docs/api-reference/assistants) and [Messages](/docs/api-reference/messages). This allows us to validate the format of the uploaded file is correct for fine-tuning.
     */
    public function __construct($file = null, $purpose = null)
    {
        if ($file !== null) {
            $this->setFile($file);
        }
        if ($purpose !== null) {
            $this->setPurpose($purpose);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The File object (not file name) to be uploaded.
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * The File object (not file name) to be uploaded.
     */
    public function setFile(string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }

    /**
     * The intended purpose of the uploaded file.

    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tuning) and "assistants" for [Assistants](/docs/api-reference/assistants) and [Messages](/docs/api-reference/messages). This allows us to validate the format of the uploaded file is correct for fine-tuning.
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * The intended purpose of the uploaded file.

    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tuning) and "assistants" for [Assistants](/docs/api-reference/assistants) and [Messages](/docs/api-reference/messages). This allows us to validate the format of the uploaded file is correct for fine-tuning.
     */
    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
}
