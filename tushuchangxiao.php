<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="css/changxiao.css" />
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
 
  <div id="left">
    <div id="subnav">
      <?php
        include("include/nav2.html");
      ?>
    </div>
    <div id="bottom">
      <h3><img src="images/left.gif" />公告显示</h3>
      <ul>
      <?php
        //引入连接数据库文件
        include("include/conn.php");
        //查询
        $query="select * from tb_gonggao";
        $result=mysqli_query($link,$query);
        //循环显示
        while($row=mysqli_fetch_array($result)){

      ?>
        <li><a href="gonggao.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></li>
        <?php
        } 
        ?>
      </ul>
    </div>
  </div>
  <div id="right">
    <?php
      $id=$_GET['id'];

      $query="select * from tb_book where bookid=$id";
      $result=mysqli_query($link,$query);
      $row=mysqli_fetch_array($result)

      ?>
    <h3><?php echo $row['bookname']?></h3>
    <div id="rleft"><img  src="admin/<?php echo $row['photo']?>" width="200px" height="200px"/></div>
    <div id="rright">
      <p class="p2">原价：<span>￥<?php echo $row['bookprice']?></span></p>
      <p class="p3">现价：￥<?php echo $row['vipprice']?> </p>
      <p class="p4">作 者：<span><?php echo $row['author']?></span>著</p>
      <p class="p5">出版社：<span><?php echo $row['pubhouse']?></span></p>
      <p>出版时间：<?php echo $row['isbn']?></p>
      <p>购买数量：
      
      <form id="form1" name="form1" method="post" action="addgwc.php?id=<?php echo $row['bookid']?>">
        <input name="booknum" type="text"   width="50"  />
        件</p>
      
        <input type="submit" value=""  style="background:url(images/images.jpg) no-repeat ; width:175px; height:40px;" />
      </form>
    </div>
    <div id="rfooter">
      <ul>
       
        <li><a href="#">内容简介</a></li>
        
      </ul>
      <p><?php echo $row['introduction']?></p>
    </div>
  </div>
</div>
<div id="footer">
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
  <p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>
</body>
</html>
