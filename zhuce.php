<?php
$yhm=$_POST['yhm'];
$dlmm=md5($_POST['dlmm']);
$lxdh=$_POST['lxdh'];
$xydz=$_POST['xydz'];
$yhdz=$_POST['yhdz'];
$time=date('y-m-d');
include("include/conn.php");

$query="insert into tb_user(username,password,email,adress,tel,redtime)values('$yhm','$dlmm','$xydz','$yhdz','$lxdh','$time')";
$result=mysqli_query($link,$query);
$zc=mysqli_affected_rows($link);//获取上一次mysql操作影响的记录数
if($result && $zc)
{
	echo "<script>alert('注册成功！');</script>";
	echo '<script>location.href="login.php";</script>';
}else{
	echo "<script>alert('注册失败！');</script>";
	echo '<script>location.href="regsiter.php";</script>';
}

?>