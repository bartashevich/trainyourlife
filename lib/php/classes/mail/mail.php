<?php

	require_once 'mailerClass/PHPMailerAutoload.php';

	function send_email($destination, $destination_name, $email_subject, $email_text){
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set the hostname of the mail server
		$mail->Host = 'smtp.zoho.com';

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "sales@buygames.pt";

		//Password to use for SMTP authentication
		$mail->Password = "WUdx78Ou95";

		//Set who the message is to be sent from
		$mail->setFrom('sales@buygames.pt', 'TrainYourLife Team');

		//Set who the message is to be sent to
		$mail->addAddress($destination, $destination_name);

		//Set the subject line
		$mail->Subject = $email_subject;

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

		$mail->Body = $email_text;

		//Replace the plain text body with one created manually
		//$mail->AltBody = 'This is a plain-text message body';
		$mail->isHTML(true);  
		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');

		//send the message, check for errors
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}
?>