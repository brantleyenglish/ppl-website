<?php 
error_reporting(E_ALL);
error_reporting(-1);

require_once "_inc/recaptcha/recaptchalib.php";

// your secret key
$secret = "6LfabR0TAAAAAGp19E5ZeZR9V1BKdKS8u1-K5Ebk";
// empty response
$response = null;
// check secret key
$reCaptcha = new ReCaptcha($secret);
// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$interest = $_POST["interest"];
	$emailTo = $_POST["emailTo"] . "@pplstaffing.com";
	$message = $_POST["message"];

	$email_body = "Name: " . $name . "\n";
	$email_body .= "Phone#: " . $phone. "\n";
	$email_body .= "E-mail: " . $email . "\n";
	$email_body .= "Intesreted in this Position: " . $interest .  "\n";
	$email_body .= "Message: " . $message .  "\n";
	$headers = "From: " . $email;

	//amy@pplstaffing.com

	if (mail($emailTo, 'Contact for Position Form', $email_body, $headers)) {
		header('location: contact_thanks.php?e='.urlencode("ThankYou"));
	} else {
		$link = "javascript:history.back(1);";
		header('location: formerror.php?link='.urlencode($link).'&e='.urlencode("Email was not sent. Try that again."));
	}


} else { // no response from reCaptcha
	$link = "javascript:history.back(1);";
	header('location: formerror.php?link='.urlencode($link).'&e='.urlencode("Email was not sent. Try that again."));
}

?>