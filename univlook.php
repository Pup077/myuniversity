<!DOCTYPE html>
<?php
  include "connectdb.php";
  $id = $_GET['unid'];
  $sql = "CALL univlook('$id');";
  $res = $conn->query($sql);
?>
<html>
  <head>
    <meta charset="utf8">
    <title>ข้อมูลมหาวิทยาลัย</title>
    <link rel="stylesheet" href="mystyle.css">
  </head>
  <body>
    <h1>ดูข้อมูลมหาวิทยาลัย</h1>
    <hr>
    <?php
      if (!$res == false || $res->num_rows > 0) {
        $row = $res->fetch_assoc();
          ?>
    <form>
      <label for="unid">รหัสมหาวิทยาลัย : </label>
      <input type="text" name="unid" id="unid" value= <?php echo "\"".$row['unid'] ."\""; ?> disabled>
      <br><label for="unthname">ชื่อมหาวิทยาลัย (ไทย) : </label>
      <input type="text" name="unthname" id="unthname" value = <?php echo "\"".$row['unthname'] . "\""; ?> size="50" disabled>
      <br><label for="unengname">ชื่อมหาวิทยาลัย (อังกฤษ) : </label>
      <input type="text" name="unengname" id="unengname" value = <?php echo "\"".$row['unengname'] . "\""; ?> size="50" disabled>      
    </form>
    <?php
      }else{
        echo "<font size=\"12\" color=\"red\">ไม่พบข้อมูล!</font>";
      }
    ?>
  </body>
</html>