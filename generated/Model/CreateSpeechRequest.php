<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateSpeechRequest
{
    protected array $initialized = [];

    /**
     * One of the available [TTS models](/docs/models/tts): `tts-1` or `tts-1-hd`
     *
     * @var string|string
     */
    protected $model = null;

    /**
     * The text to generate audio for. The maximum length is 4096 characters.
     */
    protected ?string $input = null;

    /**
     * The voice to use when generating the audio. Supported voices are `alloy`, `echo`, `fable`, `onyx`, `nova`, and `shimmer`. Previews of the voices are available in the [Text to speech guide](/docs/guides/text-to-speech/voice-options).
     */
    protected ?string $voice = null;

    /**
     * The format to audio in. Supported formats are `mp3`, `opus`, `aac`, and `flac`.
     */
    protected string $responseFormat = 'mp3';

    /**
     * The speed of the generated audio. Select a value from `0.25` to `4.0`. `1.0` is the default.
     */
    protected float $speed = 1.0;

    /**
     * @param string|string $model One of the available [TTS models](/docs/models/tts): `tts-1` or `tts-1-hd`
     * @param string $input The text to generate audio for. The maximum length is 4096 characters.
     * @param string $voice The voice to use when generating the audio. Supported voices are `alloy`, `echo`, `fable`, `onyx`, `nova`, and `shimmer`. Previews of the voices are available in the [Text to speech guide](/docs/guides/text-to-speech/voice-options).
     * @param string $responseFormat The format to audio in. Supported formats are `mp3`, `opus`, `aac`, and `flac`.
     * @param float $speed The speed of the generated audio. Select a value from `0.25` to `4.0`. `1.0` is the default.
     */
    public function __construct($model = null, $input = null, $voice = null, $responseFormat = 'mp3', $speed = 1.0)
    {
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($input !== null) {
            $this->setInput($input);
        }
        if ($voice !== null) {
            $this->setVoice($voice);
        }
        if ($responseFormat !== null) {
            $this->setResponseFormat($responseFormat);
        }
        if ($speed !== null) {
            $this->setSpeed($speed);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * One of the available [TTS models](/docs/models/tts): `tts-1` or `tts-1-hd`
     *
     * @return string|string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * One of the available [TTS models](/docs/models/tts): `tts-1` or `tts-1-hd`
     *
     * @param string|string $model
     */
    public function setModel($model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The text to generate audio for. The maximum length is 4096 characters.
     */
    public function getInput(): string
    {
        return $this->input;
    }

    /**
     * The text to generate audio for. The maximum length is 4096 characters.
     */
    public function setInput(string $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }

    /**
     * The voice to use when generating the audio. Supported voices are `alloy`, `echo`, `fable`, `onyx`, `nova`, and `shimmer`. Previews of the voices are available in the [Text to speech guide](/docs/guides/text-to-speech/voice-options).
     */
    public function getVoice(): string
    {
        return $this->voice;
    }

    /**
     * The voice to use when generating the audio. Supported voices are `alloy`, `echo`, `fable`, `onyx`, `nova`, and `shimmer`. Previews of the voices are available in the [Text to speech guide](/docs/guides/text-to-speech/voice-options).
     */
    public function setVoice(string $voice): self
    {
        $this->initialized['voice'] = true;
        $this->voice = $voice;
        return $this;
    }

    /**
     * The format to audio in. Supported formats are `mp3`, `opus`, `aac`, and `flac`.
     */
    public function getResponseFormat(): string
    {
        return $this->responseFormat;
    }

    /**
     * The format to audio in. Supported formats are `mp3`, `opus`, `aac`, and `flac`.
     */
    public function setResponseFormat(string $responseFormat): self
    {
        $this->initialized['responseFormat'] = true;
        $this->responseFormat = $responseFormat;
        return $this;
    }

    /**
     * The speed of the generated audio. Select a value from `0.25` to `4.0`. `1.0` is the default.
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * The speed of the generated audio. Select a value from `0.25` to `4.0`. `1.0` is the default.
     */
    public function setSpeed(float $speed): self
    {
        $this->initialized['speed'] = true;
        $this->speed = $speed;
        return $this;
    }
}
