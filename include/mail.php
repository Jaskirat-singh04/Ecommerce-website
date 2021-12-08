<?php
if( ($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["send"]) ){
	
//get data from form  
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email= $_POST['e-mail'];
$message= $_POST['message'];
$to = "UPWale@gmail.com";
$subject = "Mail From ".$email;
$txt ="first_Name = ". $first_name .  "\r\n last_name =" . $last_name. "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: ".$first_name;

if($email!=NULL){
    if(mail($to,$subject,$txt,$headers)){;
		echo "<script> alert('mail sent successfully'); </script>";
	}else{
	echo "<script> alert('mail not sent'); </script>";
}
}else{
	echo "<script> alert('mail not sent'); </script>";
}
}
?>