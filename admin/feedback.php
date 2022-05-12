<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    
    <?php
    include 'adminpan.php';
    $con = mysqli_connect('localhost:3307','root','','Jumbo mart');
    $record=mysqli_query($con,"SELECT * FROM `feedback`");
    $rowcount=mysqli_num_rows($record);
    ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                
      
    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Delet</th>
        </thead>
        
      
        <tbody class="text-center text-danger">
            
            <?php
           
              while($row=mysqli_fetch_array($record)){
               echo"     <tr>
                    <td>$row[Id]</td>
                    <td>$row[name]</td>
                    <td>$row[phone]</td>
                    <td>$row[email]</td>
                    <td>$row[subject]</td>
                    <td>$row[message]</td>

                    <td><a href='delet_feedback.php? ID=$row[Id]' class='btn btn-outline-danger'>Delet</a></td>
                    </tr>
                    ";
              }
            ?>
        </tbody>
    </table>
    </div>
    <div class="col-md-2 pr-5 text-center">
        <h3>Total</h3>
        <h1  class="bg-info text-white"><?php echo  $rowcount; ?></h1>
    </div>
         
    </div>
    </div>
</body>
</html>