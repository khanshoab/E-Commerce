<?php

$id=$_GET['ID'];
include 'config.php';
mysqli_query($con ,"DELETE FROM `producttable` WHERE Id= $id");
header("location:add_products.php");
?>