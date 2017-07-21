<?php
/*
顯示使用者帳號資料
*/
$con = mysqli_connect("localhost","root","1234","test");
mysqli_set_charset($con,"utf8");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

header("Content-type: application/json");   

$arr = array();
$sql="SELECT * FROM login";
$rs = mysqli_query($con,$sql);
  
while($obj = mysqli_fetch_object($rs)){
	$arr[] = $obj;
}
 
echo json_encode($arr);
?>