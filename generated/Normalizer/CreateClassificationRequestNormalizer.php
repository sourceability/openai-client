<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateClassificationRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateClassificationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateClassificationRequest::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateClassificationRequest::class;
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
        $object = new CreateClassificationRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values = [];
            foreach ($data['examples'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setExamples($values);
        } elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($data['file']);
        } elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_2 = [];
            foreach ($data['labels'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLabels($values_2);
        } elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('search_model', $data) && $data['search_model'] !== null) {
            $object->setSearchModel($data['search_model']);
        } elseif (\array_key_exists('search_model', $data) && $data['search_model'] === null) {
            $object->setSearchModel(null);
        }
        if (\array_key_exists('temperature', $data) && $data['temperature'] !== null) {
            $object->setTemperature($data['temperature']);
        } elseif (\array_key_exists('temperature', $data) && $data['temperature'] === null) {
            $object->setTemperature(null);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($data['logprobs']);
        } elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
        }
        if (\array_key_exists('max_examples', $data) && $data['max_examples'] !== null) {
            $object->setMaxExamples($data['max_examples']);
        } elseif (\array_key_exists('max_examples', $data) && $data['max_examples'] === null) {
            $object->setMaxExamples(null);
        }
        if (\array_key_exists('logit_bias', $data) && $data['logit_bias'] !== null) {
            $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['logit_bias'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setLogitBias($values_3);
        } elseif (\array_key_exists('logit_bias', $data) && $data['logit_bias'] === null) {
            $object->setLogitBias(null);
        }
        if (\array_key_exists('return_prompt', $data) && $data['return_prompt'] !== null) {
            $object->setReturnPrompt($data['return_prompt']);
        } elseif (\array_key_exists('return_prompt', $data) && $data['return_prompt'] === null) {
            $object->setReturnPrompt(null);
        }
        if (\array_key_exists('return_metadata', $data) && $data['return_metadata'] !== null) {
            $object->setReturnMetadata($data['return_metadata']);
        } elseif (\array_key_exists('return_metadata', $data) && $data['return_metadata'] === null) {
            $object->setReturnMetadata(null);
        }
        if (\array_key_exists('expand', $data) && $data['expand'] !== null) {
            $values_4 = [];
            foreach ($data['expand'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setExpand($values_4);
        } elseif (\array_key_exists('expand', $data) && $data['expand'] === null) {
            $object->setExpand(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        return $object;
    }

    /**
     * @return array{model: mixed, query: mixed, examples?: array<int, mixed[]>, file?: mixed, labels?: mixed[], search_model?: mixed, temperature?: mixed, logprobs?: mixed, max_examples?: mixed, logit_bias?: array<int|string, mixed>, return_prompt?: mixed, return_metadata?: mixed, expand?: mixed[], user?: mixed}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['model'] = $object->getModel();
        $data['query'] = $object->getQuery();
        if ($object->isInitialized('examples') && $object->getExamples() !== null) {
            $values = [];
            foreach ($object->getExamples() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['examples'] = $values;
        }
        if ($object->isInitialized('file') && $object->getFile() !== null) {
            $data['file'] = $object->getFile();
        }
        if ($object->isInitialized('labels') && $object->getLabels() !== null) {
            $values_2 = [];
            foreach ($object->getLabels() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['labels'] = $values_2;
        }
        if ($object->isInitialized('searchModel') && $object->getSearchModel() !== null) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('logprobs') && $object->getLogprobs() !== null) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('maxExamples') && $object->getMaxExamples() !== null) {
            $data['max_examples'] = $object->getMaxExamples();
        }
        if ($object->isInitialized('logitBias') && $object->getLogitBias() !== null) {
            $values_3 = [];
            foreach ($object->getLogitBias() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['logit_bias'] = $values_3;
        }
        if ($object->isInitialized('returnPrompt') && $object->getReturnPrompt() !== null) {
            $data['return_prompt'] = $object->getReturnPrompt();
        }
        if ($object->isInitialized('returnMetadata') && $object->getReturnMetadata() !== null) {
            $data['return_metadata'] = $object->getReturnMetadata();
        }
        if ($object->isInitialized('expand') && $object->getExpand() !== null) {
            $values_4 = [];
            foreach ($object->getExpand() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['expand'] = $values_4;
        }
        if ($object->isInitialized('user') && $object->getUser() !== null) {
            $data['user'] = $object->getUser();
        }
        return $data;
    }
}
