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
       
    $sql = "Select * from Adminlogin where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // echo($sql);
    // die();
	
    $num = mysqli_num_rows($result);
	

    if ($num == 1){
        //while($row=mysqli_fetch_assoc($result)){
            //if (password_verify($password, $row['password']))
			//{ 
              	$login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                 header("location: adminpage.php");
            // } 
            
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
//}
    
?>