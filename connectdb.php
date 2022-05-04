<?php
  $dbserver = "localhost";
  $username = "root";
  $userpwd = "";
  $dbname = "schooldb";
  $conn = new mysqli($dbserver, $username, $userpwd, $dbname);
  if(!$conn){
    die("Error: " . $conn->connect_error);
  }
  $conn->set_charset("utf8");
?>
