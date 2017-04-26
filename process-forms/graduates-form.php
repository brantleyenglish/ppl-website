<?php
error_reporting(E_ALL);
error_reporting(-1);

require_once "../_inc/recaptcha/recaptchalib.php";

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
	$location = $_POST["location"];
	$positionType = $_POST["position-type"];
	$message = $_POST["message"];

	// create email body
	$email_body = "Name: " . $name . "\n";
	$email_body .= "Phone#: " . $phone. "\n";
	$email_body .= "E-mail: " . $email . "\n";
	$email_body .= "Location: " . $location .  "\n";
	$email_body .= "Position Type: " . $positionType . "\n";
	$email_body .= "Message: " . $message .  "\n";
	$headers = "From: " . $email;

	// create wite to file html
	$today = date("F j, Y, g:i a"); // get date
	$html_body = "<ul><li>" . $today . "</li>";
	$html_body .= "<li>Name: " . $name . "</li>";
	$html_body .= "<li>Phone#: " . $phone. "</li>";
	$html_body .= "<li>E-mail: " . $email . "</li>";
	$html_body .= "<li>Location: " . $location .  "<br></li>";
	$html_body .= "<li>Position Type: " . $positionType . "</li>";
	$html_body .= "<li>Message: " . $message .  "</li>";
	$html_body .= "</ul><hr><p></p>";

	//amy@pplstaffing.com

	if (mail('amy@pplstaffing.com', 'Contact for Graduates Form', $email_body, $headers)) {
		//write submission to file
		$file = "../submissions/form-subs-graduates.html";
		$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
		fwrite($fp, $html_body) or die("Couldn't write values to file!");
		// END write to file

		// thank you page
		header('location: ../contact_thanks.php?e='.urlencode("ThankYou"));
	} else {
		//fail
		$link = "javascript:history.back(1);";
		header('location: ../formerror.php?link='.urlencode($link).'&e='.urlencode("Email was not sent. Try that again."));
	}


} else { // no response from reCaptcha
	$link = "javascript:history.back(1);";
	header('location: ../formerror.php?link='.urlencode($link).'&e='.urlencode("Email was not sent. Try that again."));
}

?>