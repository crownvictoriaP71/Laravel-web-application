
<?php

$link = mysqli_connect("localhost","root","","logindb");
if (!$link)
{
    exit("15555555");
}


$ID = '';
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$level = "member";


$sql = "insert into login values('$ID','$username','$password','$name','$level');";
if(!$sql){
    exit("25555555");
}
$query = mysqli_query($link,$sql);
if(!$query)
{
    exit("35555555");
}
echo "<br><br";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 

</head>
<body>
     
<div class="alert alert-primary" role="alert">
สมัครสมาชิกแล้วสำเร็จแล้ว!!!


<a  href="index.php" type="button" class="btn btn-primary btn-lg btn-block">เข้าสู้ระบบ</a>
</body>
</html>
