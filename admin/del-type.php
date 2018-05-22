<?php
$typeid=$_GET['typeid'];
include("include/conn.php");
$query="delete from tb_type where typeid=$typeid";
$result=mysqli_query($link,$query);
if(mysqli_affected_rows($link)){
	echo "<script>alert('É¾³ý³É¹¦£¡') </script>";
	echo "<script>location.href='look-type.php'</script>";
}else{
	echo "<script>alert('É¾³ýÊ§°Ü£¡') </script>";
	echo "<script>location.href='look-type.php'</script>";
}

?>