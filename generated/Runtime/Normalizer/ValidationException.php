<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Runtime\Normalizer;

use RuntimeException;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class ValidationException extends RuntimeException
{
    public function __construct(
        private ConstraintViolationListInterface $violationList
    ) {
        parent::__construct(sprintf('Model validation failed with %d errors.', $violationList->count()), 400);
    }

    public function getViolationList(): ConstraintViolationListInterface
    {
        return $this->violationList;
    }
}
