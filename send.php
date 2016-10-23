<?php

	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = "aelayathamby012@gmail.com";
	$subject = "New Message";

	mail ($to, $subject, $message, "From: " . $first_name);
	echo "Your message has been send succesfully";

?>