<?php
$Id=$_GET['ID'];
$con = mysqli_connect('localhost:3307','root','','Jumbo mart');
mysqli_query($con,"DELETE FROM `feedback` WHERE Id=$Id");
header("location:feedback.php");
?>