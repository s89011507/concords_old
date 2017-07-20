<?php 
session_start(); 
//將session清空
$result = array('register'  =>$_SESSION['id']);
unset($_SESSION['id']);
echo json_encode($result);
?>