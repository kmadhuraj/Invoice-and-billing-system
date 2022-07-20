<?php
	
	include("nav3.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice Manager</title>

	<!-- JS -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>
	
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>

	<!-- CSS -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- 	
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css"> 
	<link rel="stylesheet" href="css/styles2.css"> -->

	

	 <style>
        
		 @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700); 
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		} 
	</style> 

</head>

<body>
			
				 <!-- <div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				Users
			</button>
			<ul class="dropdown-menu dropdown-menu-dark">
				<li><a class="dropdown-item active" href="#">Manage Users</a></li>
				</ul>
			</div>

			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				Items
			</button>
			<ul class="dropdown-menu dropdown-menu-dark">
				<li><a class="dropdown-item active" href="#">Add Items</a></li>
				<li><a class="dropdown-item" href="#">Manage Items</a></li>
			</ul>
			</div>

			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				Invoice
			</button>
			<ul class="dropdown-menu dropdown-menu-dark" role="menu">
				<li><a class="dropdown-item active" href="#">View Invoices</a></li>
			</ul>
			</div> 

	
  		 </button>  -->

		<div class="container">

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Invoices <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  	    
				<li><a href="invoice-list.php">Manage Invoices</a></li>
				<li><a href="#" class="download-csv">Download Invoice</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Items <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href=".php">Add Item</a></li>	
				  <li><a href=".php">View Item</a></li>	    
				<li><a href=".php">Manage Item</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Users <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  			    
				<li><a href="user-list.php">Manage Users</a></li>
		  	</ul>
		</div>

  
  

		<div class="top-buttons float-right btn-group">
			<a class="btn btn-primary float-right" href="logout.php" role="button">Logout</a>
		</div>

		<div class="top-buttons btn-group float-right">
			 <?php echo $_SESSION['login_username']; ?>

			</div> 
</body>