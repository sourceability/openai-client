<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class OpenAIFile extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The file identifier, which can be referenced in the API endpoints.
     */
    protected ?string $id = null;

    /**
     * The size of the file, in bytes.
     */
    protected ?int $bytes = null;

    /**
     * The Unix timestamp (in seconds) for when the file was created.
     */
    protected ?int $createdAt = null;

    /**
     * The name of the file.
     */
    protected ?string $filename = null;

    /**
     * The object type, which is always `file`.
     */
    protected string $object = 'file';

    /**
     * The intended purpose of the file. Supported values are `fine-tune`, `fine-tune-results`, `assistants`, and `assistants_output`.
     */
    protected ?string $purpose = null;

    /**
     * Deprecated. The current status of the file, which can be either `uploaded`, `processed`, or `error`.
     *
     * @deprecated
     */
    protected ?string $status = null;

    /**
     * Deprecated. For details on why a fine-tuning training file failed validation, see the `error` field on `fine_tuning.job`.
     *
     * @deprecated
     */
    protected ?string $statusDetails = null;

    /**
     * @param string $id The file identifier, which can be referenced in the API endpoints.
     * @param int $bytes The size of the file, in bytes.
     * @param int $createdAt The Unix timestamp (in seconds) for when the file was created.
     * @param string $filename The name of the file.
     * @param string $purpose The intended purpose of the file. Supported values are `fine-tune`, `fine-tune-results`, `assistants`, and `assistants_output`.
     * @param string $status Deprecated. The current status of the file, which can be either `uploaded`, `processed`, or `error`.
     * @param string $statusDetails Deprecated. For details on why a fine-tuning training file failed validation, see the `error` field on `fine_tuning.job`.
     * @param string $object The object type, which is always `file`.
     */
    public function __construct($id = null, $bytes = null, $createdAt = null, $filename = null, $purpose = null, $status = null, $statusDetails = null, $object = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($bytes !== null) {
            $this->setBytes($bytes);
        }
        if ($createdAt !== null) {
            $this->setCreatedAt($createdAt);
        }
        if ($filename !== null) {
            $this->setFilename($filename);
        }
        if ($purpose !== null) {
            $this->setPurpose($purpose);
        }
        if ($status !== null) {
            $this->setStatus($status);
        }
        if ($statusDetails !== null) {
            $this->setStatusDetails($statusDetails);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The file identifier, which can be referenced in the API endpoints.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The file identifier, which can be referenced in the API endpoints.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The size of the file, in bytes.
     */
    public function getBytes(): int
    {
        return $this->bytes;
    }

    /**
     * The size of the file, in bytes.
     */
    public function setBytes(int $bytes): self
    {
        $this->initialized['bytes'] = true;
        $this->bytes = $bytes;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) for when the file was created.
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * The Unix timestamp (in seconds) for when the file was created.
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * The name of the file.
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * The name of the file.
     */
    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }

    /**
     * The object type, which is always `file`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `file`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The intended purpose of the file. Supported values are `fine-tune`, `fine-tune-results`, `assistants`, and `assistants_output`.
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * The intended purpose of the file. Supported values are `fine-tune`, `fine-tune-results`, `assistants`, and `assistants_output`.
     */
    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Deprecated. The current status of the file, which can be either `uploaded`, `processed`, or `error`.
     *
     * @deprecated
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Deprecated. The current status of the file, which can be either `uploaded`, `processed`, or `error`.
     *
     * @deprecated
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * Deprecated. For details on why a fine-tuning training file failed validation, see the `error` field on `fine_tuning.job`.
     *
     * @deprecated
     */
    public function getStatusDetails(): string
    {
        return $this->statusDetails;
    }

    /**
     * Deprecated. For details on why a fine-tuning training file failed validation, see the `error` field on `fine_tuning.job`.
     *
     * @deprecated
     */
    public function setStatusDetails(string $statusDetails): self
    {
        $this->initialized['statusDetails'] = true;
        $this->statusDetails = $statusDetails;
        return $this;
    }
}
