<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        
        
     </head>
    <body>
        <div class="header">
        <div class="container">
           <div class="navbar">
     <div class="logo">
    <a href="index.php"> <img src="https://xp.io/storage/N0ANlE3.png" width="150px"></a> 
        </div>
        <!-- <form action="search_product.php" method='GET' class="d-flex">
            <input class="form-control me-2" type="search" placeholder="search" aria-label="search" name="search_data">
            < <button class="btn btn-outline-light" type=""></button> -->
            <!-- <input type="submit" value="search" class="btn" name="search_data_product">
</form> --> 
<form action="search_product.php" method='GET' style="padding-left:20px">
                        <input type="search" placeholder="search" aria-label="search" name="search_data" style="width: 150px;">
                        <!-- <button class="btn btn-outline-light" type=""></button> -->
                        <input type="submit" value="search" class="btn" name="search_data_product" style="width: 100px;text-align:center"> 
                    </form>
       
            <?php
            session_start();
            if(isset($_SESSION['user'])){
                echo"
            <nav>
                <ul>
                    
                    <li><a href='product.php'>Product</a></li>
                    <li><a href='#about'>About</a></li>
                    <li><a href='Contact.php'>Contact</a></li>
                    <li><a href='Account.php'>Account</a></li>
                    <li><a href='../admin/forms/admin_login11.php'>admin</a></li>
                    <li><a href='logout.php'>logout</a></li>
                    </ul>
                    </nav>
                    ";
            }
            else{
              
                echo"
                <nav>
                    <ul>
                       
                        <li><a href='product.php'>Product</a></li>
                        <li><a href='#about'>About</a></li>
                        <li><a href='Contact.php'>Contact</a></li>
                        <li><a href='Account.php'>Account</a></li>
                        <li><a href='../admin/forms/admin_login11.php'>admin</a></li>
                        
                        </ul>
                        </nav>
                        ";
            }
            ?>
        
        <a href="carts.php"><img src="https://xp.io/storage/NUPFCl0.png" width="30px" height="30px"></a>
              
        </div>
            <div class="row">
            <div class ="col-2">
                <h1>Give Your Personality<br>A New Look!</h1>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> congue vestibulum nibh, nec feugiat ante pulvinar ac. </p> -->
                <a href="" class="btn">Explore Now</a>
                </div>
                <div class="col-2">
                    <img src="https://xp.io/storage/NTXYBVo.png">
                </div>
            </div>
            </div>
