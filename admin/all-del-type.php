<?php
$typeid=$_GET;
include("include/conn.php");
foreach($typeid as $key=> $value){
	$query="delete from tb_type where typeid='$key'";
	$result=mysqli_query($link,$query);	
}
if(mysqli_affected_rows($link)){
	echo "<script>alert('ɾ���ɹ���') </script>";
	echo "<script>location.href='look-type.php'  </script>";
}else{
	echo "<script>alert('ɾ��ʧ�ܣ�') </script>";
	echo "<script>location.href='look-type.php'  </script>";
}


?>