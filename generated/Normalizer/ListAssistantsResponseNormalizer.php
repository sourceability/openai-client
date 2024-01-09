<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\AssistantObject;
use Sourceability\OpenAIClient\Generated\Model\ListAssistantsResponse;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListAssistantsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ListAssistantsResponse::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ListAssistantsResponse::class;
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
        $object = new ListAssistantsResponse();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, AssistantObject::class, 'json', $context);
            }
            $object->setData($values);
            unset($data['data']);
        }
        if (\array_key_exists('first_id', $data)) {
            $object->setFirstId($data['first_id']);
            unset($data['first_id']);
        }
        if (\array_key_exists('last_id', $data)) {
            $object->setLastId($data['last_id']);
            unset($data['last_id']);
        }
        if (\array_key_exists('has_more', $data)) {
            $object->setHasMore($data['has_more']);
            unset($data['has_more']);
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
        $data['object'] = $object->getObject();
        $values = [];
        foreach ($object->getData() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['data'] = $values;
        $data['first_id'] = $object->getFirstId();
        $data['last_id'] = $object->getLastId();
        $data['has_more'] = $object->getHasMore();
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
            ListAssistantsResponse::class => false,
        ];
    }
}
