<?php
include"include/conn.php";
$id=$_GET['id'];
$title=$_POST['title'];
$textarea=$_POST['textarea'];
$dtae=date("Y-m-d");
$cx="update tb_gonggao set title='$title',content='$textarea',ggdate='$dtae' where id=$id ";
$tj=mysqli_query($link,$cx);
if(mysqli_affected_rows($link)){
    echo "<script>alert('�޸ĳɹ���');</script>";
	echo "<script>location.href='gonggao.php';</script>";
}else{
    echo "<script>alert('�޸�ʧ�ܣ�');</script>";
	echo "<script>location.href='tj-gonggao.php';</script>";
}
?>