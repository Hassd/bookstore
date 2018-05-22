<?php
$typeid=$_GET;
include("include/conn.php");
foreach($typeid as $key=> $value){
	$query="delete from tb_type where typeid='$key'";
	$result=mysqli_query($link,$query);	
}
if(mysqli_affected_rows($link)){
	echo "<script>alert('É¾³ý³É¹¦£¡') </script>";
	echo "<script>location.href='look-type.php'  </script>";
}else{
	echo "<script>alert('É¾³ýÊ§°Ü£¡') </script>";
	echo "<script>location.href='look-type.php'  </script>";
}


?>