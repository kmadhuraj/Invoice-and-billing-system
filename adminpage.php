<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
	header("location:admin-login.php");
	exit;

}
include("nav3.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice Manager <?php echo $_SESSION['username']?>  </title>

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- 
	 <style>
        
		 @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700); 
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		} 
	</style>  -->

</head>

<body background="images/image5.jpg">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	<div class="container">

	 <div class="dropdown"> 

  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Items
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="product-add.php">Add Items</a></li>
    <li><a class="dropdown-item" href="product-list.php">View Items</a></li>
    <li><a class="dropdown-item" href="view-products.php">Manage Items</a></li>
  </ul>
	</div>


	<div class="dropdown"> 
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    User
  </a>
  	<ul class="dropdown-menu">
     <li><a class="dropdown-item" href="user-manage.php">Manage User</a></li>
   </ul>

	</div>


	<div class="dropdown"> 

  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Invoice
	</a>
  	<ul class="dropdown-menu">
     <li><a class="dropdown-item" href="#">View Invoice</a></li>
     <li><a class="dropdown-item" href="#">Manage Invoice</a></li>

  </ul>

	</div>


		
		<div class="top-buttons float-right btn-group">
			<a class="btn btn-primary float-right" href="adminlogout.php" role="button">Logout</a>
			</div> 
		</div>
								

		<div class="top-buttons btn-group float-right">
			 <?php //echo $_SESSION['username']; ?> 

			</div> 
</body>