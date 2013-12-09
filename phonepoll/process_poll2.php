<?php
	require '../Services/Twilio.php';
	// Connect to MySQL, and connect to the Database

	// @start snippet
	// Check if values have been entered
	$digit = isset($_REQUEST['Digits']) ? $_REQUEST['Digits'] : null;
	$choices = array(
		'1' => 'dog',
		'2' => 'no_dog',
	);
	if (isset($choices[$digit])) {
		$say = 'Thank you for your dog feelings feedback';
	} else {
		$say = "There is no middle grounds for dogs.";
	}
	// @end snippet
	// @start snippet
    //require '../Services/Twilio.php';
	$response = new Services_Twilio_Twiml();
	$response->say($say);
	$response->hangup();
	header('Content-Type: text/xml');
	print $response;
	// @end snippet
	
	
	$to      = 'jessedictor@gmail.com';
	$subject = 'human and dogs';
	$message = 'Jesse '. $_GET['human'] .' Human and ' . $_REQUEST['Digits'] . ' Dog';
	$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