<! ----------------featured categories--------->
            <!-- <div class="categories">
            <div class="small-container">
            <div class="row">
                  <div class="col-3">
               <img src="https://xp.io/storage/NVuwlZD.jpg">
                </div>
                      <div class="col-3">
               <img src="https://xp.io/storage/NVx9ado.jpg">
            </div>   
                  <div class="col-3">
               <img src="https://xp.io/storage/NVCuYzI.jpg">
                </div>
                </div> -->
                
 <! ----------------featured products--------->

                
                <div class="products">
                    <div class="small-container">
                        <h2 class="title">Featured Product</h2>

                        <?php
                        include 'config.php';  
                        $RECORD=mysqli_query($con, "SELECT * FROM `producttable` WHERE Featured_Product='Feature' OR Featured_Product='FeatureLatest' LIMIT 3");
                      echo"<div class='row'>";
                        while($row=mysqli_fetch_array($RECORD)){
                            echo"
                            
                            <div class='col-4'>
                            <form action ='Insertcart.php' method ='POST'>
                            <img src='../admin/products/$row[Pimage]'>
                                <div onclick='window.location.href='sproduct.html;'>
                                <h4>$row[Pname]</h4>
                                <div class='rating'>
                                <i class='fa fa-star' ></i>
                                <i class='fa fa-star' ></i>
                                <i class='fa fa-star' ></i>
                                 <i class='fa fa-star' ></i>
                                </div>
                                </div>
                 
                                
                                <p>";?>INR <?php echo number_format($row['Pprice'],2)?> <?php echo "</p>
                                <input type='hidden' name='Pname' value ='$row[Pname]' >
                                <input type='hidden' name='Pprice' value='$row[Pprice]' >
                                <input type='number' name='Pquantity' value= 'min='1' max='10'' placeholder='Quantity' >
                                <input type='submit' name='addcart' class='btn btn-warning text-white w-100' value= 'Add To Cart' >
                            
                            
                             </form>
                             </div>
                             


                        ";
                       
                        }
                        ?>
                        </div>
                    </div>
                <!-- <div class="row"> -->
                   <!-- <div class="col-4">
                    <img src="https://xp.io/storage/NWgoUTW.jpg">
                       <h4>Red Printed T-shirt</h4>
                       <div class="rating">
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                       
                       <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/NWpKB2y.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/NWrEg66.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/NWuqowO.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div> -->
                 </div>
                        
        <!-----------------------------latest Product--------------->
                        
                        <h2 class="title">Latest product</h2>
                        <div class="row">
                            <?php
                            include 'config.php';  
                            $RECORD=mysqli_query($con, "SELECT * FROM `producttable` WHERE Featured_Product='Latest' OR Featured_Product='FeatureLatest' LIMIT 3");
                          echo"<div class='row'>";
                            while($row=mysqli_fetch_array($RECORD)){
                                echo"
                               
                                <div class='col-4'>
                                <form action ='Insertcart.php' method ='POST'>
                                <img src='../admin/products/$row[Pimage]'>
                                    <div onclick='window.location.href='sproduct.html;'>
                                    <h4>$row[Pname]</h4>
                                    <div class='rating'>
                                    <i class='fa fa-star' ></i>
                                    <i class='fa fa-star' ></i>
                                    <i class='fa fa-star' ></i>
                                     <i class='fa fa-star' ></i>
                                    </div>
                                    </div>
                     
                                    
                                    <p>";?>INR <?php echo number_format($row['Pprice'],2)?> <?php echo "</p>
                                    <input type='hidden' name='Pname' value ='$row[Pname]' >
                                    <input type='hidden' name='Pprice' value='$row[Pprice]' >
                                    <input type='number' name='Pquantity' value= 'min='1' max='10'' placeholder='Quantity' >
                                    <input type='submit' name='addcart' class='btn btn-warning text-white w-100' value= 'Add To Cart' >
                                
                                
                                 </form>
                                 </div>
                                 
    
    
                            ";

                            }
                            ?>
                            </div>

                   <!-- <div class="col-4">
                    <img src="https://xp.io/storage/O6qAJZz.jpg">
                       <h4>Red Printed T-shirt</h4>
                       <div class="rating">
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                       
                       <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/O6tj0oj.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/O6vylOJ.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/O6y3AuI.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                        
                    </div>
                 </div>
                     <div class="row">
                   <div class="col-4">
                    <img src="https://xp.io/storage/O6MnsSx.jpg">
                       <h4>Red Printed T-shirt</h4>
                       <div class="rating">
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                       
                       <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/O6Oi4JZ.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/O6QvJzx.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                    </div>
                    <div class="col-4">
                    <img src="https://xp.io/storage/O6SvdlL.jpg">
                        <h4>Red Printed T-shirt</h4>
                         <div class="rating">
                        <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                        <p>INR 500</p>
                            
                    </div>
                        </div>
                    </div> -->
                    
        <!------------------------offer--------------->
                    <div class="offer">
                    <div class="small-container">
                        <div class="row">
                            <div class="col-2">
                            <img src="https://xp.io/storage/O881xJq.png">
                            </div>
                             <div class="col-2">
                            <p>Exclusively Avaialable on RedStore</p>
                                 <h1><b>Smart Band 4</b></h1>
                                 <small>The Mi Smart Band 4 comes with various smart fitness features. It tracks heart rate.<br> It monitors sleep. It can also track activities like running, cycling, swimming and other outdoor activities in real-time.</small>
                                 <a href="" class="btn">Buy Now</a>
                            </div>     
                        </div>
                 </div>
        </div>
               
<!--------------testimonial-------------->
<section id="about">
                    <div class="testimonial">
                    <div class="small-container">
                       <div class ="row">
                        <div class="col-3">
                            <i class="fa-fa-quote-left"></i>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> congue vestibulum nibh, nec feugiat ante pulvinar ac. </p>
                            <div class="rating">
                            <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                           <img src="user-1.png">
                           <h3>Lily John</h3>
                           </div>
                        <div class="col-3">
                            <i class="fa-fa-quote-left"></i>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> congue vestibulum nibh, nec feugiat ante pulvinar ac. </p>
                            <div class="rating">
                            <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                       </div>
                           <img src="user-2.png">
                           <h3>John Martin</h3>
                        </div> 
                        <div class="col-3">
                            <i class="fa-fa-quote-left"></i>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> congue vestibulum nibh, nec feugiat ante pulvinar ac. </p>
                            <div class="rating">
                            <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                       </div>
                           <img src="user-3.png">
                           <h3>Lisa</h3>
                        </div>
                    </div>
                        
                    </section>          
<!----------------------brand----------------->
                        
                        <div class="brands">
                        <div class="small-container">
                            <div class="row">
                            <div class="col-5">
                                <img src="HM%20logo.png">
                                </div>
                                <div class="col-5">
                                <img src="adidas%20logo.png">
                            </div>
                                <div class="col-5">
                            <img src="nike%20logo.png">
                            </div>
                                <div class="col-5">
                            <img src="puma logo.png">
                        </div>
                                
                            </div>
                        </div>
                    </div>
    
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
                        
                        