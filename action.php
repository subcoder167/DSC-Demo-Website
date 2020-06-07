<?php 
	$first_name = $_POST['first name'];
	$last_name = $_POST['last name'];
	$year_of_studying = $_POST['year of studying'];
	$visitor_email = $_POST['email'];
	$message = $_POST['subject'];

	$email_from = 'Dsc webpage';

	$email_subject = "New Message";

	$email_body = "User First Name: $first_name.\n";
					"User Last Name: $last_name.\n";
					"User Email: $visitor_email.\n";
						"User Message: $message.\n";


	$to = "subhajitmaji167@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location: index.html");



 ?>