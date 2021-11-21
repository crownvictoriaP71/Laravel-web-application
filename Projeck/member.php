<?php session_start();  
include('condb.php');
 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../Projeck1/index.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

  <a type="text" class="btn btn-primary btn-lg btn-block">  <h1> เว็บแชร์ยินดีต้อนรับ </h1> <h3> สวัสดีคุณ <?php echo $name; ?> </h3>   </a>


  <?php 

require_once('connection.php');

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];

    $select_stmt = $db->prepare('SELECT * FROM tbl_file WHERE id = :id');
    $select_stmt->bindParam(':id', $id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    unlink("upload/".$row['image']); // unlin functoin permanently remove your file

    // delete an original record from db
    $delete_stmt = $db->prepare('DELETE FROM tbl_file WHERE id = :id');
    $delete_stmt->bindParam(':id', $id);
    $delete_stmt->execute();

    header("Location: member.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index Page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


<div class="container text-center">


    
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>ชื่อเรื่อง</td>
                <td>Image</td>
                <td>รีวิว</td>
          
            </tr>
        </thead>

        <tbody>
            <?php 
                $select_stmt = $db->prepare('SELECT * FROM tbl_file'); 
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php    echo $name;  echo $row['name']; echo "dfdf"; ?></td>                        
                    <td><img src="upload/<?php echo $row['image']; ?>" width="200px" height="300px" alt=""></td>      
                  <h1> <td><?php  echo $kku=$row['reviw'];?></td>  </h1>  
                   

       
                    <td>   <a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">แก้ไขรีวิว</a>   <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">ลบรีวิว</a>  
                     <?php  echo "เพิ่มโดยคุณ ";echo $name; ?>   </td>                        
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>   <a href="add.php" class="btn btn-success">เขียนรีวิว</a>
    <a href="logout.php" class="btn btn-success">ออกจากระบบ</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

