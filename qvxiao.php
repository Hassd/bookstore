<?php
session_start();
include("include/conn.php");
if($_GET['ty']){
	if(isset($_SESSION['userid'])){
		$userid=$_SESSION['userid'];
		$query="delete  from tb_gwc where userid='$userid'";
		$result=mysqli_query($link,$query);
	}
	
	unset($_SESSION['shuzhu']);
	header("Location:gouwuche.php");
	
}else{
	if(isset($_GET['bookid'])){
		$bookid=$_GET['bookid'];
		if(isset($_SESSION['userid'])){
			$userid=$_SESSION['userid'];
			$query="delete  from tb_gwc where userid='$userid' and bookid='$bookid'";
			$result=mysqli_query($link,$query);
		}
		if(isset($_SESSION['shuzhu'])){
			$arr=$_SESSION['shuzhu'];	
		}
		if(array_key_exists($bookid,$arr)){
			unset($arr[$bookid]);
			$_SESSION['shuzhu']=$arr;
		}
		header("Location:gouwuche.php");
	}
}



?>