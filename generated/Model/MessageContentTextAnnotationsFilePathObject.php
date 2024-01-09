<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class MessageContentTextAnnotationsFilePathObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `file_path`.
     */
    protected ?string $type = null;

    /**
     * The text in the message content that needs to be replaced.
     */
    protected ?string $text = null;

    protected ?MessageContentTextAnnotationsFilePathObjectFilePath $filePath = null;

    protected ?int $startIndex = null;

    protected ?int $endIndex = null;

    /**
     * @param string $type Always `file_path`.
     * @param string $text The text in the message content that needs to be replaced.
     * @param MessageContentTextAnnotationsFilePathObjectFilePath $filePath
     * @param int $startIndex
     * @param int $endIndex
     */
    public function __construct($type = null, $text = null, $filePath = null, $startIndex = null, $endIndex = null)
    {
        if ($type !== null) {
            $this->setType($type);
        }
        if ($text !== null) {
            $this->setText($text);
        }
        if ($filePath !== null) {
            $this->setFilePath($filePath);
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
     * Always `file_path`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `file_path`.
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

    public function getFilePath(): MessageContentTextAnnotationsFilePathObjectFilePath
    {
        return $this->filePath;
    }

    public function setFilePath(MessageContentTextAnnotationsFilePathObjectFilePath $filePath): self
    {
        $this->initialized['filePath'] = true;
        $this->filePath = $filePath;
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
