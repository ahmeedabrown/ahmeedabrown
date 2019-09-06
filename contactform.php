<?php 
if (isset($POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['phone number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$mailTo = "ahmeedabrown1020@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt ="you have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
?>