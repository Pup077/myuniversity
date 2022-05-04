<!DOCTYPE html>
<?php
  include "connectdb.php";
  $id = $_POST['unid'];
  $unth = $_POST['unthname'];
  $uneng = $_POST['unengname'];
  $sql = "CALL univup($id,'$unth','$uneng');";
  $res = $conn->query($sql);
?>
<html>
  <head>
    <meta charset="utf8">
    <title>ข้อมูลมหาวิทยาลัย</title>
    <link rel="stylesheet" href="mystyle.css">
  </head>
  <body>
    <?php
    if($res){
      echo "<h1>ปรับปรุงข้อมูลมหาวิทยาลัยเรียบร้อย</h1>";
    }else{
      echo "<h1>ไม่สามารถปรับปรุงข้อมูลมหาวิทยาลัยได้</h1>";
    }
    ?>
    <hr>
  </body>
</html>