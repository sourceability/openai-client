<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsToolCallsRetrievalObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the tool call object.
     */
    protected ?string $id = null;

    /**
     * The type of tool call. This is always going to be `retrieval` for this type of tool call.
     */
    protected ?string $type = null;

    /**
     * For now, this is always going to be an empty object.
     *
     * @var array<string, mixed>
     */
    protected ?iterable $retrieval = null;

    /**
     * @param string $id The ID of the tool call object.
     * @param string $type The type of tool call. This is always going to be `retrieval` for this type of tool call.
     * @param array<string, mixed> $retrieval For now, this is always going to be an empty object.
     */
    public function __construct($id = null, $type = null, $retrieval = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($type !== null) {
            $this->setType($type);
        }
        if ($retrieval !== null) {
            $this->setRetrieval($retrieval);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the tool call object.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The ID of the tool call object.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * The type of tool call. This is always going to be `retrieval` for this type of tool call.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of tool call. This is always going to be `retrieval` for this type of tool call.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * For now, this is always going to be an empty object.
     *
     * @return array<string, mixed>
     */
    public function getRetrieval(): iterable
    {
        return $this->retrieval;
    }

    /**
     * For now, this is always going to be an empty object.
     *
     * @param array<string, mixed> $retrieval
     */
    public function setRetrieval(iterable $retrieval): self
    {
        $this->initialized['retrieval'] = true;
        $this->retrieval = $retrieval;
        return $this;
    }
}
