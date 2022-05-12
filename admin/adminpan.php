<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:forms/login1.php");
}


?>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">jumbo</a>
   <span>
   <i class="fas fa-user-shield"></i>
   Hello, <?php echo $_SESSION['admin']   ?> |
    <i class="fas fa-sign-out-alt"></i>
    <a href="forms/logout.php" class="text-decoration-none text-black">Logout</a> |
    <a href="../front_end/index.php" class="text-decoration-none text-black">User panel</a>
   </span>
  </div>
</nav>
<div>
  <h2 class="text-center">Dashboard</h2>
</div>

<div class="col-md-6 bg-danger text-center m-auto">
  <a href="products/add_products.php" class="text-decoration-none text-black fs-4 fw-bold px-5" >Add items</a>
  <a href="user.php" class="text-decoration-none text-black fs-4 fw-bold px-5">Users</a>
  <a href="feedback.php" class="text-decoration-none text-black fs-4 fw-bold px-5">Feedback</a>
</div>

    </div>
  </div>
</div>



    
</body>
</html>