<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

/**
 * @deprecated
 */
class CreateEditResponse extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A list of edit choices. Can be more than one if `n` is greater than 1.
     *
     * @var CreateEditResponseChoicesItem[]
     */
    protected ?array $choices = null;

    /**
     * The object type, which is always `edit`.
     */
    protected string $object = 'edit';

    /**
     * The Unix timestamp (in seconds) of when the edit was created.
     */
    protected ?int $created = null;

    /**
     * Usage statistics for the completion request.
     */
    protected ?CompletionUsage $usage = null;

    /**
     * @param CreateEditResponseChoicesItem[] $choices A list of edit choices. Can be more than one if `n` is greater than 1.
     * @param int $created The Unix timestamp (in seconds) of when the edit was created.
     * @param CompletionUsage $usage Usage statistics for the completion request.
     * @param string $object The object type, which is always `edit`.
     */
    public function __construct($choices = null, $created = null, $usage = null, $object = null)
    {
        if ($choices !== null) {
            $this->setChoices($choices);
        }
        if ($created !== null) {
            $this->setCreated($created);
        }
        if ($usage !== null) {
            $this->setUsage($usage);
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
     * A list of edit choices. Can be more than one if `n` is greater than 1.
     *
     * @return CreateEditResponseChoicesItem[]
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * A list of edit choices. Can be more than one if `n` is greater than 1.
     *
     * @param CreateEditResponseChoicesItem[] $choices
     */
    public function setChoices(array $choices): self
    {
        $this->initialized['choices'] = true;
        $this->choices = $choices;
        return $this;
    }

    /**
     * The object type, which is always `edit`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `edit`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) of when the edit was created.
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * The Unix timestamp (in seconds) of when the edit was created.
     */
    public function setCreated(int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * Usage statistics for the completion request.
     */
    public function getUsage(): CompletionUsage
    {
        return $this->usage;
    }

    /**
     * Usage statistics for the completion request.
     */
    public function setUsage(CompletionUsage $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}
