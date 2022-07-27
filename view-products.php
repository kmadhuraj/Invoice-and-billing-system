<?php
include"connection.php";
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
$Product_Id.=0;

while($row = mysqli_fetch_assoc($result)){

$Product_Id=$Product_Id+1;
echo "<tr>
            <th scope='row'>". $Product_Id . "</th>
           
            <td>". $row['Product_name'] . "</td>
            <td>₹". $row['Price'] . "</td>
            <td>". $row['Stock'] . "</td>
            <td> <button class='add btn btn-sm btn-primary' id=".$row['Product_id'].">Add</button> <button class='delete btn btn-sm btn-primary' id=d".$row['Product_id'].">Delete     </button>  

            
            
            
     

            </td>
          </tr>";
        }




$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";

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
    
</body>
</html>

