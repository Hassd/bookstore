<?php
include"include/conn.php";
session_start();
$yhm=$_POST['yhm'];
$mm=md5($_POST['mm']);
$query="select * from tb_admin where name='$yhm' and password='$mm'";
$result=mysqli_query($link,$query);
$num=mysqli_num_rows($result);
if($num){
	$row=mysqli_fetch_array($result);
	$_SESSION['adminid']=$row['id'];
	header("Location: look-shangpin.php ");
}else{
	echo "<script>alert('用户名或密码错误！') </script>";
	echo "<script>location.href='index.html'  </script>";
}
?>