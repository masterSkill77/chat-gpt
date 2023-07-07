<?php

namespace Masterskill\Chatgpt;

use Exception;
use Orhanerday\OpenAi\OpenAi as OrhanerdayApi;

class OpenAi
{
    protected $model = "gpt-3.5-turbo";
    protected $openAi;
    protected $role = "user";
    protected $config = [];
    public function __construct(string $apiKey, array $config)
    {
        $this->openAi = new OrhanerdayApi($apiKey);
        $this->initializeConfig($config);
    }
    protected function initializeConfig($config)
    {
        $this->config['temperature'] = isset($config['temperature']) ? $config['temperature'] : 1.0;
        $this->config['n'] = isset($config['n']) ? $config['n'] : 1;
        $this->config['role'] = isset($config['role']) ? $config['role'] : 'user';
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }
    public function setRole(string $role)
    {
        $this->role = $role;
    }

    public function chat($content)
    {
        $complete = $this->openAi->chat([
            'temperature' => $this->config['temperature'],
            'n' => $this->config['n'],
            'model' => $this->model,
            'messages' => [
                [
                    'role' => $this->config['role'],
                    'content' => $content
                ]
            ]
        ]);
        $data = json_decode($complete);
        if (isset($data->choices))
            return $data->choices[0]->message->content;
        throw new Exception($data);
    }
}
