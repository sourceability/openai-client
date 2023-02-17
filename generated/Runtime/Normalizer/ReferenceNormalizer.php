<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    public function normalize($object, $format = null, array $context = [])
    {
        $ref = [];
        $ref['$ref'] = (string) $object->getReferenceUri();
        return $ref;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Reference;
    }
}
