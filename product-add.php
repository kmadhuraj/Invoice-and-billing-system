
<?php
include "nav3.php";
$showalert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] =="POST"){
include 'connection.php';

$productname = $_POST["product_name"];
$productprice = $_POST["product_price"];
$productstock = $_POST["product_stock"];



//check whther the useranme exixts or not
$existsql="SELECT * FROM `product` WHERE product_name ='$productname'";
$result = mysqli_query($conn, $existsql);
// echo($result);
// die();
$numexistrows=mysqli_num_rows($result);
// echo($numexistrows);
// die();
if($numexistrows > 0){
    
    $showError = "Product Already Exist";
}
else{
    
        // if(($password == $cpassword)){
        $sql = "INSERT INTO `product` (`Product_id`, `Product_name`, `Price`, `Stock`) VALUES (NULL, '$productname', '$productprice', '$productstock'); "; 
        $result = mysqli_query($conn, $sql);
        // echo($result);
        //  die();
        if($result){
            $showalert = true;
        }
    // }
    // else{
    //     $showError = "password do not match ";
    // }
}
}
?>
<?php
    	if($showalert){

                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> Product Succesfully Added
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body background="images/image5.jpg">

<!-- <div class="container">
			
            <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                
    
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="adminpage.php">Home</a>
                    </li>

    
                  
    
                </ul>
                </div>
            </div>
            
            </nav> -->
	

<h2>Add Products</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<!-- <h4>Product Information</h4> -->
			</div>
			<div class="panel-body form-group form-group-sm">
			<form action="/invoiceSystem2/product-add.php" method="post">
				
					<input type="hidden" name="action" value="add_product">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control required" name="product_name" placeholder="Enter Product Name">
						</div>

						<div class="col-xs-4">
							<input type="number" class="form-control required" name="product_stock" placeholder="stocks">
						</div>

						<div class="col-xs-4">
							<div class="input-group">
								<span class="input-group-addon"><?php //echo //CURRENCY ?>  </span>
								<input type="number" name="product_price" class="form-control required" placeholder="Price 0.00" aria-describedby="sizing-addon1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_product" class="btn btn-success float-right" value="Add Product" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>
</body>
</html>

<?php
	include('footer.php');
?>