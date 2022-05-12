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
      <img src="https://xp.io/storage/N0ANlE3.png" width="150px">
        </div>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
           
            <li><a href="Contact.html">Contact</a></li>
            <!-- <li><a href="Account.html">Account</a></li> -->
            </ul>
        </nav>
              <a href="carts.php"><img src="https://xp.io/storage/NUPFCl0.png" width="30px" height="30px"></a> 
               
      
            </div>
            </div>
            
<!------------------account page------------------->
            <div class="account-page">
            <div class="container">
             <div class="row">
              <div class="col-2">
              <img src="https://xp.io/storage/NTXYBVo.png" width="100%">   
                 </div>
                 <div class="col-2">
                  <div class="form-container">
                <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Register</span>
                      <hr id="Indicator">
                     </div>
                
                 <form id="LoginForm" action="user_login.php" method="POST">
                 <input type="text" name="name" placeholder="Username">
                  <input type="password" name="password" placeholder="Password">
                   <button type="Submit" name="submit" class="btn">Login</button> 
                 <a href="">Forgot Password</a>
                 </form>
                 
                 <form id="RegForm" action="reginsert.php" method="POST">
                  <input type="email" name="email" placeholder="Email">
                 <input type="text" name="name" placeholder="Username">
                
                  <input type="password" name="password" placeholder="Password">
                   <button type="Submit" name="submit" class="btn">Register</button> 
                 <a href="">Forgot Password</a>
                 </form>
                </div>   
                </div>
            </div>
            </div>
                
                
<!------------------js fot toggle form------------------>
                
                <script>
                var LoginForm =document.getElementById("LoginForm");
                var RegForm =document.getElementById("RegForm");
                var Indicator =document.getElementById("Indicator");
                    
                   function register(){
                       RegForm.style.transform="translateX(0px)";
                        LoginForm.style.transform="translateX(0px)";
                        Indicator.style.transform="translateX(100px)";
                   } 
                function login(){
                       RegForm.style.transform="translateX(300px)";
                        LoginForm.style.transform="translateX(300px)";
                         Indicator.style.transform="translateX(0px)";
                   } 
                </script>
               

    
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
                        
                        