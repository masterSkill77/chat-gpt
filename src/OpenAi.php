<?php

namespace Masterskill\Chatgpt;

use Exception;

class OpenAi
{
    private $baseUrl = "https://api.openai.com/v1/";
    private $apiKey;
    private $model;
    public function __construct(string $apiKey, $model)
    {
        $this->apiKey = $apiKey;
    }
    protected function initiateCurl($url = "")
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->baseUrl . $url);
        curl_setopt($curl, CURLOPT_HEADER, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $this->apiKey));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        return curl_exec($curl);
    }
    public function models()
    {
        return $this->initiateCurl("models");
    }
}
