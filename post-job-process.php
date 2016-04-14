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

	$CompanyName = $_POST["CompanyName"];
	$ContactPerson = $_POST["ContactPerson"];
	$PhoneNumber = $_POST["PhoneNumber"];
	$email = $_POST["email"];
	$NofPositions = $_POST["NofPositions"];
	$JobTitle = $_POST["JobTitle"];
	$StartingDate = $_POST["StartingDate"];
	$duration = $_POST["duration"];
	$JobDescription = $_POST["JobDescription"];
	$SkillsNeeded = $_POST["SkillsNeeded"];

	$email_body .= "CompanyName: " . $CompanyName . "\n";
	$email_body .= "ContactPerson: " . $ContactPerson. "\n";
	$email_body .= "Phone: " . $PhoneNumber . "\n";
	$email_body .= "E-mail: " . $email . "\n";
	$email_body .= "Number of Positions: " . $NofPositions .  "\n";
	$email_body .= "Job Title: " . $JobTitle .  "\n";
	$email_body .= "Starting Date: " . $StartingDate .  "\n";
	$email_body .= "Duration: " . $duration .  "\n";
	$email_body .= "Job Description: " . $JobDescription .  "\n";
	$email_body .= "Skills Needed: " . $SkillsNeeded .  "\n";
	$headers = "From: " . $email;

	//amy@pplstaffing.com

	if (mail('amy@pplstaffing.com', 'Employer Post Job Form', $email_body, $headers)) {
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