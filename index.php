<?php
echo ("getsms page ");
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "##";//Put your own credentials
$token  = "##";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+11234567890", // to
        array(
            "from" => "+19876543210", //from
            "body" => "Hello from Rohan Raygade CS 643 Fall 2018"
        )
    );

print($message->sid);
