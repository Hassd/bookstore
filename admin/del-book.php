<?php
$bookid=$_GET['id'];
include("include/conn.php");
$query="delete from tb_book where bookid=$bookid";
$result=mysqli_query($link,$query);
if(mysqli_affected_rows($link)){
	echo "<script>alert('É¾³ý³É¹¦£¡') </script>";
	echo "<script>location.href='look-shangpin.php'  </script>";
}else{
	echo "<script>alert('É¾³ýÊ§°Ü£¡') </script>";
	echo "<script>location.href='look-shangpin.php'  </script>";
}

?>