<?php
include "connection.php";
include "nav3.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>
<body background="images/image5.jpg">

<div class="container">

<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Sl No. </th>  -->
      <th scope="col">Product Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>


<?php


$sql = "SELECT * FROM product";

$result = mysqli_query($conn, $sql);
$Product_Id =0;

while($row = mysqli_fetch_assoc($result)){

 $Product_Id=$Product_Id+1;
  echo "<tr>
            <th scope='row'>". $Product_Id . "</th>
           
            <td>". $row['Product_name'] . "</td>
            <td>₹". $row['Price'] . "</td>
            <td>". $row['Stock'] . "</td>
            <td>  <a href='deleteproduct.php? Pid=$row[Product_id]'> <button >Delete </button> </td> 

            
            
            
     

            </td>
          </tr>";
        }




      $num = mysqli_num_rows($result);
       echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong> Available Product Found In The Database Is :</strong> '.$num.'
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div> ';
        


  if($num> 0){
   

        
        while($row = mysqli_fetch_assoc($result)){
          
            echo $row['Product_id'] . $row['Product_name'] . $row['Price']. $row['Stock'];
            echo "<br>";
        }


}
?>

  </tbody>
</table>
</div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			 
</body>
</html>

