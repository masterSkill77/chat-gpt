<?php
require "vendor/autoload.php";

use Masterskill\Chatgpt\OpenAi;

$openAi = new OpenAi('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', []);

$response = $openAi->chat("Tu peux citer 4 grands noms dans le foot moderne ?");

echo $response . "\n";
