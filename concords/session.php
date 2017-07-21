<?php
/*
判斷SESSION['id']是否有值
*/
session_start(); 
if(empty($_SESSION['id'])){
	$json = array('status'=>"no");
	echo json_encode($json);
}
else
{
	$json = array('status'=>"yes");
	echo json_encode($json);
}
?>