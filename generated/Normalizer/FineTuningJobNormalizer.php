<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJob;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJobError;
use Sourceability\OpenAIClient\Generated\Model\FineTuningJobHyperparameters;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FineTuningJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === FineTuningJob::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === FineTuningJob::class;
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
        $object = new FineTuningJob();
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('error', $data) && $data['error'] !== null) {
            $object->setError($this->denormalizer->denormalize($data['error'], FineTuningJobError::class, 'json', $context));
            unset($data['error']);
        } elseif (\array_key_exists('error', $data) && $data['error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('fine_tuned_model', $data) && $data['fine_tuned_model'] !== null) {
            $object->setFineTunedModel($data['fine_tuned_model']);
            unset($data['fine_tuned_model']);
        } elseif (\array_key_exists('fine_tuned_model', $data) && $data['fine_tuned_model'] === null) {
            $object->setFineTunedModel(null);
        }
        if (\array_key_exists('finished_at', $data) && $data['finished_at'] !== null) {
            $object->setFinishedAt($data['finished_at']);
            unset($data['finished_at']);
        } elseif (\array_key_exists('finished_at', $data) && $data['finished_at'] === null) {
            $object->setFinishedAt(null);
        }
        if (\array_key_exists('hyperparameters', $data)) {
            $object->setHyperparameters($this->denormalizer->denormalize($data['hyperparameters'], FineTuningJobHyperparameters::class, 'json', $context));
            unset($data['hyperparameters']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
            unset($data['object']);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
            unset($data['organization_id']);
        }
        if (\array_key_exists('result_files', $data)) {
            $values = [];
            foreach ($data['result_files'] as $value) {
                $values[] = $value;
            }
            $object->setResultFiles($values);
            unset($data['result_files']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('trained_tokens', $data) && $data['trained_tokens'] !== null) {
            $object->setTrainedTokens($data['trained_tokens']);
            unset($data['trained_tokens']);
        } elseif (\array_key_exists('trained_tokens', $data) && $data['trained_tokens'] === null) {
            $object->setTrainedTokens(null);
        }
        if (\array_key_exists('training_file', $data)) {
            $object->setTrainingFile($data['training_file']);
            unset($data['training_file']);
        }
        if (\array_key_exists('validation_file', $data) && $data['validation_file'] !== null) {
            $object->setValidationFile($data['validation_file']);
            unset($data['validation_file']);
        } elseif (\array_key_exists('validation_file', $data) && $data['validation_file'] === null) {
            $object->setValidationFile(null);
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
        $data['id'] = $object->getId();
        $data['created_at'] = $object->getCreatedAt();
        $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
        $data['fine_tuned_model'] = $object->getFineTunedModel();
        $data['finished_at'] = $object->getFinishedAt();
        $data['hyperparameters'] = $this->normalizer->normalize($object->getHyperparameters(), 'json', $context);
        $data['model'] = $object->getModel();
        $data['object'] = $object->getObject();
        $data['organization_id'] = $object->getOrganizationId();
        $values = [];
        foreach ($object->getResultFiles() as $value) {
            $values[] = $value;
        }
        $data['result_files'] = $values;
        $data['status'] = $object->getStatus();
        $data['trained_tokens'] = $object->getTrainedTokens();
        $data['training_file'] = $object->getTrainingFile();
        $data['validation_file'] = $object->getValidationFile();
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
            FineTuningJob::class => false,
        ];
    }
}
