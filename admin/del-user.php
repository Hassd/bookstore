<?php
$userid=$_GET['id'];
include("include/conn.php");
$query="delete from tb_user where userid=$userid";
$result=mysqli_query($link,$query);
if(mysqli_affected_rows($link)){
	echo "<script>alert('ɾ���ɹ���') </script>";
	echo "<script>location.href='user.php'</script>";
}else{
	echo "<script>alert('ɾ��ʧ�ܣ�') </script>";
	echo "<script>location.href='user.php'</script>";
}

?>