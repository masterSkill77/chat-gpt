# Installation

`composer require masterskill/chat-gpt`

# Documentation

## How to initialize the package

You need to instaciate the OpenAi class

`require "vendor/autoload.php";`

Use the namespace

`use Masterskill\Chatgpt\OpenAi;`

Instanctiate class

`$openAi = new OpenAi("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");`

Ex : get all available models
`$response = $openAi->models()`

## How to use it

#### Models

- Retrieve all models
``$openAi->models()``
- Retrieve one model
``$openAi->getModel($modelName)``

#### Chat
- Chat with GPT :
``$openAi->chat($modelName, $data)``

-- $modelName : should be one available on the models listed.
-- $data : should be on form of :
             - array of ["role" => $role, "content" => $content]
And then, you can implemente it like you want, but just follow what said from the doc
