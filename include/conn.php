<?php
	$link=mysqli_connect('localhost','root','','db_shop') or die('数据库连接出错：'.mysqli_connect_error());
    mysqli_query($link,'set names gb2312');

?>