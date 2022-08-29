<?php
function getProducts(){
include"connection.php";

$sql = "SELECT * FROM product ";

	// mysqli select query
	$result = mysqli_query($conn, $sql);

	if($result) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Product Id</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Stock</th>

			  </tr></thead><tbody>';

		while($row = $result->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["Product_id"].'</td>
				    <td>'.$row["Product_name"].'</td>
				    <td>₹'.$row["Price"].'</td>
                    <td>'.$row["Stock"].'</td>
				    <td><a href="product-edit.php?id='.$row["Product_id"].'
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-product-id="'.$row['Product_id'].'
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		$num = mysqli_num_rows($result);
		echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
					 <strong> Available Product Found in Database</strong> '.$num.'
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
				 </div> ';

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no products to display.</p>";

	}

	// Frees the memory associated with a result
	$result->free();

	// close connection 
	// $mysqli->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product list</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body background="images/image5.jpg">


<div class="container">
			
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
            
            </nav>

<h1>Available Products </h1>
<hr>

<div class="row">
	
	<div class="col-xs-12">

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
			

				<!-- <h4>Product Information</h4> -->
			</div>
			<div class="panel-body form-group form-group-sm">
				<?php getProducts(); ?>
			</div>
		</div>
	</div>
<div>

<div id="confirm" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete product</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this product?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
		<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			
</body>
</html>


<?php
	include('footer.php');
?>