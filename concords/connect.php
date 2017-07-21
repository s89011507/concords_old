<?php
/*
登入查詢資料庫
*/
session_start();

$id = $_POST["id"];
$pw = $_POST["pw"];
$_SESSION['id']=$id;
$con = mysqli_connect("localhost","root","1234","test");

mysqli_set_charset($con,"utf8");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

header("Content-type: application/json");  

$result = mysqli_query($con,"SELECT * FROM login where id = '$id'");
$row = mysqli_fetch_row($result);
$result2 = mysqli_query($con,"SELECT * FROM admin where id = '$id'");
$row2 = mysqli_fetch_row($result2);

if($_SESSION['id'] != null){
	
	if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw){
	$json = array('status'  => 1,'name'=>$_SESSION['id']);
	echo json_encode($json);
	}
	
	elseif($id != null && $pw != null && $row2[1] == $id && $row2[2] == $pw){
	$json = array('status'  => 2);
	echo json_encode($json);
	}
	
	else{
	$json = array('status'  => 3);
	echo json_encode($json);
	} 
	
}
else{
	$json = array('status'  => 4);
	echo json_encode($json);
}

?>