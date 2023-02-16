<?php

namespace Sourceability\OpenAIClient\Generated\Model;

class ImagesResponseDataItem extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $b64Json;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getB64Json() : string
    {
        return $this->b64Json;
    }
    /**
     * 
     *
     * @param string $b64Json
     *
     * @return self
     */
    public function setB64Json(string $b64Json) : self
    {
        $this->initialized['b64Json'] = true;
        $this->b64Json = $b64Json;
        return $this;
    }
}