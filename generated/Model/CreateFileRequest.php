<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class CreateFileRequest
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
    * Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
    
    If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
    
    *
    * @var string
    */
    protected $file;
    /**
    * The intended purpose of the uploaded documents.
    
    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
    
    *
    * @var string
    */
    protected $purpose;
    /**
    * Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
    
    If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
    
    *
    * @return string
    */
    public function getFile() : string
    {
        return $this->file;
    }
    /**
    * Name of the [JSON Lines](https://jsonlines.readthedocs.io/en/latest/) file to be uploaded.
    
    If the `purpose` is set to "fine-tune", each line is a JSON record with "prompt" and "completion" fields representing your [training examples](/docs/guides/fine-tuning/prepare-training-data).
    
    *
    * @param string $file
    *
    * @return self
    */
    public function setFile(string $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
    * The intended purpose of the uploaded documents.
    
    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
    
    *
    * @return string
    */
    public function getPurpose() : string
    {
        return $this->purpose;
    }
    /**
    * The intended purpose of the uploaded documents.
    
    Use "fine-tune" for [Fine-tuning](/docs/api-reference/fine-tunes). This allows us to validate the format of the uploaded file.
    
    *
    * @param string $purpose
    *
    * @return self
    */
    public function setPurpose(string $purpose) : self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
}