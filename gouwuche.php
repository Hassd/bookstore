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
<div id="content"> <img src="images/gouwuche.jpg"  />
  <form action="xiugai.php" method="get">
    <table width="1000" border="1" bordercolor='#006600' bgcolor="#FFFFFF"  cellspacing="0" >
      <tr >
        <th width="214" >商品名称</th>
        <th width="252">商品价格</th>
        <th width="261">商品数量</th>
        <th width="255">操作</th>
      </tr>
      
    <?php
    //引入连接数据库文件
    include("include/conn.php");

		
		if(isset($_SESSION['shuzhu'])&&!empty($_SESSION['shuzhu'])){
			$arr=$_SESSION['shuzhu'];
		}else{
			$arr='';
    }
    $zhong=0;
	  if(!is_array($arr)&&count($arr)){
			echo '<script>alert("您还没有购物");</script>';
			echo '<script>location.href="index.php";</script>';
		}else{
			foreach( $arr as $a){
        $zhong =$zhong+$a['bookprice']*$a['booknum'];
        $bookid1=$a['bookid'];
        $num1=$a['booknum'];
        if(isset($_SESSION['userid'])){
          $userid=$_SESSION['userid'];
          $query="select * from tb_gwc where bookid='$bookid1' and userid='$userid'";
          $result=mysqli_query($link,$query);
          if(mysqli_num_rows($result)){

            $query1="update tb_gwc set booknum = $num1 where bookid='$bookid1' and userid='$userid' ";
            $result1=mysqli_query($link,$query1);
          }else{
            $query2="insert into tb_gwc (bookid,userid,booknum) values ('$bookid1','$userid','$num1')";
            $result2=mysqli_query($link,$query2);
          } 
        }   
	  ?>
      <tr>
        <td style="border-top:1px #F60 solid;"><p><img src="admin/<?php echo $a['photo']?>" width="44" height="59" onload="resizeImage(this)"/><a href="#"><?php echo $a['bookname']?></a></p></td>
        <td style="border-top:1px #F60 solid;">￥<?php echo $a['bookprice']?> </td>
        <td style="border-top:1px #F60 solid;"><input type="text" name="<?php echo $a['bookid']?>" id="textfield"  value="<?php echo $a['booknum']?>"/></td>
        <td style="border-top:1px #F60 solid; border-right:0px"><a href="qvxiao.php?bookid=<?php echo $a['bookid']?>&ty=0">取消商品</a></td>
      </tr>
      <?php
      	}
		  }
	  ?>
    </table>
    <div id="ft">
      <p><span class="p1">
        <input type="submit" value="修改商品数量" />
        &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="p1"><a href="qvxiao.php?ty=1">清空购物车</a> </span> <span class="p2" > 商品金额总计：￥<?php echo $zhong?></span></p>
    </div>
    <a href="dingdan.php"> <img src="images/jiesuan.jpg" class="i1"/> </a>
    <a href="index.php"> <img src="images/gouwu.jpg" class="i1"/> </a>
  </form>
</div>
</body>
</html>
