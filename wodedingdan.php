<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="css/gouwuche.css" />
</head>
<body>
<div id="header">
<?php
 include("include/header.php");
?>
</div>
<div id="nav">
<?php
 include("include/nav.html");
?>
</div>
<script language="javascript"> 
        function resizeImage(obj){if(obj.height>50)obj.height=50;if(obj.width>50)obj.width=50; } 
        </script>
<h2 style="width: 1000px;height: 50px;font-size: 30px;text-align: center;line-height: 50px;color:#006600">我的订单</h2>
<div id="content" style="padding-top: 20px;"> 
  <form action="xiugai.php" method="get">
    <table width="1000" border="1" bordercolor='#006600' bgcolor="#FFFFFF"  cellspacing="0"  >
      <tr style="height: 80px;font-size: 16px">
        <th width="250">商品名称</th>
        <th width="100">收货人姓名</th>
        <th width="150">收货人电话</th>
        <th width="100">快递种类</th>
        <th width="100">价格</th>
        <th width="200">地址</th>
        <th width="100">操作</th>
      </tr>
      
    <?php
    //引入连接数据库文件
    include("include/conn.php");
    if(isset($_SESSION['userid'])){
      $userid=$_SESSION['userid'];
      $query="select * from tb_dingdan where userid=$userid";
      $result=mysqli_query($link,$query);
      if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_array($result)){
        ?>
      
    
        <tr  style="height: 80px;">
          <td style="border-top:1px #F60 solid;"><?php echo $row['spc']?></td>
          <td style="border-top:1px #F60 solid;"><?php echo $row['shouhuoren']?> </td>
          <td style="border-top:1px #F60 solid;"><?php echo $row['tel']?> </td>
          <td style="border-top:1px #F60 solid;"><?php echo $row['shff']?> </td>
          <td style="border-top:1px #F60 solid;">￥<?php echo $row['total']?></td>
          <td style="border-top:1px #F60 solid;"><?php echo $row['address']?></td>
          <td style="border-top:1px #F60 solid; border-right:0px">
            <a href="dldiangdan.php?orderid=<?php echo $row['orderid']?>&ty=0">删除订单</a>
          </td>
        </tr>
    
    <?php
        }
      }else{
        echo '<script>alert("订单为空！");</script>';
			  echo '<script>location.href="index.php";</script>';
      }

    }else{
      echo '<script>alert("您还没有登录，请登录！");</script>';
			echo '<script>location.href="login.php";</script>';
    }
		
	  ?>
    </table>
    <div id="ft">
      <p><a href="dldiangdan.php?ty=1">删除所有订单</a></p>
    </div>
  </form>
</div>
</body>
</html>
