<?php
$userid=$_GET;
include("include/conn.php");
foreach($userid as $key=> $value){
	$query="delete from tb_user where userid='$key'";
	$result=mysqli_query($link,$query);	
}
if(mysqli_affected_rows($link)){
	echo "<script>alert('ɾ���ɹ���') </script>";
	echo "<script>location.href='user.php'  </script>";
}else{
	echo "<script>alert('ɾ��ʧ�ܣ�') </script>";
	echo "<script>location.href='user.php'  </script>";
}


?>