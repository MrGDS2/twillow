<?php
echo ("getsms page ");
// Update the path below to your autoload.php,
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC35b0520a503e9ec60eb740564469dd60";//Put your own credentials
$token  = "9f5062a71de0157a6cd3238a6825deb1";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+1975740612", // to
        array(
            "from" => "+19085163288", //from
            "body" => "Hello from George Samuels CS 643 Fall 2018"
        )
    );

print($message->sid);

