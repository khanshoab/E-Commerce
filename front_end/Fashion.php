<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

       <style>
 .dropbtn {
  background-color: #0f0f0f;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #02E1A2;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #02E1A2;
}

.col-4 {
    flex-basis: 25%;
    padding: 20px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}
    </style>


      </head>
    <body>
        <div class="header">
        <div class="container">
           <div class="navbar">
     <div class="logo">
     <a href="product.php"><img src="https://xp.io/storage/N0ANlE3.png" width="150px"></a> 
        </div>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="product.html">Product</a></li> -->
            
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="Account.php">Account</a></li>
            </ul>
        </nav>
        <?php
            session_start();
            if(isset($_SESSION['user'])){
              
            }

          ?>
             <a href="carts.php">  <img src="https://xp.io/storage/NUPFCl0.png" width="30px" height="30px"></a>
               </div>
            </div>
            <div class="products">
                    <div class="small-container">
                      <div class="row row-2">
                        <h2>All Products</h2>
                        

<div class="dropdown" style="float:right;">
  <button class="dropbtn" style="width: 160px;">Category</button>
  <div class="dropdown-content">
  <a href="Mobile.php">Mobile</a>
  <a href="Bags.php">Bags</a>
  <a href="laptop.php">Laptop</a>
  <a href="Fashion.php">Fashion</a>
 
  <a href="Sports.php">Sports</a>
 
  </div>
</div>
                        </div>
                        
                         
                  
 <div class='row'>            
<?php
include 'config.php';                 
$RECORD=mysqli_query($con, "SELECT * FROM producttable ");
while($row=mysqli_fetch_array($RECORD)){
 $check_page=$row['Pcatogery'];
 if($check_page ==='Fashion'){
echo"
                   




                    <div class='row'>
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
                     </div>
                   
                    ";
 }


}


?>
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
                        
      
                            











                            
 <!-- <div class='row'>
 <div class='col-4'>
// <form action ='Insertcart.php' method ='POST'>
     <img src='../admin/products/$row[Pimage]'>
 //    <div class='justify-content center>
 //    <div onclick='window.location.href='sproduct.html'';>
     <h4>$row[Pname]</h4>
     <div class='rating'>
     <i class='fa fa-star' ></i>
     <i class='fa fa-star' ></i>
     <i class='fa fa-star' ></i>
      <i class='fa fa-star' ></i>
     </div>
     </div>
     <p>INR $row[Pprice]</p>
    
     <input type='hidden' name='Pname' value ='$row[Pname]' >
     <input type='hidden' name='Pprice' value='$row[Pprice]' >
     <input type='number' name='Pquantity' value= 'min='1' max='10'' placeholder='Quantity' >
     <input type='submit' name='addcart' class='btn btn-warning text-white w-100' value= 'Add To Cart' >
  </div>
  */ -->