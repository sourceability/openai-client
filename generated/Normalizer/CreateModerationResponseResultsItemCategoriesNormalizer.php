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
class CreateModerationResponseResultsItemCategoriesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationResponseResultsItemCategories';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Sourceability\\OpenAIClient\\Generated\\Model\\CreateModerationResponseResultsItemCategories';
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
        $object = new \Sourceability\OpenAIClient\Generated\Model\CreateModerationResponseResultsItemCategories();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hate', $data)) {
            $object->setHate($data['hate']);
            unset($data['hate']);
        }
        if (\array_key_exists('hate/threatening', $data)) {
            $object->setHateThreatening($data['hate/threatening']);
            unset($data['hate/threatening']);
        }
        if (\array_key_exists('self-harm', $data)) {
            $object->setSelfHarm($data['self-harm']);
            unset($data['self-harm']);
        }
        if (\array_key_exists('sexual', $data)) {
            $object->setSexual($data['sexual']);
            unset($data['sexual']);
        }
        if (\array_key_exists('sexual/minors', $data)) {
            $object->setSexualMinors($data['sexual/minors']);
            unset($data['sexual/minors']);
        }
        if (\array_key_exists('violence', $data)) {
            $object->setViolence($data['violence']);
            unset($data['violence']);
        }
        if (\array_key_exists('violence/graphic', $data)) {
            $object->setViolenceGraphic($data['violence/graphic']);
            unset($data['violence/graphic']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['hate'] = $object->getHate();
        $data['hate/threatening'] = $object->getHateThreatening();
        $data['self-harm'] = $object->getSelfHarm();
        $data['sexual'] = $object->getSexual();
        $data['sexual/minors'] = $object->getSexualMinors();
        $data['violence'] = $object->getViolence();
        $data['violence/graphic'] = $object->getViolenceGraphic();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}