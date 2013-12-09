<?php
    // Include the Twilio PHP library
    require 'Services/Twilio.php';
 
 
	$phoneReciever = $_POST["phone"];
	
	$t='/\(?[2-9][0-8][0-9]\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}/';
	$arr=preg_match($t,$_POST["phone"],$mat);
	$arr=preg_match($t,$_POST["phone"],$mat);
	
	$phoneReciever = $mat[0];
	
    // Twilio REST API version
    $version = "2010-04-01";
 
    // Set our Account SID and AuthToken
    $sid = 'AC9d88cef84b9bc3fbc141d7140241ebcb';
    $token = 'a2160cf3eba8b745cd07db2ac22cf9c5';
     
    // A phone number you have previously validated with Twilio
    $phonenumber = '15035057204';
     
    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($sid, $token, $version);
 
    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $phonenumber, // The number of the phone initiating the call
            $phoneReciever, // The number of the phone receiving call
            'http://jessedictor.com/twilio/phonepoll/poll.php' // The URL Twilio will request when the call is answered
        );
        echo 'Started call: ' . $call->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
	
?>