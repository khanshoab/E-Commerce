<?php
include 'config.php';
  // require_once('php_image_magician.php');
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];

    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "uploadimage/" . $image_name;
    //   list($width_orig, $height_orig) = getimagesize($img_des);
    //   $width = 100;
    // $height = 100;
    //   $ratio_orig = $width_orig/$height_orig;
    //   if ($width/$height > $ratio_orig) {
    //     $width = $height*$ratio_orig;
    // } else {
    //     $height = $width/$ratio_orig;
    // }
    // $image_p = imagecreatetruecolor($width, $height);
    // $image = imagecreatefromjpeg($img_des);
    // imagecopyresampled($image_p, $image, 0, 0, 0, 0,
    //         $width, $height, $width_orig, $height_orig);

    // $image_name =  $img_des;
    // $image = imagecreatefrompng($img_des);
    // $imgResized = imagescale($image , 200, 200);  

    $product_image1 = $_FILES['Pimage1'];
    $image_loc1 = $_FILES['Pimage1']['tmp_name'];
    $image_name1 = $_FILES['Pimage1']['name'];
    $img_des1 = "uploadimage/" . $image_name1;

    $product_image2 = $_FILES['Pimage2'];
    $image_loc2 = $_FILES['Pimage2']['tmp_name'];
    $image_name2 = $_FILES['Pimage2']['name'];
    $img_des2 = "uploadimage/" . $image_name2;

    $product_Catogery = $_POST['Pages'];
    move_uploaded_file($image_loc, "uploadimage/" . $image_name2);
    
    mysqli_query($con, "UPDATE `producttable` SET `Pname`='$product_name',`Pprice`='$product_price',`Pimage`='$img_des',
                                               `Pimage1`='$img_des1',`Pimage2`='$img_des2',`Pcatogery`=' $product_Catogery' WHERE Id= $id");
    echo"
    <script>
    alert('Updated Succefully');
    
    </script>
    ";
   header("location:add_products.php");
   
    
  }
  ?>