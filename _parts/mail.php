<?php
	require '../PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->setFrom($_POST['email'], $_POST['name']);
	$mail->addAddress('service@daveperlmanestateimages.com');
	$mail->Subject  = 'An Inquiry From DPEM';
	$mail->Body     = $_POST['message'];

	if( !$mail->send() )
	{
		echo "Message was not sent successfully, please try again later.";
	} else 
	{
		echo "Thank you for your inquiry, we will be in touch with you shortly!";
	}

