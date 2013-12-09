<?php
require 'Services/Twilio.php';

// Set our AccountSid and AuthToken
$sid = 'AC123';
$token = 'abcde';

// @start snippet
// List of phone numbers
$numbers = array('415-555-1234', '415-555-2345', '415-555-3456');
// @end snippet
// @start snippet
// Instantiate a client to Twilio's REST API
$client = new Services_Twilio($sid, $token);

foreach ($numbers as $number) {
	try {
		$call = $client->account->calls->create(
			'415-555-7777',									// Caller ID
			$number,												// Your friend's number
			'http://example.com/poll.php'	 // Location of your TwiML
		);
		echo "Started call: $call->sid\n";
	} catch (Exception $e) {
		echo 'Error starting phone call: ' . $e->getMessage() . "\n";
	}
}
// @end snippet
?>