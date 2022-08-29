<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'connection.php';
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "Select * from `userlogin` where username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	$num = mysqli_num_rows($result);

	if ($num == 1){
			 $login = true;
			 session_start();
			 $_SESSION['loggedin'] = true;
			 $_SESSION['username'] = $username;
			 header("location: userhome.php");	
	}
	else{
		$showError = "Invalid Credentials";
	}
}?>



<!doctype html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-BILLING AND INVOICE SYSTEM</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
	  <!-- <link href="css/supstyle.css" rel="stylesheet"> -->
	  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">   -->
</head>
<body background="images/image5.jpg"> 

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	<!-- navigation bar -->

	<div class="container">
		
		
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
	<h5 class="text">Login To Our System</h5>
	</nav>




	<?php
			
			if($login){
			echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Success!</strong> You are logged in
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div> ';
			}
			if($showError){
			echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Error!</strong> '. $showError.'
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div> ';
			}

	?>

	<!-- login page form -->

	

	<div class="container my-3">
			
		<form action="/invoiceSystem2/user-login.php" method="post">
		<div class="logo text-center">
		<h1>Login</h1>
		</div>
		<div class="wrapper">
		<div class="inner-warpper text-center">
			<h2 class="title">Login to your account</h2>
			<form action="" id="formvalidate">
			<div class="input-group">
				<label class="palceholder" for="username">Email</label>
				<input class="form-control" name="username" id="username" type="email" placeholder="" />
				<span class="lighting"></span>
			</div>
			<div class="input-group">
				<label class="palceholder" for="password">Password</label>
				<input class="form-control" name="password" id="password" type="password" placeholder="" />
				<span class="lighting"></span>
			</div>

			<button type="submit" id="login">Login</button>
			<div class="clearfix supporter">
				<div class="pull-left remember-me">
				<input id="rememberMe" type="checkbox">
				<label for="rememberMe">Remember Me</label>
				</div>
				
			</div>
			</form>
		</div>
		<div class="signup-wrapper text-center">
			<a href="user_regi.php">Don't have an accout? <span class="text-primary">Create One</span></a>
		</div>
		</div>

		</form>
		</div>


			<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		 -->


</body>
</html>

