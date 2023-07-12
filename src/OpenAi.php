<?php

namespace Masterskill\Chatgpt;

use Exception;

class OpenAi
{
    protected $models;
    public function __construct(protected string $apiKey)
    {
        $this->models = new Model($apiKey);
    }
    public function models()
    {
        return $this->models->getModels();
    }
    public function getModel(string $model)
    {
        return $this->models->getModel($model);
    }
}
