<?php

namespace Masterskill\Chatgpt;

use Exception;

class OpenAi
{
    protected $models;
    protected $chat;
    public function __construct(protected string $apiKey)
    {
        $this->models = new Model($apiKey);
        $this->chat = new Chat($apiKey);
    }
    public function models()
    {
        return $this->models->getModels();
    }
    public function getModel(string $model)
    {
        return $this->models->getModel($model);
    }
    public function chat($model, array $params)
    {
        return $this->chat->prompt($model, $params);
    }
}
