<?php
include"include/conn.php";

$typeid=$_GET['typeid'];
$mz=$_POST['mz'];
$ms=$_POST['ms'];
$cx="update tb_type set typename='$mz',typedes='$ms' where typeid=$typeid";
$tj=mysqli_query($link,$cx);
if(mysqli_affected_rows($link)){
    echo "<script>alert('修改成功！');</script>";
	echo "<script>location.href='look-type.php';</script>";
}else{
    echo "<script>alert('修改失败！');</script>";
	echo "<script>location.href='xg-type.php';</script>";
}
?>