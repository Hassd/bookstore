<?php
session_start();
$yhm=$_POST['yhm'];
$yhm=iconv('UTF-8','gb2312',$yhm);
$mm=md5($_POST['mm']);
include("include/conn.php");
//��ѯ
$query="select * from tb_user where username='$yhm' and password='$mm'";
$result=mysqli_query($link,$query);
$num=mysqli_num_rows($result);


if($num>0){
	$row=mysqli_fetch_array($result);
	$_SESSION['username']=$row['username'];
	$_SESSION['userid']=$row['userid'];
	//
	$username=$row['username'];
	$query1="select tb_book.bookid,tb_book.bookprice,tb_book.bookname,tb_book.photo,tb_gwc.booknum from tb_gwc,tb_user,tb_book where tb_gwc.userid=tb_user.userid and tb_book.bookid=tb_gwc.bookid and tb_user.username='$username'";
	$result1=mysqli_query($link,$query1);
	$arr=array();
	while($row1=mysqli_fetch_assoc($result1)){
		$bookid=$row1['bookid'];
		$arr[$bookid]=array('bookid'=>$row1['bookid'],'bookname'=>$row1['bookname'],'bookprice'=>$row1['bookprice'],'photo'=>$row1['photo'],'booknum'=>$row1['booknum']);
		
	}
	$_SESSION['shuzhu']=$arr;
	echo print_r($_SESSION['shuzhu']);
 	header("Location: index.php ");
}else{
	echo "<script>alert('�û������������') </script>";
	echo "<script>location.href='login.php'  </script>";
}
?>