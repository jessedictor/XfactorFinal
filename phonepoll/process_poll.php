<?php
	require '../Services/Twilio.php';
	// Connect to MySQL, and connect to the Database
	mysql_connect('localhost', 'jesse_admin', 'jesse_admin') or die(mysql_error());
	mysql_select_db('jesse_admin') or die(mysql_error());

	// @start snippet
	// Check if values have been entered
	$digit = isset($_REQUEST['Digits']) ? $_REQUEST['Digits'] : null;
	$choices = array(
		'1' => 'human',
		'2' => 'not_human',
	);
	if (isset($choices[$digit])) {
		mysql_query("INSERT INTO `results` (`" . $choices[$digit] . "`) VALUES ('1')");
		$say = 'Thank you. You Humanity has been noted.';
	} else {
		$say = "Sorry, Human or not human is a binary result.";
	}
	// @end snippet
	// @start snippet
    //require '../Services/Twilio.php';
	$response = new Services_Twilio_Twiml();
	$response->say($say);
	$gather = $response->gather(array(
		'action' => 'process_poll2.php?human='.$_REQUEST['Digits'],
		'method' => 'GET',
		'numDigits' => '1',
	));
	$gather->say("Do you like dogs?");
	$gather->say("If you like dogs, press 1 now.");
	$gather->say("If You do not like dog, press 2 now.");
	header('Content-Type: text/xml');
	print $response;
	// @end snippet

