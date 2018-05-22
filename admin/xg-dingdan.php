<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看详细订单</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/logo.gif" />天天书屋后台管理系统 </h1>
</div>
<div id="left">
<?php
  	include("include/nav-left.html");
?>
</div>
</div>
<div id="right" >

  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：订单管理－＞查看详细订单</p>

<?php
  include"include/conn.php";
  $orderid=$_GET['orderid'];
  $query="select * from tb_dingdan where orderid=$orderid";
  $result=mysqli_query($link,$query);
  $row=mysqli_fetch_array($result);
?>
  <table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
    <form action="ggg-dingdan.php?orderid=<?php echo $row['orderid']?>" method="post">
      <tr>
        <td width="156" height="20">订单号：<?php echo $row['orderid']?></td>
        <td width="320" height="20">&nbsp;&nbsp;
          <input name="zt" type="radio" value="已收款" <?php if($row['zt']=='已收款'){echo 'checked="checked"';}?>/>
          &nbsp;已收款&nbsp;&nbsp;
          <input name="zt" type="radio" value="已发货" <?php if($row['zt']=='已发货'){echo 'checked="checked"';}?>/>
          &nbsp;已发货&nbsp;&nbsp;
          <input name="zt" type="radio" value="已收货" <?php if($row['zt']=='已收货'){echo 'checked="checked"';}?>/>
          &nbsp;已收货</td>
        <td width="124"><input name="ok"  value="修改" type="submit" style="width:55px; height:20px;" /></td>
      </tr>
    </form>
    <tr>
      <td width="156" height="20">商品列表(如下)：</td>
    </tr>
  </table>
  <table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#666666"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr bgcolor="#628e37" style="color:#FFF">
            <td width="153" height="20">商品名称</td>
            <td width="80">市场价</td>
            <td width="80">折扣</td>
            <td width="80">数量</td>
          <tr bgcolor="#FFFFFF">
            <td height="20"><?php echo $row['spc']?></td>
            <td height="20"><?php echo $row['total']?></td>
            <td height="20">0</td>
            <?php
              $arr=array();
              $arr=preg_split("/\@/",$row['slc'],-1);
              $j=0;
              for($i=0;$i<count($arr);$i++){
                $j +=(int)$arr[$i];
              }
            ?>
            <td height="20"><?php echo $j;?></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="20" colspan="4"> 总计费用:<?php echo $row['total']?> </td>
          </tr>
        </table></td>
    </tr>
  </table>
  <table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="82" height="20">下单人：</td>
      <td colspan="3"><?php echo $row['xiadanren']?></td>
    </tr>
    <tr>
      <td height="20">收货人：</td>
      <td height="20" colspan="3"><?php echo $row['shouhuoren']?></td>
    </tr>
    <tr>
      <td height="20">收货人地址：</td>
      <td height="20" colspan="3"><?php echo $row['address']?></td>
    </tr>
    <tr>
      <td height="20">邮&nbsp;&nbsp;编：</td>
      <td width="136" height="20"><?php echo $row['youbian']?></td>
      <td width="79">电&nbsp;&nbsp;话：</td>
      <td width="163"><?php echo $row['tel']?></td>
    </tr>
    <tr>
      <td height="20">E-mail:</td>
      <td height="20"><?php echo $row['email']?></td>
      <td height="20">送货方式：</td>
      <td height="20"><?php echo $row['shff']?></td>
    </tr>
  </table>
</div>
<div id="footer">
  <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div>
</body>
</html>