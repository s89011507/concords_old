<?php

$id = $_POST["cid"];
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

if(empty($id)){
	$json = array('check'  => "empty");
	echo json_encode($json);
}
else{
	if(empty($row)){
		if(empty($row2)){
			$json = array('check'  => "yes");
			echo json_encode($json);
		}
		else{
			$json = array('check'  => "no");
			echo json_encode($json);
		}	
	}
	else{
		$json = array('check'  => "no");
		echo json_encode($json);
	}
}

?>