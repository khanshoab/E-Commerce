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
<a href="../adminpan.php" class= 'btn btn-danger m-4' >Back</a>
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">

    
    <form action=" insert.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
    <p class="text-center fw-bold fs-3 text-warning">Product Details :</p>
    
   
  </div>
  <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" name="Pname" class="form-control" placeholder="Name of Product">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Product Price</label>
    <input type="text"  name="Pprice" class="form-control" placeholder="Enter Product price">
   
  </div>

 
  
  
  <div class="mb-3">
 
    <label class="form-label">Product Image</label>
    <div class="upload">
  <div class="col-md-8 border border-primary mt-3">
    <input type="file"  name="Pimage"class="form-control">
    </div>
  </div>
  <!-- </div>
  <div class="mb-3">
 
 <label class="form-label">Product Image1</label>
 <div class="upload">
<div class="col-md-8 border border-primary mt-3">
 <input type="file"  name="Pimage1"class="form-control">
 </div>
</div>
</div>
<div class="mb-3">
 
 <label class="form-label">Product Image2</label>
 <div class="upload">
<div class="col-md-8 border border-primary mt-3">
 <input type="file"  name="Pimage2"class="form-control">
 </div>
</div>
</div> -->

  <div class="mb-3">
    <label class="form-label">Select page Category</label>
   <select class="form-select"  name="Pages">
    <option value="Home">Home</option>
    <option value="laptop">laptop</option>
    <option value="mobile">mobile</option>
    <option value="bag">bag</option>
    <option value="Fashion">Fashion</option>
   
    <option value="Sports">Sports</option>
   
   </select>
   
  </div>
  <div>
  <input type="checkbox" name="Featured" id="Feature" value="Default">
<label for="Featured"> Default</label><br>
  </div>
  <div>
  <input type="checkbox" name="Featured" id="Feature" value="Feature">
<label for="Feature"> Featured</label><br>
  </div>
  <div>
  <input type="checkbox" name="Latest" value="Latest" id="Latest">
<label for="Latest"> Latest</label><br>
  </div>
  <button  name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-black">upload</button>
  

    </form>
    </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">

   

  <table class="table border border-warning table-hover border my-3">
  <thead class="bg-dark text-white fs-5 font-monospace text-center">
  <th>Id</th>
  <th>Name</th>
  <th>Price</th>
  <th>Iamge</th>
  
  <th>Category</th>
  <th>Type</th>
  <th>Update</th>
  <th>Delete</th>
  </thead>
  
 
  <tbody class="text-center">
    <?php
    include 'config.php';
    $record= mysqli_query($con, "SELECT * FROM `producttable`");
   while($row= mysqli_fetch_array($record))
   echo"
   <tr>
   <td>$row[Id]</td>
   <td>$row[Pname]</td>
   <td>$row[Pprice]</td>
   <td><img src='$row[Pimage] 'height='90px' width='200px'></td>
  
   <td>$row[Pcatogery]</td>
   <td>$row[Featured_Product]</td>
   <td><a href='update.php? ID= $row[Id]' class= 'btn btn-info' >Update</a></td>
   <td><a href='delet.php? ID=$row[Id]' class= 'btn btn-danger' >Delete</a></td>
 </tr>

   ";
    ?>
  </tbody>
</table>
</div>
  </div>
</div>

</body>
</html>