<?php

include "connection.php";
?>


<?php


$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'connection.php';


	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
    
	$sql = "Select * from userlogin where username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	$num = mysqli_num_rows($result);

	if ($num == 1){
		
			 $login = true;
			//  session_start();
			//  $_SESSION['loggedin'] = true;
			//  $_SESSION['username'] = $username;
			// header("location: userhome.php");
		
		
	}
	
 
	else{
		$showError = "Invalid Credentials";
	}
}

    
?>