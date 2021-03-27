<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $schoolName=$_POST['schoolName'];
        $serName=$_POST['serName'];
		$msg=$_POST['msg'];

		$to='info@easycodegh.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Email :".$email."\n"."Phone :".$phone."\n"."Name of School or Institution:".$schoolName."\n"."Indicate any background in computer literacy:".$serName."\n"."Your expectations sfter the course:".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Form submitted successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>