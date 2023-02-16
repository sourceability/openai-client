<?php

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CreateSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateSearchRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateSearchRequest';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
            unset($data['query']);
        }
        if (\array_key_exists('documents', $data) && $data['documents'] !== null) {
            $values = array();
            foreach ($data['documents'] as $value) {
                $values[] = $value;
            }
            $object->setDocuments($values);
            unset($data['documents']);
        }
        elseif (\array_key_exists('documents', $data) && $data['documents'] === null) {
            $object->setDocuments(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($data['file']);
            unset($data['file']);
        }
        elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('max_rerank', $data) && $data['max_rerank'] !== null) {
            $object->setMaxRerank($data['max_rerank']);
            unset($data['max_rerank']);
        }
        elseif (\array_key_exists('max_rerank', $data) && $data['max_rerank'] === null) {
            $object->setMaxRerank(null);
        }
        if (\array_key_exists('return_metadata', $data) && $data['return_metadata'] !== null) {
            $object->setReturnMetadata($data['return_metadata']);
            unset($data['return_metadata']);
        }
        elseif (\array_key_exists('return_metadata', $data) && $data['return_metadata'] === null) {
            $object->setReturnMetadata(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['query'] = $object->getQuery();
        if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
            $values = array();
            foreach ($object->getDocuments() as $value) {
                $values[] = $value;
            }
            $data['documents'] = $values;
        }
        if ($object->isInitialized('file') && null !== $object->getFile()) {
            $data['file'] = $object->getFile();
        }
        if ($object->isInitialized('maxRerank') && null !== $object->getMaxRerank()) {
            $data['max_rerank'] = $object->getMaxRerank();
        }
        if ($object->isInitialized('returnMetadata') && null !== $object->getReturnMetadata()) {
            $data['return_metadata'] = $object->getReturnMetadata();
        }
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}