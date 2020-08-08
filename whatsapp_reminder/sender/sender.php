<?php

$messaggio=$_POST["messaggio"];




// loop($data[1], $messaggio);


// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console


// Use the client to do fun stuff like send text messages!

    $sid = 'AC11748719db87f0ca7ba157ea63d9f299';
    $token = 'b0189976008208fad13869cea681947a';
    $client = new Client($sid, $token);
    
    $client->messages->create(
        // the number you'd like to send the message to
        'whatsapp:+393381503161',
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => 'whatsapp:+14155238886',

            // the body of the text message you'd like to send
            'body' => $messaggio
        ]
    );

header("location: ../index.php");