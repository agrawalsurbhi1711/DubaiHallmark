<?php
	require_once('common.php');
	require_once("assets/PHPMailer/class.phpmailer.php");
	require_once("assets/PHPMailer/class.smtp.php");	
	$name = $_POST['contactName'];
	$email = $_POST['contactEmail'];
	$mobile = $_POST['contactMobile'];
	$message = $_POST['contactMessage'];
	$subject = 'Contact';	
	$title = 'Contact Details';	
// user Mail
	$msgData="<table>
			<tr><td>Name</td><td>$name</td></tr>
			<tr><td>Email</td><td>$email</td></tr>
			<tr><td>Mobile</td><td>$mobile</td></tr>
			<tr><td>Message</td><td>$message</td></tr>
		  </table>";
	mailFunction($userEmailID, $msgData, 'Hallmark Tourism', $subject, $title);
// client Mail
	$msgData="Thank You, for submitting your query. We will revert you soon in next 24 hours.";
	mailFunction($email, $msgData, $name, $subject, $title);
?>
