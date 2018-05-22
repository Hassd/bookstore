<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="css/yuding.css" />
<style>
  #fenye samp,#fenye a{display:block;float: left;margin: 0 5px;}
</style>
</head>
<body>
<div id="header">
<?php
 include("include/header.php");
?>
</div>
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
  	if(isset($_GET['typeid']))
    	$typeid=$_GET['typeid'];
	
	//当前页数
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else
		$page=1;
	
	
	
	//查询
    $query="select * from tb_book where typeid='$typeid'";
    $result=mysqli_query($link,$query);
	
	//总记录数
	$num=mysqli_num_rows($result);
	
	//当前页面显示纪录
	$pagesize=3;
	
	//总页数
	$total=$num/$pagesize;
	$total=ceil($total);
	
	//当前页查询
	$qwe=($page-1)*$pagesize;
	$query1="select * from tb_book where typeid='$typeid' limit $qwe,$pagesize";
    $result1=mysqli_query($link,$query1);
	//循环显示
    while($row=mysqli_fetch_array($result1)){
  ?>   
    <div id="r1">
      <div id="rleft"><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"><img src="admin/<?php echo $row['photo']?>"  width="150px" height="150px" /></a></div>
      <div id="rright">
      <h4><?php echo $row['bookname']?></h4><p> <a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>">
	  <?php 
	  	if(strlen($row['introduction'])>200){				//strlen()字符串总数
			echo substr($row['introduction'],0,200)."...";	//substr()截取字符串
		}else{
			echo $row['introduction'];
		}
	  	
	  ?>　
      </a></p>
      <p class="rp"><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>">现价<span class="xianjia"><?php echo $row['vipprice']?></span>原价<span class="yuanjia"><?php echo $row['bookprice']?></span> 折扣：<span class="zheko"><?php echo round(($row['vipprice']/$row['bookprice'])*10)?> </span></a></p>
      <img src="images/goumia.png" /><img src="images/shoucang.png" /></div>
    </div>
    <?php
    }

    ?>

  
  
    <div id="fenye">
      <p style="width: 750px;text-align: center;">
    <samp>本站共有<?php echo $num?>条记录&nbsp;每页显示 <?php echo $pagesize?> 条 </samp>
    <a style="" href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo 1?>">第一页</a>
    
    <a href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo $page-1?>" 
    	style="display:<?php if($page>1){echo 'block';}else{echo 'none';}; ?>">上一页</a> 
        
    <a href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo $page+1?>"
   		style="display:<?php if($page>$total-1){echo 'none';}else{echo 'block';}; ?>">下一页 </a>
    
    <a style="" href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo $total?>">尾页</a>&nbsp;
    
    <samp>第&nbsp;<?php echo $page?>&nbsp;页/共&nbsp;<?php echo $total?>&nbsp;页</samp>
  
  </p>
    
    </div>
  </div>
</div>
<div id="footer">
<p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
<p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>
</body>
</html>
