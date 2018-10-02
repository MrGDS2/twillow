<?php
echo ("getsms page ");
// Update the path below to your autoload.php,
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "***";//Put your own credentials
$token  = "***";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+19173490168", // to
        array(
            "from" => "+19085163288", //from
            "body" => "Hello from George Samuels CS 643 Fall 2018"
        )
    );

print($message->sid);

