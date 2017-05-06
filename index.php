<?php
require 'vendor/autoload.php';

$client = Zelenin\Telegram\Bot\ApiFactory::create('here you token of botfather'); // Set your access token
$update = json_decode(file_get_contents('php://input'));

//your app
try {

    if($update->message->text == 'hello')
    {
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "Hello, this working!"
     	]);
    }
    else 
    {
    }
} catch (\Zelenin\Telegram\Bot\Exception\NotOkException $e) {

}
