<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
$con = mysqli_connect("localhost","root","1234","test");

mysqli_set_charset($con,"utf8");
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>