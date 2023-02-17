<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateAnswerRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateAnswerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === CreateAnswerRequest::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === CreateAnswerRequest::class;
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
        $object = new CreateAnswerRequest();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('question', $data)) {
            $object->setQuestion($data['question']);
        }
        if (\array_key_exists('examples', $data)) {
            $values = [];
            foreach ($data['examples'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setExamples($values);
        }
        if (\array_key_exists('examples_context', $data)) {
            $object->setExamplesContext($data['examples_context']);
        }
        if (\array_key_exists('documents', $data) && $data['documents'] !== null) {
            $values_2 = [];
            foreach ($data['documents'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDocuments($values_2);
        } elseif (\array_key_exists('documents', $data) && $data['documents'] === null) {
            $object->setDocuments(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($data['file']);
        } elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('search_model', $data) && $data['search_model'] !== null) {
            $object->setSearchModel($data['search_model']);
        } elseif (\array_key_exists('search_model', $data) && $data['search_model'] === null) {
            $object->setSearchModel(null);
        }
        if (\array_key_exists('max_rerank', $data) && $data['max_rerank'] !== null) {
            $object->setMaxRerank($data['max_rerank']);
        } elseif (\array_key_exists('max_rerank', $data) && $data['max_rerank'] === null) {
            $object->setMaxRerank(null);
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
        if (\array_key_exists('max_tokens', $data) && $data['max_tokens'] !== null) {
            $object->setMaxTokens($data['max_tokens']);
        } elseif (\array_key_exists('max_tokens', $data) && $data['max_tokens'] === null) {
            $object->setMaxTokens(null);
        }
        if (\array_key_exists('stop', $data) && $data['stop'] !== null) {
            $object->setStop($data['stop']);
        } elseif (\array_key_exists('stop', $data) && $data['stop'] === null) {
            $object->setStop(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
        } elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
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
        if (\array_key_exists('return_metadata', $data) && $data['return_metadata'] !== null) {
            $object->setReturnMetadata($data['return_metadata']);
        } elseif (\array_key_exists('return_metadata', $data) && $data['return_metadata'] === null) {
            $object->setReturnMetadata(null);
        }
        if (\array_key_exists('return_prompt', $data) && $data['return_prompt'] !== null) {
            $object->setReturnPrompt($data['return_prompt']);
        } elseif (\array_key_exists('return_prompt', $data) && $data['return_prompt'] === null) {
            $object->setReturnPrompt(null);
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
     * @return array{model: mixed, question: mixed, examples: array<int, mixed[]>, examples_context: mixed, documents?: mixed[], file?: mixed, search_model?: mixed, max_rerank?: mixed, temperature?: mixed, logprobs?: mixed, max_tokens?: mixed, stop?: mixed, n?: mixed, logit_bias?: array<int|string, mixed>, return_metadata?: mixed, return_prompt?: mixed, expand?: mixed[], user?: mixed}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['model'] = $object->getModel();
        $data['question'] = $object->getQuestion();
        $values = [];
        foreach ($object->getExamples() as $value) {
            $values_1 = [];
            foreach ($value as $value_1) {
                $values_1[] = $value_1;
            }
            $values[] = $values_1;
        }
        $data['examples'] = $values;
        $data['examples_context'] = $object->getExamplesContext();
        if ($object->isInitialized('documents') && $object->getDocuments() !== null) {
            $values_2 = [];
            foreach ($object->getDocuments() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['documents'] = $values_2;
        }
        if ($object->isInitialized('file') && $object->getFile() !== null) {
            $data['file'] = $object->getFile();
        }
        if ($object->isInitialized('searchModel') && $object->getSearchModel() !== null) {
            $data['search_model'] = $object->getSearchModel();
        }
        if ($object->isInitialized('maxRerank') && $object->getMaxRerank() !== null) {
            $data['max_rerank'] = $object->getMaxRerank();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('logprobs') && $object->getLogprobs() !== null) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('maxTokens') && $object->getMaxTokens() !== null) {
            $data['max_tokens'] = $object->getMaxTokens();
        }
        if ($object->isInitialized('stop') && $object->getStop() !== null) {
            $data['stop'] = $object->getStop();
        }
        if ($object->isInitialized('n') && $object->getN() !== null) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('logitBias') && $object->getLogitBias() !== null) {
            $values_3 = [];
            foreach ($object->getLogitBias() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['logit_bias'] = $values_3;
        }
        if ($object->isInitialized('returnMetadata') && $object->getReturnMetadata() !== null) {
            $data['return_metadata'] = $object->getReturnMetadata();
        }
        if ($object->isInitialized('returnPrompt') && $object->getReturnPrompt() !== null) {
            $data['return_prompt'] = $object->getReturnPrompt();
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
