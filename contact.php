<?php

	if(isset($_POST['submit']))
	{
		$name=$_POST['fname'];
		$number=$_POST['number'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$to = 'pankajbaheti321@gmail.com';
		$subject = 'Form submission';
		$message = "Name: ".$name."\n"."Contact No: ".$number."\n"."\n"."Query From ASC:"."\n".$msg;
		$headers = 'From: ascorppune@gmail.com' . "\r\n" .
    'Reply-To:'.$email. "\r\n";


		if(mail($to, $subject, $message, $headers)){

			header("location:index.html");

		}
		else{
			
			echo "<script>alert('Something went Wrong')</script>";
			echo"Something went Wrong";
			header("location:index.html");
		}
	}




?>