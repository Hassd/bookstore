<?php
include"include/conn.php";
if(isset($_POST['ok'])){
	$name=$_POST['name'];
	$sh=$_POST['sh'];
	$lx=$_POST['lx'];
	$zz=$_POST['zz'];
	$cbs=$_POST['cbs'];
	$time=$_POST['nian']."-".$_POST['yue']."-".$_POST['ri'];
	$jg=$_POST['jg'];
	$zk=$_POST['zk'];
	$jj=$_POST['jj'];
	$sftj=$_POST['sftj'];
	$newbook=$_POST['newbook'];
	$cx="select * from tb_book where isbn=$sh";
	$tj=mysqli_query($link,$cx);
	if(mysqli_num_rows($tj)>0){
		echo "<script>alert('已有这本书号！');</script>";
		echo "<script>location.href='tj-shangpin.php';</script>";
	}else{
		if(is_uploaded_file($_FILES['file']['tmp_name'])){
			$tpname=$_FILES['file']['name'];
			$tmp_name=$_FILES['file']['tmp_name'];
			$error=$_FILES['file']['error'];
			$lj="upimages/".$tpname;
			if($error==0){
				move_uploaded_file($tmp_name,$lj);
				$cr="insert into tb_book(`typeid`,`isbn`,`bookname`,`author`,`pubhouse`,`pubdate`,`bookprice`,`vipprice`,`photo`,`introduction`,`recommend`,`newbook`) values ('$lx','$sh','$name','$zz','$cbs','$time','$jg','$zk','$lj','$jj','$sftj','$newbook')";
				$ztj=mysqli_query($link,$cr);
				if(mysqli_affected_rows($link)>0){
					echo "<script>alert('添加成功！');</script>";
					echo "<script>location.href='look-shangpin.php';</script>";

				}else{
					echo "<script>alert('添加失败！');</script>";
					echo "<script>location.href='tj-shangpin.php';</script>";
	
				}

			}
			
		}
	}

}else{
	echo "<script>location.href='index.html';</script>";
}


?>