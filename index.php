<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
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
      <h3><img src="images/left.gif" />天天公告</h3>
      <ul>
      <?php
        //引入连接数据库文件
        include("include/conn.php");
        //查询
        $query="select * from tb_gonggao limit 0,9";
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
  <div id="con">
    <div id="banner">
      <script language="javascript" src="js/pptBox.js"></script>
      <script>
     var box =new PPTBox();
     box.width = 510; //宽度
     box.height = 314;//高度
     box.autoplayer = 3;//自动播放间隔时间

     //box.add({"url":"图片地址","title":"悬浮标题","href":"链接地址"})
     box.add({"url":"images/js4.png","href":"","title":"悬浮提示标题1"})//url为换图片 href为点击后链接的地址
     box.add({"url":"images/js2.png","href":"","title":"悬浮提示标题2"})//url为换图片 href为点击后链接的地址
     box.add({"url":"images/js3.png","href":"","title":"悬浮提示标题3"})//url为换图片 href为点击后链接的地址
     box.add({"url":"images/js.png","href":"","title":"悬浮提示标题4"})//url为换图片 href为点击后链接的地址
     box.show();
    </script>
    </div>
    <div id="right">
    <h3><img src="images/right.gif" /><span>图书畅销榜</span></h3>
    <?php
    $query="select * from tb_book where recommend=1 and newbook=1 order by bookid desc limit 0,10 ";
    $result=mysqli_query($link,$query);
    //循环显示
    $ew=1;
    while($row=mysqli_fetch_array($result)){
    
    ?>
      <p id="<?php if($ew==1){echo "rp";} ?>"><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"><img src="images/<?php echo $ew ?>.gif" /><?php echo $row['bookname']?> </a></p>
    <?php
    $ew++;
    }
    ?>
    </div>
    <div id="confooter">
      <h3><span class="hl"><img id="conimg" src="images/right5.gif" />推荐图书</span><span class="hr">更多推荐图书>></span></h3>
      <ul>
        <?php
       
        //查询
        $query="select * from tb_book where recommend=1 limit 0,9 ";
        $result=mysqli_query($link,$query);
        //循环显示
        while($row=mysqli_fetch_array($result)){

        ?>
        <li><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"> <img src="admin/<?php echo $row['photo']?>"  width="50px" height="50px"  /></a>
          <h5><span>图书名称：</span><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"><?php echo $row['bookname']?></a></h5>
          <p><?php echo $row['author']?></p>
          <p>价格：<span><?php echo $row['bookprice']?></span></p>
        </li>
        <?php 
          } 
          //关闭数据库
          mysqli_close($link);
        ?>
      </ul>
    </div>
  </div>
</div>
<div id="footer"> 
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
  <p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>

</body>
</html>
