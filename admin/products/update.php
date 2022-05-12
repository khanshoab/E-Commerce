
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
<a href="add_products.php" class= 'btn btn-danger m-4' >Back</a>
<?php

include 'config.php';
$id1 = $_GET['ID'];

$record = mysqli_query($con, "SELECT * FROM `producttable` WHERE Id = $id1");
$data = mysqli_fetch_array($record);
?>

  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">


        <form action="update1.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">Product Update :</p>


          </div>
          <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" value="<?php echo $data['Pname'] ?>" name="Pname" class="form-control" placeholder="Name of Product">

          </div>
          <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" value="<?php echo $data['Pprice'] ?>" name="Pprice" class="form-control" placeholder="Enter Product price">

          </div>




          <div class="mb-3">

            <label class="form-label">Product Image</label>
            <div class="upload">
              <div class="col-md-8 border border-primary mt-3">
                <input type="file" name="Pimage" class="form-control">
                <br>
                <img src="<?php echo $data['Pimage'] ?>" alt="" height="100px" width="100px">
                <br>
              </div>
            </div>
          </div>

          <!-- <div class="mb-3">

            <label class="form-label">Product Image1</label>
            <div class="upload">
              <div class="col-md-8 border border-primary mt-3">
                <input type="file" name="Pimage1" class="form-control">

              </div>
            </div>
          </div>
          <div class="mb-3">

            <label class="form-label">Product Image2</label>
            <div class="upload">
              <div class="col-md-8 border border-primary mt-3">
                <input type="file" name="Pimage2" class="form-control">
              </div>
            </div>
          </div> -->

          <div class="mb-3">
            <label class="form-label">Select page Category</label>
            <select class="form-select" name="Pages">
              <option value="Home">Home</option>
              <option value="laptop">laptop</option>
              <option value="mobile">mobile</option>
              <option value="bag">bag</option>
            </select>

          </div>
          <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
          <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-black">update</button>


        </form>
      </div>
    </div>
  </div>
</body>

</html>
