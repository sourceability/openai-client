<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateEditResponseChoicesItemLogprobs;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateEditResponseChoicesItemLogprobsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateEditResponseChoicesItemLogprobs::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateEditResponseChoicesItemLogprobs::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CreateEditResponseChoicesItemLogprobs();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('tokens', $data)) {
            $values = [];
            foreach ($data['tokens'] as $value) {
                $values[] = $value;
            }
            $object->setTokens($values);
            unset($data['tokens']);
        }
        if (\array_key_exists('token_logprobs', $data)) {
            $values_1 = [];
            foreach ($data['token_logprobs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTokenLogprobs($values_1);
            unset($data['token_logprobs']);
        }
        if (\array_key_exists('top_logprobs', $data)) {
            $values_2 = [];
            foreach ($data['top_logprobs'] as $value_2) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_2 as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setTopLogprobs($values_2);
            unset($data['top_logprobs']);
        }
        if (\array_key_exists('text_offset', $data)) {
            $values_4 = [];
            foreach ($data['text_offset'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTextOffset($values_4);
            unset($data['text_offset']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('tokens') && $object->getTokens() !== null) {
            $values = [];
            foreach ($object->getTokens() as $value) {
                $values[] = $value;
            }
            $data['tokens'] = $values;
        }
        if ($object->isInitialized('tokenLogprobs') && $object->getTokenLogprobs() !== null) {
            $values_1 = [];
            foreach ($object->getTokenLogprobs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['token_logprobs'] = $values_1;
        }
        if ($object->isInitialized('topLogprobs') && $object->getTopLogprobs() !== null) {
            $values_2 = [];
            foreach ($object->getTopLogprobs() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data['top_logprobs'] = $values_2;
        }
        if ($object->isInitialized('textOffset') && $object->getTextOffset() !== null) {
            $values_4 = [];
            foreach ($object->getTextOffset() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['text_offset'] = $values_4;
        }
        foreach ($object as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_5;
            }
        }
        return $data;
    }
}
