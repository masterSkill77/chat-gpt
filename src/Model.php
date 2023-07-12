<?php

namespace Masterskill\Chatgpt;

class Model extends Curl
{
    public function __construct($apiKey)
    {
        parent::__construct("models", $apiKey);
    }
    public function getModels()
    {
        $this->init_curl($this->baseUrl);
        return $this->execCurl();
    }
    public function getModel(string $model)
    {
        $this->init_curl($this->baseUrl . "/" . $model);
        return $this->execCurl();
    }
}
