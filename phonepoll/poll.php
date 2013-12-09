<?php
    require '../Services/Twilio.php';
$response = new Services_Twilio_Twiml();
$gather = $response->gather(array(
	'action' => 'process_poll.php',
	'method' => 'GET',
	'numDigits' => '1'
));
$gather->say("Are you human");
$gather->say("If You are human press 1 now");
$gather->say("If You are not human, press 2 now");

header('Content-Type: text/xml');
print $response;
?>