<?php
 session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
 {
   header("location:user-login.php");
   exit;

 }
?>
<!doctype html>
<html lang="en">
  <head>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BILLING AND INVOICE SYSTEM - <?php $_SESSION['username'];?> </title>
 
  </head>
  <body background="images/image5.jpg">

  <div class="container">
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="userhome.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Back</a>
        </li>
      </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userlogout.php">Logout</a>
        </li>
      </ul>
    </div>

  </div>
</nav>


<div class="container">
<div class="alert alert-success" role="alert">
      <h4 class="alert-heading"><?php echo 'Welcome    '.$_SESSION['username']?></h4>
      <p>Aww yeah you are succesfully logged in.</p>
</div>
</div>


  <div class="container">
 
  <div class="d-grid gap-2 col-2 mx-auto">
    <a href="choose-product.php">
  <button class="btn btn-primary" type="button"> View Products</button>
  </a>

</div>


       
      
</div>




  </body>
</html>
