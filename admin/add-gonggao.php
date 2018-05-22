<?php
include"include/conn.php";
$title=$_POST['title'];
$textarea=$_POST['textarea'];
$dtae=date("Y-m-d");
$cx="insert into tb_gonggao (title,content,ggdate) values('$title','$textarea','$dtae')";
$tj=mysqli_query($link,$cx);
if(mysqli_affected_rows($link)){
    echo "<script>alert('添加成功！');</script>";
	echo "<script>location.href='gonggao.php';</script>";
}else{
    echo "<script>alert('添加失败！');</script>";
	echo "<script>location.href='tj-gonggao.php';</script>";
}
?>