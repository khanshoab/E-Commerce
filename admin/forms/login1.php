<?php
$con = mysqli_connect('localhost:3307','root','','Jumbo mart');

$A_name =$_POST['Username'];
$A_password =$_POST['Userpassword'];

$result=mysqli_query($con, "SELECT * FROM `admin` WHERE Username='$A_name' AND Userpassword='$A_password' ");


session_start();

if(mysqli_num_rows($result)){
    $_SESSION['admin']= $A_name;

    echo"
    <script>
    alert('Login successfull');
    window.location.href='../adminpan.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Invalid usmername/password');
    window.location.href='admin_login11.php';
    </script>
    ";
}



?>