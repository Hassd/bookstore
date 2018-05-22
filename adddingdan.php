<?php
session_start();
if(isset($_SESSION['userid'])){
	$userid=$_SESSION['userid'];
	if(isset($_SESSION['shuzhu'])){
		$arr=$_SESSION['shuzhu'];
		include'include/conn.php';
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$dz=$_POST['dz'];
		$yb=$_POST['yb'];
		$tel=$_POST['tel'];
		$email=$_POST['email'];
		$xm=$_POST['xm'];
		$shff=$_POST['shff'];
		$time=date('Y-m-d');
		
		foreach($arr as $a)
		{
			$bookname=$bookname.$a['bookname'].'@';
			$booknum=$booknum.$a['booknum'].'@';
			$total=$total+$a['booknum']*$a['bookprice'];
		} 
		$query="insert into tb_dingdan values('','$userid','$bookname','$booknum','$name','$sex','$dz','$yb','$tel','$email','$shff','$time','$xm','未处理','$total')";
		$result=mysqli_query($link,$query);
		if(mysqli_affected_rows($link)>0) //如果插入成功则返回到首页，否则出错
		{
			unset($_SESSION['shuzhu']);
			header("location:index.php");	
		}
		else
		{
			echo "<script>alert('插入异常');</script>";	
			echo "<script>location.href='gouwuche.php'</script>";		
		}
	
	}else{
		header("Location:index.php");
	}	
}else{
	echo "<script>alert('请登录！') </script>";
	echo "<script>location.href='login.php'  </script>";	
}




?>