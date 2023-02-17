<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateSearchRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Query to search against the documents.
     */
    protected ?string $query = null;

    /**
     * Up to 200 documents to search over, provided as a list of strings.

     *
     * @var string[]|null
     */
    protected ?array $documents = null;

    /**
     * The ID of an uploaded file that contains documents to search over.
    You should specify either `documents` or a `file`, but not both.
     */
    protected ?string $file = null;

    /**
     * The maximum number of documents to be re-ranked and returned by search.
    This flag only takes effect when `file` is set.
     */
    protected ?int $maxRerank = 200;

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    protected ?bool $returnMetadata = false;

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    protected ?string $user = null;

    /**
     * @param string $query Query to search against the documents.
     * @param string[]|null $documents Up to 200 documents to search over, provided as a list of strings.
     *                                 The maximum document length (in tokens) is 2034 minus the number of tokens in the query.
     *                                 You should specify either `documents` or a `file`, but not both.
     * @param string|null $file The ID of an uploaded file that contains documents to search over.
     *                          You should specify either `documents` or a `file`, but not both.
     * @param int|null $maxRerank The maximum number of documents to be re-ranked and returned by search.
     *                            This flag only takes effect when `file` is set.
     * @param bool|null $returnMetadata A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
     *                                  This flag only takes effect when `file` is set.
     * @param string $user A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function __construct($query = null, $documents = null, $file = null, $maxRerank = 200, $returnMetadata = false, $user = null)
    {
        if ($query !== null) {
            $this->setQuery($query);
        }
        if ($documents !== null) {
            $this->setDocuments($documents);
        }
        if ($file !== null) {
            $this->setFile($file);
        }
        if ($maxRerank !== null) {
            $this->setMaxRerank($maxRerank);
        }
        if ($returnMetadata !== null) {
            $this->setReturnMetadata($returnMetadata);
        }
        if ($user !== null) {
            $this->setUser($user);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Query to search against the documents.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Query to search against the documents.
     */
    public function setQuery(string $query): self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }

    /**
     * Up to 200 documents to search over, provided as a list of strings.

     *
     * @return string[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Up to 200 documents to search over, provided as a list of strings.
     *
     * @param string[]|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }

    /**
     * The ID of an uploaded file that contains documents to search over.
    You should specify either `documents` or a `file`, but not both.
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * The ID of an uploaded file that contains documents to search over.
    You should specify either `documents` or a `file`, but not both.
     */
    public function setFile(?string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }

    /**
     * The maximum number of documents to be re-ranked and returned by search.
    This flag only takes effect when `file` is set.
     */
    public function getMaxRerank(): ?int
    {
        return $this->maxRerank;
    }

    /**
     * The maximum number of documents to be re-ranked and returned by search.
    This flag only takes effect when `file` is set.
     */
    public function setMaxRerank(?int $maxRerank): self
    {
        $this->initialized['maxRerank'] = true;
        $this->maxRerank = $maxRerank;
        return $this;
    }

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    public function getReturnMetadata(): ?bool
    {
        return $this->returnMetadata;
    }

    /**
     * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    This flag only takes effect when `file` is set.
     */
    public function setReturnMetadata(?bool $returnMetadata): self
    {
        $this->initialized['returnMetadata'] = true;
        $this->returnMetadata = $returnMetadata;
        return $this;
    }

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}
