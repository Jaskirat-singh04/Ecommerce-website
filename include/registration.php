<?php
$usernameErr = $emailErr = $passwordErr = $cnfrmErr ="" ; //variables to store error msgs
$username = $email = $password = $cnfrm = ""; //variables to store user inputs
//variables for sign_up status
$signup_status_success = false;
$signup_status_failed = false;

if( ($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["sign_up"]) ){
	if( (empty($_POST["sign_user"])) || (empty($_POST["sign_pass"])) || (empty($_POST["cnfrm"])) || (empty($_POST["email"])) ){
			  if( empty($_POST["sign_user"]) ) $usernameErr = "username is required";
			  if( empty($_POST["email"]) ) $emailErr = "email is required";
			  if( empty($_POST["sign_pass"]) ) $passwordErr = "password is required";
			  if( empty($_POST["cnfrm"]) ) $cnfrmErr = "retype password here";
	}else{          		  
		if(validateInputs()){
			$conn = mysqli_connect("localhost","root","","UPWale_com");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
			if( !$conn ){
				die("Error".mysqli_connect_error());
			}else{
				//searching for duplicates
				if(mysqli_num_rows( mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' ;") ) > 0){
					$usernameErr = "username already exists";
				}else if(mysqli_num_rows( mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' ;") ) > 0  ){
						$emailErr = "email already registered";
				}else{//store in database (user registered)
					if(mysqli_query($conn,"INSERT INTO users VALUES('$username','$email','$password');")){
						//create a correspondin cart_table for the user
						$sql = "CREATE TABLE $username (p_id integer(4),quantity integer(2)) ;";
						mysqli_query($conn,$sql);
						$signup_status_success = true;
					}else{
						$signup_status_failed = true;
					}
				}
			}
		}
	}
}


function validateInputs(){
	global $username,$email,$password,$cnfrm;
	global $usernameErr,$emailErr,$passwordErr,$cnfrmErr;
	$returnValue = true;  //if no errors
	//secure inputs
	$username = htmlspecialchars($_POST["sign_user"]);
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["sign_pass"]);
	$cnfrm = htmlspecialchars($_POST["cnfrm"]);
		      
	//length of strings
	if( (strlen($username) > 15) || (strlen($username) < 6) ){ $usernameErr = "username must be bw 6-15 chars in length"; $returnValue=false;}
	if( strlen($email) > 80 ) {$emailErr = "atmost 80 characters allowed";$returnValue=false;}
	if( (strlen($password) > 10) || (strlen($password) < 6) ){$passwordErr = "password length must be 6-10 chars in length";$returnValue=false;}
	//check email
	if( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {$emailErr = "enter correct email";$returnValue=false;}
	//check passwords
	if( $password != $cnfrm ) {$cnfrmErr = "password fields does not match";$returnValue=false;}
	
	return $returnValue;
}

?>