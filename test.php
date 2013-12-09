<?php
 
    // Include the Twilio PHP library
    require 'Services/Twilio.php';
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC9d88cef84b9bc3fbc141d7140241ebcb";
$AuthToken = "a2160cf3eba8b745cd07db2ac22cf9c5";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$sms = $client->account->sms_messages->create(
    "15035057204", // From this number
    "19712278256", // To this number
    "Test message!"
);
 
// Display a confirmation message on the screen
echo "Sent message {$sms->sid}";
