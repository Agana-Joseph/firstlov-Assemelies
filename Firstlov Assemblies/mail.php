<?php
 if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$content = $_POST["message"];

	$toEmail = "josephagana8@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $phone, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact.html";
?>

Welcome <?php echo $_POST["fname"]; ?>