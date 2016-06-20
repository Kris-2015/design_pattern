<!DOCTYPE html>
<html>
<head>
	<title>Sending mail using PHP</title>
</head>
<body>
<?php

	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$to = "krishnadevb@gmail.com";
	$subject = "test message";

	$message = "hii, this is a test message";

	$header = "From: kris@mindfire.com \r\n";
	$header = "cc:	xyz@gmail.com \r\n";
	$header = "MIME-Version: 1.0\r\n";

	$retval = mail($to, $subject, $message, $header);
	echo "message sent";
	/*if($retval == true)
	{
		echo "Message sent successfully";
	}
	else
	{
		echo "Message could not been used";
	}*/
?>
</body>
</html>