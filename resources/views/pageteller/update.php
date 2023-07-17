<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
</body>
</html>
<?php
   $no=$_POST['no_val'];
   $jenis=$_POST['jenis'];
   $value="sudah";
   $conn=mysqli_connect("localhost","root","","antrian_mh");
   $query=mysqli_query($conn,"UPDATE table_no_antrian SET st='$value' WHERE no_antrian=$no AND jenis='$jenis'");
 ?>
 



       
        
    


            