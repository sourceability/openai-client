<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class RunStepDetailsMessageCreationObject extends ArrayObject
{
    protected array $initialized = [];

    /**
     * Always `message_creation`.
     */
    protected string $type = 'message_creation';

    protected ?RunStepDetailsMessageCreationObjectMessageCreation $messageCreation = null;

    /**
     * @param RunStepDetailsMessageCreationObjectMessageCreation $messageCreation
     * @param string $type Always `message_creation`.
     */
    public function __construct($messageCreation = null, $type = null)
    {
        if ($messageCreation !== null) {
            $this->setMessageCreation($messageCreation);
        }
        if ($type !== null) {
            $this->setType($type);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Always `message_creation`.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Always `message_creation`.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    public function getMessageCreation(): RunStepDetailsMessageCreationObjectMessageCreation
    {
        return $this->messageCreation;
    }

    public function setMessageCreation(RunStepDetailsMessageCreationObjectMessageCreation $messageCreation): self
    {
        $this->initialized['messageCreation'] = true;
        $this->messageCreation = $messageCreation;
        return $this;
    }
}
