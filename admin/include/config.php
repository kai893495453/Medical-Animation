<?php 
  $_ENV['connect'] = $connect = mysqli_connect("localhost:3306","root","qingkai");
  mysqli_query($connect,"set names utf8");
  mysqli_select_db($connect,"xuyang");
  date_default_timezone_set("PRC");
  session_start();
  $arr = explode("/",$_SERVER['REQUEST_URI']);
  if(@!$_SESSION['admin'] && end($arr)!="login.php"){
  	header("location:login.php");
  }
?>