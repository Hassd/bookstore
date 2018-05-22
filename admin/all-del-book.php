<?php
$bookid=$_GET;
include("include/conn.php");
foreach($bookid as $key=> $value){
	$query="delete from tb_book where bookid='$key'";
	$result=mysqli_query($link,$query);	
}
if(mysqli_affected_rows($link)){
	echo "<script>alert('?????') </script>";
	echo "<script>location.href='look-shangpin.php'  </script>";
}else{
	echo "<script>alert('?????') </script>";
	echo "<script>location.href='look-shangpin.php'  </script>";
}


?>