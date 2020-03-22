<?php
	if(isset($_POST['submit'])) {

		$mailTo = $_POST['mail'];
		$headers = "From: contact@royaljiujitsuacademy.com";
		$subject = "Royal JiuJitsu Acadamy Newsletter";
		$news = "You are receiving a newsletter!";

		mail($mailTo, $subject, $news, $headers);

		header("Location: index.html?mailsend");
	}
?>