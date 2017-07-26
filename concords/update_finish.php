<?php
/*
更新資料庫的密碼及個人資料
*/

$con = mysqli_connect("localhost","root","1234","test");

mysqli_set_charset($con,"utf8");
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$id=$_POST['id'];
$password = MD5($_POST['password']);
$password2 = MD5($_POST['password2']);
$name = $_POST['name'];
$mailbox = $_POST['mailbox'];
$lineid = $_POST['lineid'];
$cellphone = $_POST['cellphone'];

if( $id!=null&&$password != null && $password2 != null && $password == $password2){
		
	$sql = "update login set name='$name',mailbox='$mailbox',password='$password',cellphone='$cellphone',lineid='$lineid'  where id='$id'";
	if(mysqli_query($con,$sql)){
			$json = array('status'=>1);
			echo json_encode($json);
	}
	else{
			$json = array('status'=>2);
			echo json_encode($json);
	}
}

else{
	$json = array('status'=>3);
	echo json_encode($json);
}

?>