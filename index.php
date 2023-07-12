<?php
require "vendor/autoload.php";

use Masterskill\Chatgpt\OpenAi;

$openAi = new OpenAi('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', []);

$response = $openAi->chat("Tu peux citer 4 grands noms dans le foot moderne ?");

echo $response . "\n";
