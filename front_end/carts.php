<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     </head>
    <body>
        <div class="header">
        <div class="container">
           <div class="navbar">
     <div class="logo">
      <img src="https://xp.io/storage/N0ANlE3.png" width="200px">
        </div>
        <nav>
        <ul class="m-auto" >
            <li><a href="index.php" class="text-decoration-none text-black">Home</a></li>
            <li><a href="product.php" class="text-decoration-none text-black">Product</a></li>
            
            <li><a href="Contact.html" class="text-decoration-none text-black">Contact</a></li>
            <li><a href="Account.php" class="text-decoration-none text-black">Account</a></li>
            <!-- <img src="https://xp.io/storage/NUPFCl0.png" width="30px" height="30px"> -->
            </ul>
        </nav>
              
               
      
            </div>
            </div>
            
<!-----------------cart item deatails------------------>
 
<div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">MY Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead  class="bg-danger text white fs-5">
                    <th>Serial no</th>
                    <th>product name</th>
                    <th>product price</th> 
                    <th>product quantity</th>
                    <th>total price</th>
                    <th>update</th>
                    <th>Delete</th>
                   
                    </thead>
                    <tbody>
                     
                        <?php
                            session_start();
                            $i=0;
                           $ptotal=0;
                           $total=0;
                            if(isset(  $_SESSION['cart']))
                            {
                              foreach($_SESSION['cart'] as $key=> $value){
                               $ptotal= (int)$value['proprice'] * (int)$value['proquantity'];
                               $total += (int)$value['proprice'] * (int)$value['proquantity'];
                                $ptotal= (int)$value['proprice'] * (int)$value['proquantity'];
                               $i=$key+1;
                                    echo"
                                   <form action = 'Insertcart.php' method='POST'>
                                    <tr>
                                   <td>$i</td>
                                   <td><input type='hidden' name='Pname' value='$value[Proname]'>$value[Proname]</td>
                                   <td><input type='hidden' name='Pprice' value='$value[proprice]'>$value[proprice]</td>
                                   <td><input type='text' name='Pquantity' value='$value[proquantity]'></td>
                                    <td>$ptotal</td>
                                   <td><button name='update' >Update</button></td>
                                   <td><button name='remove' class='btn-danger'>Delete</button></td>
                                   <td><input type='hidden' name='item' value='$value[Proname]'></td>
                                  
                                    </tr>
                                    </form>
                                 
                                    ";
                                   
                                }
                            }
                          

                            ?>
                    </tbody>
                </table>
            </div>
                   <div class="col-lg-3 text-center">
                     <h3>Total</h3>
                     <h1 class="bg-danger text-white"><?php echo number_format($total,2) ?></h1>
                      <a href="order.php">  <td><button name='update' >Check Out</button></td></a> 
                   </div>          
        </div>
    </div>
                          
                


        
        
        
<!----------------------------js  for product gallery---------------->
            
         
       
               

    
<!-----------------footer---------------->
                        
<div class="footer">
                        <div class="container">
                          <div class="row">
                           <div class="footer-col-1">
                             <h3>Download Our App</h3> 
                               <p>Download App for Android and ios Mobile Phone</p>
                              </div> 
                            <div class="footer-col-2">
                             <h3>Download Our App</h3> 
                               <p>Our Purpose is to Sustainably Make the Pleasure and Benefits of Good Cloths.</p>
                                <div class="app-logo">
                                <img src="play-store.png">
                                <img src="app-store.png">
                                </div>
                                   
                            </div>  
                              <div class="footer-col-3">
                             <h3>Useful Link</h3> 
                               <ul>
                                  <li>Coupons</li>
                                    <li>Blog Spot</li>
                                    <li>Return Policy</li>
                                    <li>Join Affiliate</li>
                                  </ul>
                            </div>
                               <div class="footer-col-4">
                             <h3>Follow Us</h3> 
                               <ul>
                                  <li>Facebook</li>
                                    <li>Twitter</li>
                                    <li>Instagram</li>
                                    <li>Youtube</li>
                                  </ul>
                        </div>
                            </div>
                            <hr>
                            <p class="copyright">Copyright 2022 - Mini Project -Group 9</p>
                        
                        