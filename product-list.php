<?php
include"nav3.php";
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
				    <td><a href="product-edit.php?id='.$row["Product_id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-product-id="'.$row['Product_id'].'" class="btn btn-danger btn-xs delete-product"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no products to display.</p>";

	}

	// Frees the memory associated with a result
	$result->free();

	// close connection 
	$mysqli->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product list</title>
</head>
<body background="images/image5.jpg">

<h1>Product List</h1>
<hr>

<div class="row">
	
	<div class="col-xs-12">

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Product Information</h4>
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

</body>
</html>


<?php
	include('footer.php');
?>