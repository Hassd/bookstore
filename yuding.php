<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼƬ�̳���ҳ</title>
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
      <h3><img src="images/left.gif" />���칫��</h3>
      <ul>
      <?php
        //�����������ݿ��ļ�
        include("include/conn.php");
		        
		//��ѯ
        $query="select * from tb_gonggao";
        $result=mysqli_query($link,$query);
        //ѭ����ʾ
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
	
	//��ǰҳ��
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else
		$page=1;
	
	
	
	//��ѯ
    $query="select * from tb_book where typeid='$typeid'";
    $result=mysqli_query($link,$query);
	
	//�ܼ�¼��
	$num=mysqli_num_rows($result);
	
	//��ǰҳ����ʾ��¼
	$pagesize=3;
	
	//��ҳ��
	$total=$num/$pagesize;
	$total=ceil($total);
	
	//��ǰҳ��ѯ
	$qwe=($page-1)*$pagesize;
	$query1="select * from tb_book where typeid='$typeid' limit $qwe,$pagesize";
    $result1=mysqli_query($link,$query1);
	//ѭ����ʾ
    while($row=mysqli_fetch_array($result1)){
  ?>   
    <div id="r1">
      <div id="rleft"><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"><img src="admin/<?php echo $row['photo']?>"  width="150px" height="150px" /></a></div>
      <div id="rright">
      <h4><?php echo $row['bookname']?></h4><p> <a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>">
	  <?php 
	  	if(strlen($row['introduction'])>200){				//strlen()�ַ�������
			echo substr($row['introduction'],0,200)."...";	//substr()��ȡ�ַ���
		}else{
			echo $row['introduction'];
		}
	  	
	  ?>��
      </a></p>
      <p class="rp"><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>">�ּ�<span class="xianjia"><?php echo $row['vipprice']?></span>ԭ��<span class="yuanjia"><?php echo $row['bookprice']?></span> �ۿۣ�<span class="zheko"><?php echo round(($row['vipprice']/$row['bookprice'])*10)?> </span></a></p>
      <img src="images/goumia.png" /><img src="images/shoucang.png" /></div>
    </div>
    <?php
    }

    ?>

  
  
    <div id="fenye">
      <p style="width: 750px;text-align: center;">
    <samp>��վ����<?php echo $num?>����¼&nbsp;ÿҳ��ʾ <?php echo $pagesize?> �� </samp>
    <a style="" href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo 1?>">��һҳ</a>
    
    <a href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo $page-1?>" 
    	style="display:<?php if($page>1){echo 'block';}else{echo 'none';}; ?>">��һҳ</a> 
        
    <a href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo $page+1?>"
   		style="display:<?php if($page>$total-1){echo 'none';}else{echo 'block';}; ?>">��һҳ </a>
    
    <a style="" href="yuding.php?typeid=<?php echo $typeid?>&page=<?php echo $total?>">βҳ</a>&nbsp;
    
    <samp>��&nbsp;<?php echo $page?>&nbsp;ҳ/��&nbsp;<?php echo $total?>&nbsp;ҳ</samp>
  
  </p>
    
    </div>
  </div>
</div>
<div id="footer">
<p>��������Ϣ���񱸰���ţ���ICP��06001111�� ����֧�֣������ϵ</p>
<p>Copyright @2012-2019,All Rights Reserved  ��ICP֤041189��</p>
</div>
</body>
</html>
