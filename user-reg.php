

<?php

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <!--    coloring   <link rel="stylesheet" href="https://www.w3schools.com/html/styles.css"> -->
  </head>
  <body>
  
  <div class="container">
			
			
      <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/invoiceSystem/index2.php">User Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
          </li>
  
          
              
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="user-reg.php">User Registration</a></li>
            <li><a class="dropdown-item" href="admin-login.php">Admin Login</a></li>
            
          </ul>
          </li>
  
        </ul>
        </div>
      </div>
      <h5 class="text">Login To Our System</h5>
      </nav>
  


<div class="container">
<form action="/invoiceSystem/user-reg.php" method ="post">

    <h3>Please enter your email and password</h3>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="Email1" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="Password1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->

<?php
 


if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
}
//database connection
        $sname = "localhost";
        $uname = "root";
        $password = "";

        $db_name = "Invoice_system";

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            echo "Connection Failed!";
            
            
        }
       //data inserting commands
        
        $sql="INSERT INTO `Userlogin` ( VALUES ('Username'='$username', 'Password'='$password')";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>succesfull</strong> Your email  and password  succesfully  submitted
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
            
        }
        else{
            echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>succesfull</strong> Your email  and password  not  submitted
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        }




?>


  