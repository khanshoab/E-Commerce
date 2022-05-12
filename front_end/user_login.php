<?php

$Name=$_POST['name'];
$Password=$_POST['password'];
$Con= mysqli_connect('localhost:3307','root','', 'jumbo mart');
$result =mysqli_query($Con,"SELECT * FROM `user_table` WHERE (username='$Name' OR email='$Name') AND password='$Password'");
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user']=$Name;
    echo"
    <script>
    alert('login successfully');
    window.location.href='index.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('incorrect email/useranme/password');
    window.location.href='Account.php';
    </script>
    ";
}
?>