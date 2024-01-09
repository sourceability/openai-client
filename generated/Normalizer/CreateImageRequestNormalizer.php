<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateImageRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateImageRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateImageRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateImageRequest::class;
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
        $object = new CreateImageRequest();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('prompt', $data)) {
            $object->setPrompt($data['prompt']);
            unset($data['prompt']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $value = $data['model'];
            if (is_string($data['model'])) {
                $value = $data['model'];
            } elseif (is_string($data['model'])) {
                $value = $data['model'];
            }
            $object->setModel($value);
            unset($data['model']);
        } elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
            unset($data['n']);
        } elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
        }
        if (\array_key_exists('quality', $data)) {
            $object->setQuality($data['quality']);
            unset($data['quality']);
        }
        if (\array_key_exists('response_format', $data) && $data['response_format'] !== null) {
            $object->setResponseFormat($data['response_format']);
            unset($data['response_format']);
        } elseif (\array_key_exists('response_format', $data) && $data['response_format'] === null) {
            $object->setResponseFormat(null);
        }
        if (\array_key_exists('size', $data) && $data['size'] !== null) {
            $object->setSize($data['size']);
            unset($data['size']);
        } elseif (\array_key_exists('size', $data) && $data['size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('style', $data) && $data['style'] !== null) {
            $object->setStyle($data['style']);
            unset($data['style']);
        } elseif (\array_key_exists('style', $data) && $data['style'] === null) {
            $object->setStyle(null);
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
        $data['prompt'] = $object->getPrompt();
        if ($object->isInitialized('user') && $object->getUser() !== null) {
            $data['user'] = $object->getUser();
        }
        if ($object->isInitialized('model') && $object->getModel() !== null) {
            $value = $object->getModel();
            if (is_string($object->getModel())) {
                $value = $object->getModel();
            } elseif (is_string($object->getModel())) {
                $value = $object->getModel();
            }
            $data['model'] = $value;
        }
        if ($object->isInitialized('n') && $object->getN() !== null) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('quality') && $object->getQuality() !== null) {
            $data['quality'] = $object->getQuality();
        }
        if ($object->isInitialized('responseFormat') && $object->getResponseFormat() !== null) {
            $data['response_format'] = $object->getResponseFormat();
        }
        if ($object->isInitialized('size') && $object->getSize() !== null) {
            $data['size'] = $object->getSize();
        }
        if ($object->isInitialized('style') && $object->getStyle() !== null) {
            $data['style'] = $object->getStyle();
        }
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
            CreateImageRequest::class => false,
        ];
    }
}
