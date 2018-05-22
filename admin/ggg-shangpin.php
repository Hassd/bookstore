<?php
    include"include/conn.php";
    $bookid=$_GET['bookid'];
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
    if($_FILES['file']['name']!=""){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            $tpname=$_FILES['file']['name'];
			$tmp_name=$_FILES['file']['tmp_name'];
			$error=$_FILES['file']['error'];
			$lj="upimages/".$tpname;
			if($error==0){
                move_uploaded_file($tmp_name,$lj);
                $cx="update tb_type set typeid='$lx',isbn='$sh',bookname='$name',author='$zz',pubhouse='$cbs',pubdate='$time',bookprice='$jg',vipprice='$zk',photo='$lj',introduction='$jj',recommend='$sftj',newbook='$newbook' where bookid=$bookid";
            }else{
                echo "<script>alert('ÐÞ¸ÄÊ§°Ü£¡');</script>";
                echo "<script>location.href='look-shangpin.php';</script>";
            }
        }else{
            echo "<script>alert('ÐÞ¸ÄÊ§°Ü£¡');</script>";
            echo "<script>location.href='look-shangpin.php';</script>";
        }
    }else{
        $cx="update tb_book set typeid='$lx',isbn='$sh',bookname='$name',author='$zz',pubhouse='$cbs',pubdate='$time',bookprice='$jg',vipprice='$zk',introduction='$jj',recommend='$sftj',newbook='$newbook' where bookid=$bookid";
    }
    $ztj=mysqli_query($link,$cx);
    // if(mysqli_affected_rows($link)){
    //     echo "<script>alert('ÐÞ¸Ä³É¹¦£¡');</script>";
    //     echo "<script>location.href='look-shangpin.php';</script>";
    // }else{
    //     echo "<script>alert('ÐÞ¸ÄÊ§°Ü£¡');</script>";
    //     echo "<script>location.href='look-shangpin.php';</script>";
    // }
?>