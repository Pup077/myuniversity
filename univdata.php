<!DOCTYPE html>
<?php
  include "connectdb.php";
  $sql = "SELECT * FROM tbuniversity;";
  $res = $conn->query($sql);
?>
<html>
  <head>
    <meta charset="utf8">
    <title>ข้อมูลมหาวิทยาลัย</title>
    <link rel="stylesheet" href="mystyle.css">
  </head>
  <body background="/SWU/img/G5.jpg">
    <h1>ข้อมูลมหาวิทยาลัย</h1>
    <hr>
    <?php
      if(!$res == false || $res->num_rows > 0){
      ?>
      <table border="1" cellpadding="0" cellspacing="0">
        <tr bgcolor="#33FF55">
          <th>รหัสมหาวิทยาลัย</th>
          <th>ชื่อมหาวิทยาลัย (ไทย)</th>
          <th>ชื่อมหาวิทยาลัย (อังกฤษ)</th>
          <th colspan="3">ดำเนินการ</th>
        </tr>
      <?php
        while ($row=$res->fetch_assoc()) {
          $linklook = "<a href=\"univlook.php?unid=" . $row["unid"] . "\">ดู</a>"; 
          $linkup = "<a href=\"univup.php?unid=" . $row["unid"] . "\">แก้ไข</a>"; 
          $linkdel = "<a href=\"univdel.php?unid=" . $row["unid"] . "\">ลบ</a>"; 
      ?>
        <tr>
          <td><?php echo $row['unid'] ?></td>
          <td><?php echo $row['unthname'] ?></td>
          <td><?php echo $row['unengname'] ?></td>
          <td width="40" align="center" bgcolor="darkblue"><?php echo $linklook ?></td>
          <td width="40" align="center" bgcolor="darkblue"><?php echo $linkup ?></td>
          <td width="40" align="center" bgcolor="darkblue"><?php echo $linkdel ?></td>
        </tr>
    <?php
        }  /* End while */
      ?>
      </table>
    <?php
      } /* End if */
    ?>
  </body>
</html>