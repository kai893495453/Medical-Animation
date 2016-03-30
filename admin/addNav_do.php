<?php 
	require_once "../include/config.php";
	require_once "../include/common.fun.php";
	if(insert("nav",$_POST['data'])){
		header("Location: nav.php"); 
	}
?>