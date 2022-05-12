<?php
$Con= mysqli_connect('localhost:3307','root','', 'jumbo mart');
if(isset($_POST['submit'])){
    
    $Cname=$_POST['name'];
    $Cphone_no=$_POST['phone'];
    $Cemail=$_POST['email'];
    $Csubject=$_POST['subject'];
    $Cmessege=$_POST['message'];

$query_run = mysqli_query($Con,"INSERT INTO `feedback`(`name`, `phone`, `email`, `subject`, `message`) VALUES ('$Cname','$Cphone_no',' $Cemail',' $Csubject','$Cmessege')");





if($query_run)
{
    echo"
    <script>
    alert(' feedback successfully');
    window.location.href='Contact.php';
    </script>
    ";
   
}

else
{
    echo"
    <script>
    alert('Somthing went wrong');
    window.location.href='Contact.php';
    </script>
    ";
    
}
}





?>