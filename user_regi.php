<?php
$showalert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] =="POST"){
include 'connection.php';

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];


//check whther the useranme exixts or not
$existsql="SELECT * FROM `userlogin` WHERE username ='$username'";
$result = mysqli_query($conn, $existsql);
// echo($result);
// die();
$numexistrows=mysqli_num_rows($result);
// echo($numexistrows);
// die();
if($numexistrows > 0){
    
    $showError = "Username Already Exist";
}
else{
    
        if(($password == $cpassword)){
        $sql = "INSERT INTO `userlogin` ( `name`, `username`, `password`, `date`) VALUES ( '$name', '$username', '$password', current_timestamp())"; 
        $result = mysqli_query($conn, $sql);
        // echo($result);
        //  die();
        if($result){
            $showalert = true;
        }
    }
    else{
        $showError = "password do not match ";
    }
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body  background="images/image5.jpg">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<div class="container my-4">
			
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	
		<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="/invoiceSystem2/user-login.php">User Login</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="user-login.php">Home</a>
				</li>

				<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				More
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<li><a class="dropdown-item" href="user_regi.php">User Registration</a></li>
				<li><a class="dropdown-item" href="admin-login.php">Admin Login</a></li>
				
			</ul>
			</li>
				

			</ul>
			</div>
		</div>
		<h5 class="text">SignUp To Our System</h5>
		</nav> 
        <?php
        if($showalert){

                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> Your account is now created and you can login
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div> ';
        }
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '.$showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
        
        
        ?>
        <div class="container my-4">

     <form action="/invoiceSystem2/user_regi.php" method="post">
     <div class="form-group">
            <label for="name">Username</label>
            <input type="text" maxlength="20" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="username">Email</label>
            <input type="email" maxlength="20" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" maxlength="23" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary" >SignUp</button>
     </form>
    </div>

    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
    
