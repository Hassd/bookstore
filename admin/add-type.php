<?php
include"include/conn.php";
$text=$_POST['mz'];
$ms=$_POST['ms'];

$cx="insert into tb_type (typeid,typename,typedes) values('','$text','$ms')";
$tj=mysqli_query($link,$cx);
if(mysqli_affected_rows($link)){
    echo "<script>alert('��ӳɹ���');</script>";
	echo "<script>location.href='look-type.php';</script>";
}else{
    echo "<script>alert('���ʧ�ܣ�');</script>";
	echo "<script>location.href='tj-type.php';</script>";
}
?>