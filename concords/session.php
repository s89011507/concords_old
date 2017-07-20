<?php
session_start(); 
if( $_SESSION['id']!=null)
{
	$json = array('status'="yes");
	echo json_encode($json);
}
else
{
	$json = array('status'=>"no");
	echo json_encode($json);
}
?>