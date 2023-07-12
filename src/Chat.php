<?php

namespace Masterskill\Chatgpt;

class Chat extends Curl
{
    public function __construct(string $apiKey)
    {
        parent::__construct("chat", $apiKey);
    }

    public function prompt($model, $messages)
    {
        $this->init_curl($this->baseUrl . "/completions");
        return $this->execCurl([
            "model" => $model,
            "messages" => $messages
        ]);
    }
}
