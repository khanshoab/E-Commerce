<?php

if(isset($_POST['submit'])){
    include 'config.php';
    if(isset($_POST['Featured'])&&isset($_POST['Latest'])&&isset($_POST['Default'])){
    $product_flcategory4=$_POST['Default'];
    $product_flcategory1=$_POST['Featured'];
    $product_flcategory2=$_POST['Latest'];
    
    $product_flcategory3=$product_flcategory4.$product_flcategory1.$product_flcategory2;
    Insert($product_flcategory3);
   
    }
    else if(isset($_POST['Default'])){
        $product_flcategory4=$_POST['Default'];
        Insert($product_flcategory3);
    //          echo"<script>
    // alert('in 2nd else if block');
    // </script>";
    }
    else if(isset($_POST['Featured'])){
        $product_flcategory1=$_POST['Featured'];
        Insert($product_flcategory1);    
    }
    else if(isset($_POST['Latest'])){
    //     echo"<script>
    // alert('in 2nd else if block');
    // </script>";
        $product_flcategory2=$_POST['Latest'];
        Insert($product_flcategory2);
    }else{
        echo"<script>
    alert('Required Field');
    window.location.href='add_products.php';
    </script>";
    }
}


    function Insert($flname){
    include 'config.php';

        $product_name=$_POST['Pname'];
        $product_price=$_POST['Pprice'];
        $product_image=$_FILES['Pimage'];
        $image_loc=$_FILES['Pimage'] ['tmp_name'];
        $image_name=$_FILES['Pimage'] ['name'] ;
                $img_des= "uploadimage/".$image_name;
        $product_Catogery=$_POST['Pages'];
        move_uploaded_file( $image_loc,"uploadimage/".$image_name);
         
        $image_loc1=$_FILES['Pimage1'] ['tmp_name'];
        $image_name1=$_FILES['Pimage1'] ['name'] ;
                $img_des1= "uploadimage/".$image_name1;
        $product_Catogery1=$_POST['Pages'];
        move_uploaded_file( $image_loc1,"uploadimage/".$image_name1);
        
        $image_loc2=$_FILES['Pimage2'] ['tmp_name'];
        $image_name2=$_FILES['Pimage2'] ['name'] ;
                $img_des2= "uploadimage/".$image_name2;
        $product_Catogery2=$_POST['Pages'];
        move_uploaded_file( $image_loc2,"uploadimage/".$image_name2);
         
      $query_run= mysqli_query($con, "INSERT INTO `producttable`( `Pname`, `Pprice`, `Pimage`,`Pimage1`,`Pimage2`, `Pcatogery`, `Featured_Product`) 
        VALUES ('$product_name','$product_price','$img_des','$img_des1','$img_des2','$product_Catogery','$flname')");
    
    if($query_run)
    {
        header("Location:add_products.php");
    }
    
    else
    {
        header("Location:add_products.php");
        
    }

    }
    

//     $product_name=$_POST['Pname'];
//     $product_price=$_POST['Pprice'];
//     $product_image=$_FILES['Pimage'];
//     $image_loc=$_FILES['Pimage'] ['tmp_name'];
//     $image_name=$_FILES['Pimage'] ['name'] ;
//             $img_des= "uploadimage/".$image_name;
//     $product_Catogery=$_POST['Pages'];
//     move_uploaded_file( $image_loc,"uploadimage/".$image_name);
     
//     $image_loc1=$_FILES['Pimage1'] ['tmp_name'];
//     $image_name1=$_FILES['Pimage1'] ['name'] ;
//             $img_des1= "uploadimage/".$image_name1;
//     $product_Catogery1=$_POST['Pages'];
//     move_uploaded_file( $image_loc1,"uploadimage/".$image_name1);
    
//     $image_loc2=$_FILES['Pimage2'] ['tmp_name'];
//     $image_name2=$_FILES['Pimage2'] ['name'] ;
//             $img_des2= "uploadimage/".$image_name2;
//     $product_Catogery2=$_POST['Pages'];
//     move_uploaded_file( $image_loc2,"uploadimage/".$image_name2);
     
//   $query_run= mysqli_query($con, "INSERT INTO `producttable`( `Pname`, `Pprice`, `Pimage`,`Pimage1`,`Pimage2`, `Pcatogery`) 
//     VALUES ('$product_name','$product_price','$img_des','$img_des1','$img_des2','$product_Catogery')");

// if($query_run)
// {
//     header("Location:add_products.php");
// }

// else
// {
//     header("Location:add_products.php");
    
// }
?>

