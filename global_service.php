<?php
require_once "global_vars.php";
require_once "vendor/PHPMailer/PHPMailerAutoload.php";

function email($subject, $body, $addresses, $attachments = null) {

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = "joyceliew92@gmail.com";//joey guna account gmail kau
	$mail->Password = "31010919";//joey guna account gmail kau
	$mail->SetFrom("joyceliew92@gmail.com");//joey guna account gmail kau
	$mail->Subject = $subject;
	$mail->Body = $body;

	foreach ($addresses as $address)
		$mail->AddAddress($address);

	//add attachments to email
	if ($attachments != null)
		foreach ($attachments as $attachment)
			$mail->AddAttachment($attachment);

	if (!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}
}


/**
 * Created by PhpStorm.
 * User: Mizan
 * Date: 02-Mar-17
 * Time: 12:45 AM
 */