
<?php

$link = mysqli_connect("localhost","root","","logindb");
if (!$link)
{
    exit("15555555");
}


$ID = '';
$image = $_POST['image'];
$detel = $_POST['detel'];



$sql = "insert into movie values('$ID','$image','$detel');";
if(!$sql){
    exit("25555555");
}
$query = mysqli_query($link,$sql);
if(!$query)
{
    exit("35555555");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 

</head>
<body>
     
<div class="alert alert-primary" role="alert">
สำเร็จแล้ว!!!


<a  href="index.php" type="button" class="btn btn-primary btn-lg btn-block">เข้าสู้ระบบ</a>
</body>
</html>
