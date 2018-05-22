<?php
include"include/conn.php";
$orderid=$_GET['orderid'];
$zt=$_POST['zt'];
$cx="update tb_dingdan set zt='$zt' where orderid=$orderid ";
$tj=mysqli_query($link,$cx);
if(mysqli_affected_rows($link)){
    echo "<script>alert('修改成功！');</script>";
	echo "<script>location.href='look-dingdan.php';</script>";
}else{
    echo "<script>alert('修改失败！');</script>";
	echo "<script>location.href='look-dingdan.php';</script>";
}
?>