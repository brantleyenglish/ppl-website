<?php 
error_reporting(E_ALL);
error_reporting(-1);
 
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
 
 $email_body = $email_body . "CompanyName: " . $CompanyName . "\n";
 $email_body = $email_body . "ContactPerson: " . $ContactPerson. "\n";
 $email_body = $email_body . "Phone: " . $PhoneNumber . "\n";
 $email_body = $email_body . "E-mail: " . $email . "\n";
 $email_body = $email_body . "Number of Positions: " . $NofPositions .  "\n";
 $email_body = $email_body . "Job Title: " . $JobTitle .  "\n";
 $email_body = $email_body . "Starting Date: " . $StartingDate .  "\n";
 $email_body = $email_body . "Duration: " . $duration .  "\n";
 $email_body = $email_body . "Job Description: " . $JobDescription .  "\n";
$email_body = $email_body . "Skills Needed: " . $SkillsNeeded .  "\n";

//  if(empty($firstName)){
//  	$error = "You must enter your first name.";
//  }
//  elseif(empty($lastName)){
//  	$error = "You must enter your last name.";}
//  elseif(empty($email)){
//  	$error = "You must enter your email.";}

//  elseif(empty($phone)){
//  	$error = "You must enter your Phone Number";}
//  elseif(empty($message)){
//  	$error = "You must enter your Message";}

// if(filter_var( 'bob@example.com', FILTER_VALIDATE_EMAIL )==false){
// 	$error = "You must enter valid email";}

// if(isset($error)){
// 	header('location: formerror.php?e='.urlencode($error)); exit;
// }
 

 


mail ('luke@sodiumhalogen.com', 'Quote Form', $email_body);



header('location: contact_thanks.php?e='.urlencode("ThankYou"));

?>