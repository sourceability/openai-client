<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Model;

use ArrayObject;

class CreateEditRequest extends ArrayObject
{
    protected array $initialized = [];

    /**
     * ID of the model to use. You can use the `text-davinci-edit-001` or `code-davinci-edit-001` model with this endpoint.
     */
    protected ?string $model = null;

    /**
     * The input text to use as a starting point for the edit.
     */
    protected ?string $input = '';

    /**
     * The instruction that tells the model how to edit the prompt.
     */
    protected ?string $instruction = null;

    /**
     * How many edits to generate for the input and instruction.
     */
    protected ?int $n = 1;

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.

     *
     * @var float|null
     */
    protected $temperature = 1;

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.

     *
     * @var float|null
     */
    protected $topP = 1;

    /**
     * @param string $model ID of the model to use. You can use the `text-davinci-edit-001` or `code-davinci-edit-001` model with this endpoint.
     * @param string|null $input The input text to use as a starting point for the edit.
     * @param string $instruction The instruction that tells the model how to edit the prompt.
     * @param int|null $n How many edits to generate for the input and instruction.
     * @param float|null $temperature What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     *                                We generally recommend altering this or `top_p` but not both.
     * @param float|null $topP An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
     *                         We generally recommend altering this or `temperature` but not both.
     */
    public function __construct($model = null, $input = '', $instruction = null, $n = 1, $temperature = 1, $topP = 1)
    {
        if ($model !== null) {
            $this->setModel($model);
        }
        if ($input !== null) {
            $this->setInput($input);
        }
        if ($instruction !== null) {
            $this->setInstruction($instruction);
        }
        if ($n !== null) {
            $this->setN($n);
        }
        if ($temperature !== null) {
            $this->setTemperature($temperature);
        }
        if ($topP !== null) {
            $this->setTopP($topP);
        }
    }

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the model to use. You can use the `text-davinci-edit-001` or `code-davinci-edit-001` model with this endpoint.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * ID of the model to use. You can use the `text-davinci-edit-001` or `code-davinci-edit-001` model with this endpoint.
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }

    /**
     * The input text to use as a starting point for the edit.
     */
    public function getInput(): ?string
    {
        return $this->input;
    }

    /**
     * The input text to use as a starting point for the edit.
     */
    public function setInput(?string $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }

    /**
     * The instruction that tells the model how to edit the prompt.
     */
    public function getInstruction(): string
    {
        return $this->instruction;
    }

    /**
     * The instruction that tells the model how to edit the prompt.
     */
    public function setInstruction(string $instruction): self
    {
        $this->initialized['instruction'] = true;
        $this->instruction = $instruction;
        return $this;
    }

    /**
     * How many edits to generate for the input and instruction.
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * How many edits to generate for the input and instruction.
     */
    public function setN(?int $n): self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
    We generally recommend altering this or `top_p` but not both.
     */
    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
    We generally recommend altering this or `top_p` but not both.
     */
    public function setTemperature(?float $temperature): self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    We generally recommend altering this or `temperature` but not both.
     */
    public function getTopP(): ?float
    {
        return $this->topP;
    }

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    We generally recommend altering this or `temperature` but not both.
     */
    public function setTopP(?float $topP): self
    {
        $this->initialized['topP'] = true;
        $this->topP = $topP;
        return $this;
    }
}
