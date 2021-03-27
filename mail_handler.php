<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $businessName=$_POST['businessName'];
        $serName=$_POST['serName'];
		$msg=$_POST['msg'];

		$to='info@easycodegh.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Email :".$email."\n"."Phone :".$phone."\n"."Name of Business :".$businessName."\n"."Service Required :".$serName."\n"."Nature of Business :".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Form submitted successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>