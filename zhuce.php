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
$zc=mysqli_affected_rows($link);//��ȡ��һ��mysql����Ӱ��ļ�¼��
if($result && $zc)
{
	echo "<script>alert('ע��ɹ���');</script>";
	echo '<script>location.href="login.php";</script>';
}else{
	echo "<script>alert('ע��ʧ�ܣ�');</script>";
	echo '<script>location.href="regsiter.php";</script>';
}

?>