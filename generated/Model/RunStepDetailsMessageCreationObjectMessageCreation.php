<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsMessageCreationObjectMessageCreation extends ArrayObject
{
    protected array $initialized = [];

    /**
     * The ID of the message that was created by this run step.
     */
    protected ?string $messageId = null;

    /**
     * @param string $messageId The ID of the message that was created by this run step.
     */
    public function __construct($messageId = null)
    {
        if ($messageId !== null) {
            $this->setMessageId($messageId);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the message that was created by this run step.
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }

    /**
     * The ID of the message that was created by this run step.
     */
    public function setMessageId(string $messageId): self
    {
        $this->initialized['messageId'] = true;
        $this->messageId = $messageId;
        return $this;
    }
}
