<?php
$bookid=$_GET['id'];
$booknum=$_POST['booknum'];
session_start();
if(isset($_SESSION['shuzhu'])){
	$arr=$_SESSION['shuzhu'];	
}

include("include/conn.php");
//查询
$query="select * from tb_book where bookid=$bookid";
$result=mysqli_query($link,$query);
//显示
$row=mysqli_fetch_array($result);
if(array_key_exists($bookid,$arr)){
	$arr[$bookid]['booknum'] +=$booknum;
}else{
	$arr[$bookid]=array('bookid'=>$bookid,'bookname'=>$row['bookname'],'bookprice'=>$row['bookprice'],'photo'=>$row['photo'],'booknum'=>$booknum);	
}
$_SESSION['shuzhu']=$arr;



header("Location:gouwuche.php");
?>