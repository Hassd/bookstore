<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="css/gonggao.css" />
</head>
<body>
<div id="header">
<?php
 include("include/header.php");
?>
</div>
<div id="nav" >
  <?php
    include("include/nav.html");
  ?>
</div>
<div id="content">
<?php
  $id=$_GET['id'];
  //引入连接数据库文件
  include("include/conn.php");
  //查询
  $query="select * from tb_gonggao where id=$id";
  $result=mysqli_query($link,$query);
  //显示
  $row=mysqli_fetch_array($result);
?>

<h1 style="color:red;width: 100%;text-align: center;"><?php echo $row['title'] ?></h1>
<p><?php echo $row['content'] ?></p>

</div>
<div id="footer">
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
  <p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>
</body>
</html>
