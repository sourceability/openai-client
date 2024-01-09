<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Sourceability\OpenAIClient\Generated\Model\CreateCompletionRequest;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\CheckArray;
use Sourceability\OpenAIClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateCompletionRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === CreateCompletionRequest::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === CreateCompletionRequest::class;
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
        $object = new CreateCompletionRequest();
        if (\array_key_exists('frequency_penalty', $data) && \is_int($data['frequency_penalty'])) {
            $data['frequency_penalty'] = (float) $data['frequency_penalty'];
        }
        if (\array_key_exists('presence_penalty', $data) && \is_int($data['presence_penalty'])) {
            $data['presence_penalty'] = (float) $data['presence_penalty'];
        }
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (float) $data['top_p'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
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
        if (\array_key_exists('logit_bias', $data) && $data['logit_bias'] !== null) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['logit_bias'] as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $object->setLogitBias($values);
            unset($data['logit_bias']);
        } elseif (\array_key_exists('logit_bias', $data) && $data['logit_bias'] === null) {
            $object->setLogitBias(null);
        }
        if (\array_key_exists('logprobs', $data) && $data['logprobs'] !== null) {
            $object->setLogprobs($data['logprobs']);
            unset($data['logprobs']);
        } elseif (\array_key_exists('logprobs', $data) && $data['logprobs'] === null) {
            $object->setLogprobs(null);
        }
        if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
            $object->setSeed($data['seed']);
            unset($data['seed']);
        } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
            $object->setSeed(null);
        }
        if (\array_key_exists('stop', $data) && $data['stop'] !== null) {
            $value_2 = $data['stop'];
            if (is_string($data['stop'])) {
                $value_2 = $data['stop'];
            } elseif (is_array($data['stop']) && $this->isOnlyNumericKeys($data['stop'])) {
                $values_1 = [];
                foreach ($data['stop'] as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->setStop($value_2);
            unset($data['stop']);
        } elseif (\array_key_exists('stop', $data) && $data['stop'] === null) {
            $object->setStop(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
            unset($data['suffix']);
        } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        if (\array_key_exists('prompt', $data) && $data['prompt'] !== null) {
            $value_4 = $data['prompt'];
            if (is_string($data['prompt'])) {
                $value_4 = $data['prompt'];
            } elseif (is_array($data['prompt']) && $this->isOnlyNumericKeys($data['prompt'])) {
                $values_2 = [];
                foreach ($data['prompt'] as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (is_array($data['prompt']) && $this->isOnlyNumericKeys($data['prompt'])) {
                $values_3 = [];
                foreach ($data['prompt'] as $value_6) {
                    $values_3[] = $value_6;
                }
                $value_4 = $values_3;
            } elseif (is_array($data['prompt']) && $this->isOnlyNumericKeys($data['prompt'])) {
                $values_4 = [];
                foreach ($data['prompt'] as $value_7) {
                    $values_5 = [];
                    foreach ($value_7 as $value_8) {
                        $values_5[] = $value_8;
                    }
                    $values_4[] = $values_5;
                }
                $value_4 = $values_4;
            }
            $object->setPrompt($value_4);
            unset($data['prompt']);
        } elseif (\array_key_exists('prompt', $data) && $data['prompt'] === null) {
            $object->setPrompt(null);
        }
        if (\array_key_exists('best_of', $data) && $data['best_of'] !== null) {
            $object->setBestOf($data['best_of']);
            unset($data['best_of']);
        } elseif (\array_key_exists('best_of', $data) && $data['best_of'] === null) {
            $object->setBestOf(null);
        }
        if (\array_key_exists('echo', $data) && $data['echo'] !== null) {
            $object->setEcho($data['echo']);
            unset($data['echo']);
        } elseif (\array_key_exists('echo', $data) && $data['echo'] === null) {
            $object->setEcho(null);
        }
        if (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] !== null) {
            $object->setFrequencyPenalty($data['frequency_penalty']);
            unset($data['frequency_penalty']);
        } elseif (\array_key_exists('frequency_penalty', $data) && $data['frequency_penalty'] === null) {
            $object->setFrequencyPenalty(null);
        }
        if (\array_key_exists('max_tokens', $data) && $data['max_tokens'] !== null) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
        } elseif (\array_key_exists('max_tokens', $data) && $data['max_tokens'] === null) {
            $object->setMaxTokens(null);
        }
        if (\array_key_exists('n', $data) && $data['n'] !== null) {
            $object->setN($data['n']);
            unset($data['n']);
        } elseif (\array_key_exists('n', $data) && $data['n'] === null) {
            $object->setN(null);
        }
        if (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] !== null) {
            $object->setPresencePenalty($data['presence_penalty']);
            unset($data['presence_penalty']);
        } elseif (\array_key_exists('presence_penalty', $data) && $data['presence_penalty'] === null) {
            $object->setPresencePenalty(null);
        }
        if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
            $object->setStream($data['stream']);
            unset($data['stream']);
        } elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
            $object->setStream(null);
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
        foreach ($data as $key_1 => $value_9) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_9;
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
        $value = $object->getModel();
        if (is_string($object->getModel())) {
            $value = $object->getModel();
        } elseif (is_string($object->getModel())) {
            $value = $object->getModel();
        }
        $data['model'] = $value;
        if ($object->isInitialized('logitBias') && $object->getLogitBias() !== null) {
            $values = [];
            foreach ($object->getLogitBias() as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $data['logit_bias'] = $values;
        }
        if ($object->isInitialized('logprobs') && $object->getLogprobs() !== null) {
            $data['logprobs'] = $object->getLogprobs();
        }
        if ($object->isInitialized('seed') && $object->getSeed() !== null) {
            $data['seed'] = $object->getSeed();
        }
        if ($object->isInitialized('stop') && $object->getStop() !== null) {
            $value_2 = $object->getStop();
            if (is_string($object->getStop())) {
                $value_2 = $object->getStop();
            } elseif (is_array($object->getStop())) {
                $values_1 = [];
                foreach ($object->getStop() as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            }
            $data['stop'] = $value_2;
        }
        if ($object->isInitialized('suffix') && $object->getSuffix() !== null) {
            $data['suffix'] = $object->getSuffix();
        }
        if ($object->isInitialized('user') && $object->getUser() !== null) {
            $data['user'] = $object->getUser();
        }
        $value_4 = $object->getPrompt();
        if (is_string($object->getPrompt())) {
            $value_4 = $object->getPrompt();
        } elseif (is_array($object->getPrompt())) {
            $values_2 = [];
            foreach ($object->getPrompt() as $value_5) {
                $values_2[] = $value_5;
            }
            $value_4 = $values_2;
        } elseif (is_array($object->getPrompt())) {
            $values_3 = [];
            foreach ($object->getPrompt() as $value_6) {
                $values_3[] = $value_6;
            }
            $value_4 = $values_3;
        } elseif (is_array($object->getPrompt())) {
            $values_4 = [];
            foreach ($object->getPrompt() as $value_7) {
                $values_5 = [];
                foreach ($value_7 as $value_8) {
                    $values_5[] = $value_8;
                }
                $values_4[] = $values_5;
            }
            $value_4 = $values_4;
        }
        $data['prompt'] = $value_4;
        if ($object->isInitialized('bestOf') && $object->getBestOf() !== null) {
            $data['best_of'] = $object->getBestOf();
        }
        if ($object->isInitialized('echo') && $object->getEcho() !== null) {
            $data['echo'] = $object->getEcho();
        }
        if ($object->isInitialized('frequencyPenalty') && $object->getFrequencyPenalty() !== null) {
            $data['frequency_penalty'] = $object->getFrequencyPenalty();
        }
        if ($object->isInitialized('maxTokens') && $object->getMaxTokens() !== null) {
            $data['max_tokens'] = $object->getMaxTokens();
        }
        if ($object->isInitialized('n') && $object->getN() !== null) {
            $data['n'] = $object->getN();
        }
        if ($object->isInitialized('presencePenalty') && $object->getPresencePenalty() !== null) {
            $data['presence_penalty'] = $object->getPresencePenalty();
        }
        if ($object->isInitialized('stream') && $object->getStream() !== null) {
            $data['stream'] = $object->getStream();
        }
        if ($object->isInitialized('temperature') && $object->getTemperature() !== null) {
            $data['temperature'] = $object->getTemperature();
        }
        if ($object->isInitialized('topP') && $object->getTopP() !== null) {
            $data['top_p'] = $object->getTopP();
        }
        foreach ($object as $key_1 => $value_9) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_9;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            CreateCompletionRequest::class => false,
        ];
    }
}
