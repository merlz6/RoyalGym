<?php

	if(isset($_POST['submit'])) {
		$firstName = $_POST['first'];
		$lastName = $_POST['last'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];

		$mailTo = "contact@royaljiujitsuacademy.com"
		$headers = "From: ".$mailFrom;
		$txt = "You have received an email from ".$first." ".$last.".\n\n".$message;

		mail($mailTo, $subject, $txt, $headers);

		header("Location: contact.html?mailsend");
	}
?>