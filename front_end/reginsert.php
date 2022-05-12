<?php
$Con= mysqli_connect('localhost:3307','root','', 'jumbo mart');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
}


            $dup_email = mysqli_query($Con,"SELECT * FROM `user_table` WHERE email='$email'");
            $dup_username = mysqli_query($Con,"SELECT * FROM `user_table` WHERE username='$name'");
            if(mysqli_num_rows($dup_email))
            {
                echo"
                <script>
                alert('this email is already taken');
                window.location.href='Account.php';
                </script>
                ";
            }
            if(mysqli_num_rows($dup_username))
            {
                echo"
                <script>
                alert('this username is already taken');
                window.location.href='Account.php';
                </script>
                ";
            }
            else{
                mysqli_query($Con,"INSERT INTO `user_table`(`username`, `Email`, `password`) 
                VALUES ('$name','$email','$password')");
                 echo"
                 <script>
                 alert('Register successfully');
                 window.location.href='index.php';
                 </script>
                 ";
            }
?>