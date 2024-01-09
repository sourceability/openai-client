<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentTextAnnotationsFileCitationObjectFileCitation extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the specific File the citation is from.
     */
    protected ?string $fileId = null;

    /**
     * The specific quote in the file.
     */
    protected ?string $quote = null;

    /**
     * @param string $fileId The ID of the specific File the citation is from.
     * @param string $quote The specific quote in the file.
     */
    public function __construct($fileId = null, $quote = null)
    {
        if ($fileId !== null) {
            $this->setFileId($fileId);
        }
        if ($quote !== null) {
            $this->setQuote($quote);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the specific File the citation is from.
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * The ID of the specific File the citation is from.
     */
    public function setFileId(string $fileId): self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * The specific quote in the file.
     */
    public function getQuote(): string
    {
        return $this->quote;
    }

    /**
     * The specific quote in the file.
     */
    public function setQuote(string $quote): self
    {
        $this->initialized['quote'] = true;
        $this->quote = $quote;
        return $this;
    }
}
