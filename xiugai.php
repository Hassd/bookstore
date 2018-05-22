<?php
session_start();
$arr=$_SESSION['shuzhu'];

$book=$_GET;
include("include/conn.php");
foreach($book as $key => $a){
	
	$arr[$key]['booknum']=$a;	
	
	
}
$_SESSION['shuzhu']=$arr;
header("Location:gouwuche.php");
?>