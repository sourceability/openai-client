<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateEditRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @var string
     */
    protected $model;
    /**
     * The input text to use as a starting point for the edit.
     *
     * @var string|null
     */
    protected $input = '';
    /**
     * The instruction that tells the model how to edit the prompt.
     *
     * @var string
     */
    protected $instruction;
    /**
     * How many edits to generate for the input and instruction.
     *
     * @var int|null
     */
    protected $n = 1;
    /**
    * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values means the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
    
    We generally recommend altering this or `top_p` but not both.
    
    *
    * @var float|null
    */
    protected $temperature = 1;
    /**
    * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    
    We generally recommend altering this or `temperature` but not both.
    
    *
    * @var float|null
    */
    protected $topP = 1;
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @return string
     */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model) : self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
     * The input text to use as a starting point for the edit.
     *
     * @return string|null
     */
    public function getInput() : ?string
    {
        return $this->input;
    }
    /**
     * The input text to use as a starting point for the edit.
     *
     * @param string|null $input
     *
     * @return self
     */
    public function setInput(?string $input) : self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * The instruction that tells the model how to edit the prompt.
     *
     * @return string
     */
    public function getInstruction() : string
    {
        return $this->instruction;
    }
    /**
     * The instruction that tells the model how to edit the prompt.
     *
     * @param string $instruction
     *
     * @return self
     */
    public function setInstruction(string $instruction) : self
    {
        $this->initialized['instruction'] = true;
        $this->instruction = $instruction;
        return $this;
    }
    /**
     * How many edits to generate for the input and instruction.
     *
     * @return int|null
     */
    public function getN() : ?int
    {
        return $this->n;
    }
    /**
     * How many edits to generate for the input and instruction.
     *
     * @param int|null $n
     *
     * @return self
     */
    public function setN(?int $n) : self
    {
        $this->initialized['n'] = true;
        $this->n = $n;
        return $this;
    }
    /**
    * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values means the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
    
    We generally recommend altering this or `top_p` but not both.
    
    *
    * @return float|null
    */
    public function getTemperature() : ?float
    {
        return $this->temperature;
    }
    /**
    * What [sampling temperature](https://towardsdatascience.com/how-to-sample-from-language-models-682bceb97277) to use. Higher values means the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
    
    We generally recommend altering this or `top_p` but not both.
    
    *
    * @param float|null $temperature
    *
    * @return self
    */
    public function setTemperature(?float $temperature) : self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }
    /**
    * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    
    We generally recommend altering this or `temperature` but not both.
    
    *
    * @return float|null
    */
    public function getTopP() : ?float
    {
        return $this->topP;
    }
    /**
    * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
    
    We generally recommend altering this or `temperature` but not both.
    
    *
    * @param float|null $topP
    *
    * @return self
    */
    public function setTopP(?float $topP) : self
    {
        $this->initialized['topP'] = true;
        $this->topP = $topP;
        return $this;
    }
}