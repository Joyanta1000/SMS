<?php
 require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic('11a8b14d', 'DYCPOKZvSUkVOr0F');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '88'.'01627962866',
    'from' => 'Nexmo',
    'text' => 'Hello from Nexmo'
]);
 
?>


