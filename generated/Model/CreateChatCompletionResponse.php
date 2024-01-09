<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateChatCompletionResponse extends ArrayObject
{
    protected array $initialized = [];

    /**
     * A unique identifier for the chat completion.
     */
    protected ?string $id = null;

    /**
     * A list of chat completion choices. Can be more than one if `n` is greater than 1.
     *
     * @var CreateChatCompletionResponseChoicesItem[]
     */
    protected ?array $choices = null;

    /**
     * The Unix timestamp (in seconds) of when the chat completion was created.
     */
    protected ?int $created = null;

    /**
     * The model used for the chat completion.
     */
    protected ?string $model = null;

    /**
     * This fingerprint represents the backend configuration that the model runs with.

    Can be used in conjunction with the `seed` request parameter to understand when backend changes have been made that might impact determinism.
     */
    protected ?string $systemFingerprint = null;

    /**
     * The object type, which is always `chat.completion`.
     */
    protected ?string $object = null;

    /**
     * Usage statistics for the completion request.
     */
    protected ?CompletionUsage $usage = null;

    /**
     * @param string $id A unique identifier for the chat completion.
     * @param CreateChatCompletionResponseChoicesItem[] $choices A list of chat completion choices. Can be more than one if `n` is greater than 1.
     * @param int $created The Unix timestamp (in seconds) of when the chat completion was created.
     * @param string $model The model used for the chat completion.
     * @param string $systemFingerprint This fingerprint represents the backend configuration that the model runs with.
     *                                  Can be used in conjunction with the `seed` request parameter to understand when backend changes have been made that might impact determinism.
     * @param string $object The object type, which is always `chat.completion`.
     * @param CompletionUsage $usage Usage statistics for the completion request.
     */
    public function __construct($id = null, $choices = null, $created = null, $model = null, $systemFingerprint = null, $object = null, $usage = null)
    {
        if ($id !== null) {
            $this->setId($id);
        }
        if ($choices !== null) {
            $this->setChoices($choices);
        }
        if ($created !== null) {
            $this->setCreated($created);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($systemFingerprint !== null) {
            $this->setSystemFingerprint($systemFingerprint);
        }
        if ($object !== null) {
            $this->setObject($object);
        }
        if ($usage !== null) {
            $this->setUsage($usage);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * A unique identifier for the chat completion.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * A unique identifier for the chat completion.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * A list of chat completion choices. Can be more than one if `n` is greater than 1.
     *
     * @return CreateChatCompletionResponseChoicesItem[]
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * A list of chat completion choices. Can be more than one if `n` is greater than 1.
     *
     * @param CreateChatCompletionResponseChoicesItem[] $choices
     */
    public function setChoices(array $choices): self
    {
        $this->initialized['choices'] = true;
        $this->choices = $choices;
        return $this;
    }

    /**
     * The Unix timestamp (in seconds) of when the chat completion was created.
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * The Unix timestamp (in seconds) of when the chat completion was created.
     */
    public function setCreated(int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * The model used for the chat completion.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The model used for the chat completion.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * This fingerprint represents the backend configuration that the model runs with.

    Can be used in conjunction with the `seed` request parameter to understand when backend changes have been made that might impact determinism.
     */
    public function getSystemFingerprint(): string
    {
        return $this->systemFingerprint;
    }

    /**
     * This fingerprint represents the backend configuration that the model runs with.

    Can be used in conjunction with the `seed` request parameter to understand when backend changes have been made that might impact determinism.
     */
    public function setSystemFingerprint(string $systemFingerprint): self
    {
        $this->initialized['systemFingerprint'] = true;
        $this->systemFingerprint = $systemFingerprint;
        return $this;
    }

    /**
     * The object type, which is always `chat.completion`.
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always `chat.completion`.
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
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
