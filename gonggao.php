<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼƬ�̳���ҳ</title>
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
  //�����������ݿ��ļ�
  include("include/conn.php");
  //��ѯ
  $query="select * from tb_gonggao where id=$id";
  $result=mysqli_query($link,$query);
  //��ʾ
  $row=mysqli_fetch_array($result);
?>

<h1 style="color:red;width: 100%;text-align: center;"><?php echo $row['title'] ?></h1>
<p><?php echo $row['content'] ?></p>

</div>
<div id="footer">
  <p>��������Ϣ���񱸰���ţ���ICP��06001111�� ����֧�֣������ϵ</p>
  <p>Copyright @2012-2019,All Rights Reserved  ��ICP֤041189��</p>
</div>
</body>
</html>
