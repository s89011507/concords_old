<?php 
/*
登出頁
清空Session
*/
session_start(); 

$result = array('register'  =>$_SESSION['id']);
unset($_SESSION['id']);
echo json_encode($result);
?>