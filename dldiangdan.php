<?php
include("include/conn.php");
session_start();
$userid=$_SESSION['userid'];
if($_GET['ty']){
    $query="delete from tb_dingdan where userid=$userid";
    $result=mysqli_query($link,$query);
    if(mysqli_affected_rows($link)){
        echo '<script>alert("全部删除成功！");</script>';
		echo '<script>location.href="wodedingdan.php";</script>';
    }else{
        echo '<script>alert("删除失败！");</script>';
		echo '<script>location.href="wodedingdan.php";</script>';
    }
}else{
    $orderid=$_GET['orderid'];
    $query="delete from tb_dingdan where orderid=$orderid";
    $result=mysqli_query($link,$query);
    if(mysqli_affected_rows($link)){
        echo '<script>alert("删除成功！");</script>';
		echo '<script>location.href="wodedingdan.php";</script>';
    }else{
        echo '<script>alert("删除失败！");</script>';
		echo '<script>location.href="wodedingdan.php";</script>';
    }
}

?>