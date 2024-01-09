<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFileCitationObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFilePathObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextObjectText;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MessageContentTextObjectTextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === MessageContentTextObjectText::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === MessageContentTextObjectText::class;
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
        $object = new MessageContentTextObjectText();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (\array_key_exists('annotations', $data)) {
            $values = [];
            foreach ($data['annotations'] as $value) {
                $value_1 = $value;
                if (is_array($value) and (isset($value['type']) and $value['type'] === 'file_citation') and isset($value['text']) and isset($value['file_citation']) and isset($value['start_index']) and isset($value['end_index'])) {
                    $value_1 = $this->denormalizer->denormalize($value, MessageContentTextAnnotationsFileCitationObject::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['type']) and $value['type'] === 'file_path') and isset($value['text']) and isset($value['file_path']) and isset($value['start_index']) and isset($value['end_index'])) {
                    $value_1 = $this->denormalizer->denormalize($value, MessageContentTextAnnotationsFilePathObject::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setAnnotations($values);
            unset($data['annotations']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['value'] = $object->getValue();
        $values = [];
        foreach ($object->getAnnotations() as $value) {
            $value_1 = $value;
            if (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            }
            $values[] = $value_1;
        }
        $data['annotations'] = $values;
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            MessageContentTextObjectText::class => false,
        ];
    }
}
