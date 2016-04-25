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

	// create email body
	$email_body = "CompanyName: " . $CompanyName . "\n";
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

	// create wite to file html
	$today = date("F j, Y, g:i a"); // get date
	$html_body = "<ul><li>" . $today . "</li>";
	$html_body .= "<li>CompanyName: " . $CompanyName . "</li>";
	$html_body .= "<li>ContactPerson: " . $ContactPerson. "</li>";
	$html_body .= "<li>Phone: " . $PhoneNumber . "</li>";
	$html_body .= "<li>E-mail: " . $email . "</li>";
	$html_body .= "<li>Number of Positions: " . $NofPositions .  "</li>";
	$html_body .= "<li>Job Title: " . $JobTitle .  "</li>";
	$html_body .= "<li>Starting Date: " . $StartingDate .  "</li>";
	$html_body .= "<li>Duration: " . $duration .  "</li>";
	$html_body .= "<li>Job Description: " . $JobDescription .  "</li>";
	$html_body .= "<li>Skills Needed: " . $SkillsNeeded .  "</li>";
	$html_body .= "</ul><hr><p></p>";

	//amy@pplstaffing.com

	if (mail('amy@pplstaffing.com', 'Employer Post Job Form', $email_body, $headers)) {
		//write submission to file
		$file = "submissions/form-subs-post-job.html";
		$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
		fwrite($fp, $html_body) or die("Couldn't write values to file!");
		// END write to file
		
		// thank you page
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