<?php 
error_reporting(E_ALL);
error_reporting(-1);
 
 $firstName = $_POST["firstName"];
 $lastName = $_POST["lastName"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $message = $_POST["message"];
 
 $email_body = $email_body . "First Name: " . $firstName . "\n";
 $email_body = $email_body . "Last Name: " . $lastName . "\n";
 $email_body = $email_body . "Phone: " . $phone . "\n";
 $email_body = $email_body . "E-mail: " . $email . "\n";
 $email_body = $email_body . "Message: " . $message .  "\n";
	$headers = "From: " . $email;

 if(empty($firstName)){
 	$error = "You must enter your first name.";
 }
 elseif(empty($lastName)){
 	$error = "You must enter your last name.";}
 elseif(empty($email)){
 	$error = "You must enter your email.";}

 elseif(empty($phone)){
 	$error = "You must enter your Phone Number";}
 elseif(empty($message)){
 	$error = "You must enter your Message";}

if(filter_var( 'bob@example.com', FILTER_VALIDATE_EMAIL )==false){
	$error = "You must enter valid email";}

if(isset($error)){
	header('location: formerror.php?e='.urlencode($error)); exit;
}
 



mail ('luke@sodiumhalogen.com', 'PPL Contact', $email_body, $headers);



header('location: contact_thanks.php?e='.urlencode("ThankYou"));

?>