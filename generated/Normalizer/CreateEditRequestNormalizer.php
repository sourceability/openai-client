<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateEditRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateEditRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateEditRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateEditRequest::class;
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
        $object = new CreateEditRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (float) $data['top_p'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('instruction', $data)) {
            $object->setInstruction($data['instruction']);
            unset($data['instruction']);
        }
        if (\array_key_exists('model', $data)) {
            $value = $data['model'];
            if (is_string($data['model'])) {
                $value = $data['model'];
            } elseif (is_string($data['model'])) {
                $value = $data['model'];
            }
            $object->setModel($value);
            unset($data['model']);
        }
        if (\array_key_exists('input', $data) && $data['input'] !== null) {
            $object->setInput($data['input']);
            unset($data['input']);
        } elseif (\array_key_exists('input', $data) && $data['input'] === null) {
            $object->setInput(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
            unset($data['n']);
        } elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
        }
        if (\array_key_exists('temperature', $data) && $data['temperature'] !== null) {
            $object->setTemperature($data['temperature']);
            unset($data['temperature']);
        } elseif (\array_key_exists('temperature', $data) && $data['temperature'] === null) {
            $object->setTemperature(null);
        }
        if (\array_key_exists('top_p', $data) && $data['top_p'] !== null) {
            $object->setTopP($data['top_p']);
            unset($data['top_p']);
        } elseif (\array_key_exists('top_p', $data) && $data['top_p'] === null) {
            $object->setTopP(null);
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
        $data['instruction'] = $object->getInstruction();
        $value = $object->getModel();
        if (is_string($object->getModel())) {
            $value = $object->getModel();
        } elseif (is_string($object->getModel())) {
            $value = $object->getModel();
        }
        $data['model'] = $value;
        if ($object->isInitialized('input') && $object->getInput() !== null) {
            $data['input'] = $object->getInput();
        }
        if ($object->isInitialized('n') && $object->getN() !== null) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('topP') && $object->getTopP() !== null) {
            $data['top_p'] = $object->getTopP();
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
            CreateEditRequest::class => false,
        ];
    }
}
