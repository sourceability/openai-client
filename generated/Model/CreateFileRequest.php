<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateFileRequest
{
    protected array $initialized = [];

    /**
     * Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
    If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
     */
    protected ?string $file = null;

    /**
     * The intended purpose of the uploaded documents.
    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
     */
    protected ?string $purpose = null;

    /**
     * @param string|null $file Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
                   If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
     * @param string|null $purpose The intended purpose of the uploaded documents.
                      Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
     */
    public function __construct(?string $file = null, ?string $purpose = null)
    {
        $this->file = $file;
        $this->purpose = $purpose;
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
    If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
    If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
     */
    public function setFile(string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }

    /**
     * The intended purpose of the uploaded documents.
    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * The intended purpose of the uploaded documents.
    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
     */
    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
}
