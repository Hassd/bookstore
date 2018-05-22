<?php
$id=$_GET;
include("include/conn.php");
foreach($id as $key=> $value){
	$query="delete from tb_gonggao where id='$key'";
	$result=mysqli_query($link,$query);	
}
if(mysqli_affected_rows($link)){
	echo "<script>alert('É¾³ý³É¹¦£¡') </script>";
	echo "<script>location.href='gonggao.php'  </script>";
}else{
	echo "<script>alert('É¾³ýÊ§°Ü£¡') </script>";
	echo "<script>location.href='gongao.php'  </script>";
}


?>