<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEmbeddingResponse extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The list of embeddings generated by the model.
     *
     * @var Embedding[]
     */
    protected ?array $data = null;

    /**
     * The name of the model used to generate the embedding.
     */
    protected ?string $model = null;

    /**
     * The object type, which is always "list".
     */
    protected string $object = 'list';

    /**
     * The usage information for the request.
     */
    protected ?CreateEmbeddingResponseUsage $usage = null;

    /**
     * @param Embedding[] $data The list of embeddings generated by the model.
     * @param string $model The name of the model used to generate the embedding.
     * @param CreateEmbeddingResponseUsage $usage The usage information for the request.
     * @param string $object The object type, which is always "list".
     */
    public function __construct($data = null, $model = null, $usage = null, $object = null)
    {
        if ($data !== null) {
            $this->setData($data);
        }
        if ($model !== null) {
            $this->setModel($model);
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
     * The list of embeddings generated by the model.
     *
     * @return Embedding[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * The list of embeddings generated by the model.
     *
     * @param Embedding[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }

    /**
     * The name of the model used to generate the embedding.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * The name of the model used to generate the embedding.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The object type, which is always "list".
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always "list".
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }

    /**
     * The usage information for the request.
     */
    public function getUsage(): CreateEmbeddingResponseUsage
    {
        return $this->usage;
    }

    /**
     * The usage information for the request.
     */
    public function setUsage(CreateEmbeddingResponseUsage $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}
