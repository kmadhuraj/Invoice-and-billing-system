<?php
//include "nav2.php"

?>


<?php
// // Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "Invoice_system";

// // Create a connection
//     $conn = mysqli_connect($servername, $username, $password, $database);
//     // Die if connection was not successful
//     if (!$conn){
//         die("Sorry we failed to connect: ". mysqli_connect_error());
//     }
    

//     $sql = "SELECT * FROM Userlogin";
//     $result = mysqli_query($conn, $sql);
   

//     // Find the number of records returned
//     $num = mysqli_num_rows($result);
//     echo $num;
//     echo " records found in the DataBase<br>";
//     // Display the rows returned by the sql query
//     if($num> 0){
    
//         // We can fetch in a better way using the while loop
//         while($row = mysqli_fetch_assoc($result)){
//             // echo var_dump($row);
//             echo $row['Username'].$row['Password'];
//             echo "<br>";
//         }


//     }

?>



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
    <title>manage user</title>
</head>
<body background="images/image5.jpg">

<div class="container">
    <h1>User Management</h1>

<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Sl No. </th>  -->
      <th scope="col">Sl No</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>


<?php


$sql = "SELECT * FROM Userlogin";

$result = mysqli_query($conn, $sql);
$Product_Id.=0;

while($row = mysqli_fetch_assoc($result)){

$Product_Id=$Product_Id+1;
echo "<tr>
            <th scope='row'>". $Product_Id . "</th>
            
            <td>". $row['Username'] . "</td>
            <td>". $row['Password'] . "</td>
            
         <td> <button class='add btn btn-sm btn-primary' id=".$row['Product_id'].">Add</button> <button class='delete btn btn-sm btn-primary' id=d".$row['Product_id'].">Delete     </button>  

            
            
            
     

            </td>
          </tr>";
        }




$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";

if($num> 0){
   

    
    while($row = mysqli_fetch_assoc($result)){
       
        echo $row['Username'] . $row['Password'];
        echo "<br>";
    }


}
?>

  </tbody>
</table>
</div>
    
</body>
</html>


