<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateAnswerResponse;
use Sourceability\OpenAIClient\Generated\Model\CreateAnswerResponseSelectedDocumentsItem;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateAnswerResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateAnswerResponse::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateAnswerResponse::class;
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
        $object = new CreateAnswerResponse();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('search_model', $data)) {
            $object->setSearchModel($data['search_model']);
            unset($data['search_model']);
        }
        if (\array_key_exists('completion', $data)) {
            $object->setCompletion($data['completion']);
            unset($data['completion']);
        }
        if (\array_key_exists('answers', $data)) {
            $values = [];
            foreach ($data['answers'] as $value) {
                $values[] = $value;
            }
            $object->setAnswers($values);
            unset($data['answers']);
        }
        if (\array_key_exists('selected_documents', $data)) {
            $values_1 = [];
            foreach ($data['selected_documents'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, CreateAnswerResponseSelectedDocumentsItem::class, 'json', $context);
            }
            $object->setSelectedDocuments($values_1);
            unset($data['selected_documents']);
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
        if ($object->isInitialized('object') && $object->getObject() !== null) {
            $data['object'] = $object->getObject();
        }
        if ($object->isInitialized('model') && $object->getModel() !== null) {
            $data['model'] = $object->getModel();
        }
        if ($object->isInitialized('searchModel') && $object->getSearchModel() !== null) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('completion') && $object->getCompletion() !== null) {
            $data['completion'] = $object->getCompletion();
        }
        if ($object->isInitialized('answers') && $object->getAnswers() !== null) {
            $values = [];
            foreach ($object->getAnswers() as $value) {
                $values[] = $value;
            }
            $data['answers'] = $values;
        }
        if ($object->isInitialized('selectedDocuments') && $object->getSelectedDocuments() !== null) {
            $values_1 = [];
            foreach ($object->getSelectedDocuments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['selected_documents'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}
