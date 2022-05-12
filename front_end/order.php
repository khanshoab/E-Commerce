<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>

<a href="carts.php" class= 'btn btn-danger m-4' >Back</a>





<div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">


<form action="payscript.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">

<h3 style="text-align: center;margin:20px 10px;font-family: lato;">Checkout Form</h3>

</div>
<div class="mb-3">
<label class="form-label">Full Name</label>
<input type="text" name="name" class="form-control" placeholder="Full Name" required>

</div>
<div class="mb-3">
<label class="form-label"> Email</label>
<input type="email"  name="email" class="form-control" placeholder="xyz@gmail.com" required>

</div>
<div class="mb-3">
<label class="form-label">Mobile Number</label>
<input type="text"  name="mobile" class="form-control" placeholder="1234567890" required>

</div>


<div class="mb-3">
<input type="hidden" value="<?php echo 'OID'.rand (100, 1000); ?>" name="orderid"> <input type="hidden" value="<?php echo 1; ?>" name="amount">
</div>


<div class="mb-3">
<label class="form-label"> Address</label>
<input type="text"  name="address" class="form-control" required>

</div>
<div class="mb-3">
<label class="form-label">Product are:</label>
<?php
                            session_start();
                            $i=0;
                       
                            if(isset(  $_SESSION['cart']))
                            {
                              foreach($_SESSION['cart'] as $key=> $value){
                                $temp=$value['Proname'];
                                $r_temp=$temp;
                                $temp=NULL;
                                 $i=$key+1;
                                 echo "<br>";
                                 print_r($r_temp);
                                
                                }
                                
                            }                    
                            ?>
</div>

<button  name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-black">Paynow</button>


</form>

</div>
</div>
</div>
</body>
</html>