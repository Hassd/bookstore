<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼƬ�̳���ҳ</title>
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
      <h3><img src="images/left.gif" />������ʾ</h3>
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
      $id=$_GET['id'];

      $query="select * from tb_book where bookid=$id";
      $result=mysqli_query($link,$query);
      $row=mysqli_fetch_array($result)

      ?>
    <h3><?php echo $row['bookname']?></h3>
    <div id="rleft"><img  src="admin/<?php echo $row['photo']?>" width="200px" height="200px"/></div>
    <div id="rright">
      <p class="p2">ԭ�ۣ�<span>��<?php echo $row['bookprice']?></span></p>
      <p class="p3">�ּۣ���<?php echo $row['vipprice']?> </p>
      <p class="p4">�� �ߣ�<span><?php echo $row['author']?></span>��</p>
      <p class="p5">�����磺<span><?php echo $row['pubhouse']?></span></p>
      <p>����ʱ�䣺<?php echo $row['isbn']?></p>
      <p>����������
      
      <form id="form1" name="form1" method="post" action="addgwc.php?id=<?php echo $row['bookid']?>">
        <input name="booknum" type="text"   width="50"  />
        ��</p>
      
        <input type="submit" value=""  style="background:url(images/images.jpg) no-repeat ; width:175px; height:40px;" />
      </form>
    </div>
    <div id="rfooter">
      <ul>
       
        <li><a href="#">���ݼ��</a></li>
        
      </ul>
      <p><?php echo $row['introduction']?></p>
    </div>
  </div>
</div>
<div id="footer">
  <p>��������Ϣ���񱸰���ţ���ICP��06001111�� ����֧�֣������ϵ</p>
  <p>Copyright @2012-2019,All Rights Reserved  ��ICP֤041189��</p>
</div>
</body>
</html>
