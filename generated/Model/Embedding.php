<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class Embedding extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The index of the embedding in the list of embeddings.
     */
    protected ?int $index = null;

    /**
     * The embedding vector, which is a list of floats. The length of vector depends on the model as listed in the [embedding guide](/docs/guides/embeddings).
     *
     * @var float[]
     */
    protected ?array $embedding = null;

    /**
     * The object type, which is always "embedding".
     */
    protected string $object = 'embedding';

    /**
     * @param int $index The index of the embedding in the list of embeddings.
     * @param float[] $embedding The embedding vector, which is a list of floats. The length of vector depends on the model as listed in the [embedding guide](/docs/guides/embeddings).
     * @param string $object The object type, which is always "embedding".
     */
    public function __construct($index = null, $embedding = null, $object = null)
    {
        if ($index !== null) {
            $this->setIndex($index);
        }
        if ($embedding !== null) {
            $this->setEmbedding($embedding);
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
     * The index of the embedding in the list of embeddings.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * The index of the embedding in the list of embeddings.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }

    /**
     * The embedding vector, which is a list of floats. The length of vector depends on the model as listed in the [embedding guide](/docs/guides/embeddings).
     *
     * @return float[]
     */
    public function getEmbedding(): array
    {
        return $this->embedding;
    }

    /**
     * The embedding vector, which is a list of floats. The length of vector depends on the model as listed in the [embedding guide](/docs/guides/embeddings).
     *
     * @param float[] $embedding
     */
    public function setEmbedding(array $embedding): self
    {
        $this->initialized['embedding'] = true;
        $this->embedding = $embedding;
        return $this;
    }

    /**
     * The object type, which is always "embedding".
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * The object type, which is always "embedding".
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
}
