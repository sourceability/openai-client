<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateTranscriptionRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateTranscriptionRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateTranscriptionRequest::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateTranscriptionRequest::class;
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
        $object = new CreateTranscriptionRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($data['file']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('prompt', $data)) {
            $object->setPrompt($data['prompt']);
        }
        if (\array_key_exists('response_format', $data)) {
            $object->setResponseFormat($data['response_format']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->setTemperature($data['temperature']);
        }
        return $object;
    }

    /**
     * @return array{file: mixed, model: mixed, prompt?: mixed, response_format?: mixed, temperature?: mixed}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['file'] = $object->getFile();
        $data['model'] = $object->getModel();
        if ($object->isInitialized('prompt') && $object->getPrompt() !== null) {
            $data['prompt'] = $object->getPrompt();
        }
        if ($object->isInitialized('responseFormat') && $object->getResponseFormat() !== null) {
            $data['response_format'] = $object->getResponseFormat();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        return $data;
    }
}
