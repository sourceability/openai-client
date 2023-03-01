<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateTranscriptionRequest
{
    protected array $initialized = [];

    /**
     * The audio file to transcribe, in one of these formats: mp3, mp4, mpeg, mpga, m4a, wav, or webm.
     */
    protected ?string $file = null;

    /**
     * ID of the model to use. Only `whisper-1` is currently available.
     */
    protected ?string $model = null;

    /**
     * An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text/prompting) should match the audio language.
     */
    protected ?string $prompt = null;

    /**
     * The format of the transcript output, in one of these options: json, text, srt, verbose_json, or vtt.
     */
    protected string $responseFormat = 'json';

    /**
     * The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.
     *
     * @var float
     */
    protected $temperature = 0;

    /**
     * @param string $file The audio file to transcribe, in one of these formats: mp3, mp4, mpeg, mpga, m4a, wav, or webm.
     * @param string $model ID of the model to use. Only `whisper-1` is currently available.
     * @param string $prompt An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text/prompting) should match the audio language.
     * @param string $responseFormat The format of the transcript output, in one of these options: json, text, srt, verbose_json, or vtt.
     * @param float $temperature The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.
     */
    public function __construct($file = null, $model = null, $prompt = null, $responseFormat = 'json', $temperature = 0)
    {
        if ($file !== null) {
            $this->setFile($file);
        }
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($prompt !== null) {
            $this->setPrompt($prompt);
        }
        if ($responseFormat !== null) {
            $this->setResponseFormat($responseFormat);
        }
        if ($temperature !== null) {
            $this->setTemperature($temperature);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The audio file to transcribe, in one of these formats: mp3, mp4, mpeg, mpga, m4a, wav, or webm.
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * The audio file to transcribe, in one of these formats: mp3, mp4, mpeg, mpga, m4a, wav, or webm.
     */
    public function setFile(string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }

    /**
     * ID of the model to use. Only `whisper-1` is currently available.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * ID of the model to use. Only `whisper-1` is currently available.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text/prompting) should match the audio language.
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text/prompting) should match the audio language.
     */
    public function setPrompt(string $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }

    /**
     * The format of the transcript output, in one of these options: json, text, srt, verbose_json, or vtt.
     */
    public function getResponseFormat(): string
    {
        return $this->responseFormat;
    }

    /**
     * The format of the transcript output, in one of these options: json, text, srt, verbose_json, or vtt.
     */
    public function setResponseFormat(string $responseFormat): self
    {
        $this->initialized['responseFormat'] = true;
        $this->responseFormat = $responseFormat;
        return $this;
    }

    /**
     * The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.
     */
    public function setTemperature(float $temperature): self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }
}
