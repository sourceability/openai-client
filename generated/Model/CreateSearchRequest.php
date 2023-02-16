<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateSearchRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Query to search against the documents.
     *
     * @var string
     */
    protected $query;
    /**
    * Up to 200 documents to search over, provided as a list of strings.
    
    The maximum document length (in tokens) is 2034 minus the number of tokens in the query.
    
    You should specify either `documents` or a `file`, but not both.
    
    *
    * @var string[]|null
    */
    protected $documents;
    /**
    * The ID of an uploaded file that contains documents to search over.
    
    You should specify either `documents` or a `file`, but not both.
    
    *
    * @var string|null
    */
    protected $file;
    /**
    * The maximum number of documents to be re-ranked and returned by search.
    
    This flag only takes effect when `file` is set.
    
    *
    * @var int|null
    */
    protected $maxRerank = 200;
    /**
    * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    
    This flag only takes effect when `file` is set.
    
    *
    * @var bool|null
    */
    protected $returnMetadata = false;
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @var string
     */
    protected $user;
    /**
     * Query to search against the documents.
     *
     * @return string
     */
    public function getQuery() : string
    {
        return $this->query;
    }
    /**
     * Query to search against the documents.
     *
     * @param string $query
     *
     * @return self
     */
    public function setQuery(string $query) : self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }
    /**
    * Up to 200 documents to search over, provided as a list of strings.
    
    The maximum document length (in tokens) is 2034 minus the number of tokens in the query.
    
    You should specify either `documents` or a `file`, but not both.
    
    *
    * @return string[]|null
    */
    public function getDocuments() : ?array
    {
        return $this->documents;
    }
    /**
    * Up to 200 documents to search over, provided as a list of strings.
    
    The maximum document length (in tokens) is 2034 minus the number of tokens in the query.
    
    You should specify either `documents` or a `file`, but not both.
    
    *
    * @param string[]|null $documents
    *
    * @return self
    */
    public function setDocuments(?array $documents) : self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
    /**
    * The ID of an uploaded file that contains documents to search over.
    
    You should specify either `documents` or a `file`, but not both.
    
    *
    * @return string|null
    */
    public function getFile() : ?string
    {
        return $this->file;
    }
    /**
    * The ID of an uploaded file that contains documents to search over.
    
    You should specify either `documents` or a `file`, but not both.
    
    *
    * @param string|null $file
    *
    * @return self
    */
    public function setFile(?string $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
    * The maximum number of documents to be re-ranked and returned by search.
    
    This flag only takes effect when `file` is set.
    
    *
    * @return int|null
    */
    public function getMaxRerank() : ?int
    {
        return $this->maxRerank;
    }
    /**
    * The maximum number of documents to be re-ranked and returned by search.
    
    This flag only takes effect when `file` is set.
    
    *
    * @param int|null $maxRerank
    *
    * @return self
    */
    public function setMaxRerank(?int $maxRerank) : self
    {
        $this->initialized['maxRerank'] = true;
        $this->maxRerank = $maxRerank;
        return $this;
    }
    /**
    * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    
    This flag only takes effect when `file` is set.
    
    *
    * @return bool|null
    */
    public function getReturnMetadata() : ?bool
    {
        return $this->returnMetadata;
    }
    /**
    * A special boolean flag for showing metadata. If set to `true`, each document entry in the returned JSON will contain a "metadata" field.
    
    This flag only takes effect when `file` is set.
    
    *
    * @param bool|null $returnMetadata
    *
    * @return self
    */
    public function setReturnMetadata(?bool $returnMetadata) : self
    {
        $this->initialized['returnMetadata'] = true;
        $this->returnMetadata = $returnMetadata;
        return $this;
    }
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}