<?php
include "nav3.php";
include "connection.php";

?>

<?php






// if(isset($_GET['delete'])){
//     $sno = $_GET['delete'];
//     $delete = true;
//     $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
//     $result = mysqli_query($conn, $sql);
//   }
//   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//   if (isset( $_POST['snoEdit'])){
//     // Update the record
//       $sno = $_POST["snoEdit"];
//       $title = $_POST["titleEdit"];
//       $description = $_POST["descriptionEdit"];
  
//     // Sql query to be executed
//     $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
//     $result = mysqli_query($conn, $sql);
//     if($result){
//       $update = true;
//   }
//   else{
//       echo "We could not update the record successfully";
//   }
//   }
//   else{
//       $title = $_POST["title"];
//       $description = $_POST["description"];
  
//     // Sql query to be executed
//     $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
//     $result = mysqli_query($conn, $sql);
  
     
//     if($result){ 
//         $insert = true;
//     }
//     else{
//         echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//     } 
//   }
//   }
//   ?>
  











<?php













if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset( $_POST['product_name'])){
      // Update the record
        $product_name = $_POST["product_name"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
    
      // Sql query to be executed
    //   $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
    //   $result = mysqli_query($conn, $sql);
    //   if($result){
    //     $update = true;
    // }
    // else{
    //     echo "We could not update the record successfully";
    // }
    // }
    // else{
    //     $title = $_POST["title"];
    //     $description = $_POST["description"];
    
      // Sql query to be executed
      $sql = "INSERT INTO `product` (`product_name`, `price`,`stock`) VALUES ('$product_name', '$price','$stock')";
      $result = mysqli_query($conn, $sql);
    
       
      if($result){ 
          $insert = true;
          echo"succesfully product is added";
      }
      else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
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
    <title>Add product</title>
</head>
<body>

<div class="container">
<form action="add-product.php" method="POST">
    
  <div class="mb-3">
    <label for="product" class="form-label">Product name</label>
    <input type="text" class="form-control" id="pro" aria-describedby="product">
    <div id="pro" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price">
  </div>

  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock">
  </div>
  
  <button type="submit" class="btn btn-primary">Add Products</button>
</form>
    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			




</body>
</html>



