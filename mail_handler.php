<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='shapingfuture@spfootballacademy.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
		
		

		if(mail($to, $subject, $message, $headers)){
			//echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			//echo '<a href="https://spfootballacademy.com/contact.html">Click here</a>';
			header("Location: submit.html");

		}
		else{
			echo "Something went wrong!";
		}
	}
?>