<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentTextAnnotationsFileCitationObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `file_citation`.
     */
    protected ?string $type = null;

    /**
     * The text in the message content that needs to be replaced.
     */
    protected ?string $text = null;

    protected ?MessageContentTextAnnotationsFileCitationObjectFileCitation $fileCitation = null;

    protected ?int $startIndex = null;

    protected ?int $endIndex = null;

    /**
     * @param string $type Always `file_citation`.
     * @param string $text The text in the message content that needs to be replaced.
     * @param MessageContentTextAnnotationsFileCitationObjectFileCitation $fileCitation
     * @param int $startIndex
     * @param int $endIndex
     */
    public function __construct($type = null, $text = null, $fileCitation = null, $startIndex = null, $endIndex = null)
    {
        if ($type !== null) {
            $this->setType($type);
        }
        if ($text !== null) {
            $this->setText($text);
        }
        if ($fileCitation !== null) {
            $this->setFileCitation($fileCitation);
        }
        if ($startIndex !== null) {
            $this->setStartIndex($startIndex);
        }
        if ($endIndex !== null) {
            $this->setEndIndex($endIndex);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Always `file_citation`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `file_citation`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * The text in the message content that needs to be replaced.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * The text in the message content that needs to be replaced.
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }

    public function getFileCitation(): MessageContentTextAnnotationsFileCitationObjectFileCitation
    {
        return $this->fileCitation;
    }

    public function setFileCitation(MessageContentTextAnnotationsFileCitationObjectFileCitation $fileCitation): self
    {
        $this->initialized['fileCitation'] = true;
        $this->fileCitation = $fileCitation;
        return $this;
    }

    public function getStartIndex(): int
    {
        return $this->startIndex;
    }

    public function setStartIndex(int $startIndex): self
    {
        $this->initialized['startIndex'] = true;
        $this->startIndex = $startIndex;
        return $this;
    }

    public function getEndIndex(): int
    {
        return $this->endIndex;
    }

    public function setEndIndex(int $endIndex): self
    {
        $this->initialized['endIndex'] = true;
        $this->endIndex = $endIndex;
        return $this;
    }
}
