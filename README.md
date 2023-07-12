# Installation

`composer require masterskill/chat-gpt`

# Documentation

# How to initialize the package

You need to instaciate the OpenAi class

`require "vendor/autoload.php";`

Use the namespace

`use Masterskill\Chatgpt\OpenAi;`

Instanctiate class

`$openAi = new OpenAi("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");`

Ex : get all available models
`$response = $openAi->models()`
