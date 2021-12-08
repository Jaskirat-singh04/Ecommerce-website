<?php
$log_usernameErr = $log_passwordErr = ""; //variables to store error msgs
$username = $password = ""; //variables to store user inputs

if( ($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["sign_in"]) ){
	if( (empty($_POST["username"])) || (empty($_POST["password"])) ){
			if( empty($_POST["username"]) ) $log_usernameErr = "username is required";
			if( empty($_POST["password"]) ) $log_passwordErr = "password is required";
	}else{
		//securing inputs
		$username = htmlspecialchars($_POST["username"]);
		$password = htmlspecialchars($_POST["password"]);
		//establish conn with database
		$conn = mysqli_connect("localhost","root","","UPWale_com");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
		if( !$conn ){
			die("Error".mysqli_connect_error());
		}else{
			//searching for the spcefied fields in database
			$result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND pass = '$password' ;");
			if(mysqli_num_rows($result) > 0){
				//redirect to home page
				header("location: index.php?username=$username"); //send username using GET method
			}else{
				$log_usernameErr = "either username does not exist";
				$log_passwordErr = "or password is wrong";
			}
		}
	}
}

?>