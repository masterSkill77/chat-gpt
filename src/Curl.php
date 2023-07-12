<?php

namespace Masterskill\Chatgpt;

class Curl
{
    protected $baseUrl = "https://api.openai.com/v1/";
    protected $curl;
    public function __construct(protected string $type, protected string $apiKey)
    {
        $this->baseUrl = $this->baseUrl . $this->type;
    }
    public function init_curl($url)
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_HEADER, TRUE);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $this->apiKey));
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
    }
    public function curl()
    {
        return $this->curl;
    }
    public function execCurl(array $data = [])
    {
        if (!empty($data)) {
        }
        return curl_exec($this->curl);
    }
}
