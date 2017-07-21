<?php
/*
資料庫刪除判斷
*/
$con = mysqli_connect("localhost","root","1234","test");
mysqli_set_charset($con,"utf8");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$id = $_POST['id'];
$sql = "DELETE FROM `login` WHERE id='$id'";

if(mysqli_query($con,$sql)){
	$result = array('delete'  =>"yes");
	echo json_encode($result);
}
else{
	$result = array('delete'  =>"no");
	echo json_encode($result);
}

?>