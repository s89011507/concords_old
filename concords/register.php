<?php
/*
註冊介面連接
判斷是否輸入正確及SESSION是否有值
*/
session_start(); 
$con = mysqli_connect("localhost","root","1234","test");
mysqli_set_charset($con,"utf8");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

header("Content-type: application/json");
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$lineid = $_POST['lineid'];
$mailbox = $_POST['mailbox'];
$cellphone = $_POST['cellphone'];

$sql = "INSERT INTO `login` (`name`, `id`,`password`,`mailbox`,`lineid`,`cellphone`) 
		VALUE ('{$name}','{$id}','{$pw}','{$mailbox}','{$lineid}','{$cellphone}')";

if($id != null && $pw != null && $pw2 != null && $pw == $pw2){
	if(mysqli_query($con,$sql)){
		if(empty($_SESSION['id'])){
			$result = array('register'  =>"yes");
			echo json_encode($result);
		}
		else{
			$result = array('register'  =>"admin");
			echo json_encode($result);
		}
	}
	else{
		$result = array('register'  => "no");
		echo json_encode($result);
	}
}
else{
	$result = array('register'  =>"wrong");
	echo json_encode($result);
}

?>