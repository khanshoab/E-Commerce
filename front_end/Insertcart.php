
<?php

session_start();
//session_destroy

if (isset($_SESSION['user'])) {
  $product_name = $_POST['Pname'];
  $product_price = $_POST['Pprice'];
  $product_quantity = $_POST['Pquantity'];

  if (isset($_POST['addcart'])) {
    // $present_item=array_column($_SESSION['cart'],'Proname');
    // if($present_item==NULL){
    //   echo "
    // <script>
    // alert('product already added');
    // </script>
    // ";
    // }
    // else{
    //   echo "
    //   <script>
    //   alert('product not added');
    //   </script>
    //   ";
    // }
    if(empty($_SESSION['cart'])){
      $_SESSION['cart'][] = array(
        'Proname' => $product_name,
        'proprice' => $product_price,
        'proquantity' => $product_quantity
      );
      header("location:carts.php");
    }else{
     
      $present_item = array_column($_SESSION['cart'], 'Proname');
      if (in_array($product_name, $present_item)) {
        echo "
      <script>
      alert('product already added');
      window.location.href='product.php';
      </script>
      ";
      }
      else{
          $_SESSION['cart'][] = array(
        'Proname' => $product_name,
        'proprice' => $product_price,
        'proquantity' => $product_quantity
      );
      header("location:carts.php");
      }
    }
    
    // else {



      // $_SESSION['cart'][] = array(
      //   'Proname' => $product_name,
      //   'proprice' => $product_price,
      //   'proquantity' => $product_quantity
      // );
      // header("location:carts.php");



      //remove product


      //  update products


    // }
  }
} else {
  header("location:Account.php");
}

if (isset($_POST['remove'])) {
  foreach ($_SESSION['cart'] as $key => $value) {
    if ($value['Proname'] === $_POST['item']) {
      unset($_SESSION['cart'][$key]);
      $_SESSION['cart'] = array_values($_SESSION['cart']);
      header('location:carts.php');
    }
  }
}

if (isset($_POST['update'])) {
  foreach ($_SESSION['cart'] as $key => $value) {
    if ($value['Proname'] === $_POST['item']) {
      $_SESSION['cart'][$key] = array(
        'Proname' => $product_name,
        'proprice' => $product_price,
        'proquantity' => $product_quantity
      );
      header("location:carts.php");
    }
  }
}
