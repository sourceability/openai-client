<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\ChatCompletionTokenLogprobTopLogprobsItem;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ChatCompletionTokenLogprobTopLogprobsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ChatCompletionTokenLogprobTopLogprobsItem::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ChatCompletionTokenLogprobTopLogprobsItem::class;
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
        $object = new ChatCompletionTokenLogprobTopLogprobsItem();
        if (\array_key_exists('logprob', $data) && \is_int($data['logprob'])) {
            $data['logprob'] = (float) $data['logprob'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
            unset($data['token']);
        }
        if (\array_key_exists('logprob', $data)) {
            $object->setLogprob($data['logprob']);
            unset($data['logprob']);
        }
        if (\array_key_exists('bytes', $data) && $data['bytes'] !== null) {
            $values = [];
            foreach ($data['bytes'] as $value) {
                $values[] = $value;
            }
            $object->setBytes($values);
            unset($data['bytes']);
        } elseif (\array_key_exists('bytes', $data) && $data['bytes'] === null) {
            $object->setBytes(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['token'] = $object->getToken();
        $data['logprob'] = $object->getLogprob();
        $values = [];
        foreach ($object->getBytes() as $value) {
            $values[] = $value;
        }
        $data['bytes'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            ChatCompletionTokenLogprobTopLogprobsItem::class => false,
        ];
    }
}
