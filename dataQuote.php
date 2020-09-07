<?php
	require_once('common.php');
	require_once("assets/PHPMailer/class.phpmailer.php");
	require_once("assets/PHPMailer/class.smtp.php");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$about = $_POST['quotationAbout'];	
	$subject = 'Quotation';	
	$title = 'Quotation Details';	
// user Mail
	$msgData="<table>
			<tr><td>Name</td><td>$name</td></tr>
			<tr><td>Email</td><td>$email</td></tr>
			<tr><td>Mobile</td><td>$mobile</td></tr>
			<tr><td>Quotation About</td><td>$about</td></tr>
		  </table>";
	mailFunction($userEmailID, $msgData, 'Hallmark Tourism', $subject, $title);
// client Mail
	$msgData="Thank You, for submitting your query. We will revert you soon in next 24 hours.";
	mailFunction($email, $msgData, $name, $subject, $title);
?>
