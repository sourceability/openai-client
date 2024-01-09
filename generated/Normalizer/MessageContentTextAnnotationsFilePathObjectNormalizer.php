<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFilePathObject;
use Sourceability\OpenAIClient\Generated\Model\MessageContentTextAnnotationsFilePathObjectFilePath;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MessageContentTextAnnotationsFilePathObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === MessageContentTextAnnotationsFilePathObject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === MessageContentTextAnnotationsFilePathObject::class;
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
        $object = new MessageContentTextAnnotationsFilePathObject();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('file_path', $data)) {
            $object->setFilePath($this->denormalizer->denormalize($data['file_path'], MessageContentTextAnnotationsFilePathObjectFilePath::class, 'json', $context));
            unset($data['file_path']);
        }
        if (\array_key_exists('start_index', $data)) {
            $object->setStartIndex($data['start_index']);
            unset($data['start_index']);
        }
        if (\array_key_exists('end_index', $data)) {
            $object->setEndIndex($data['end_index']);
            unset($data['end_index']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['type'] = $object->getType();
        $data['text'] = $object->getText();
        $data['file_path'] = $this->normalizer->normalize($object->getFilePath(), 'json', $context);
        $data['start_index'] = $object->getStartIndex();
        $data['end_index'] = $object->getEndIndex();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            MessageContentTextAnnotationsFilePathObject::class => false,
        ];
    }
}
