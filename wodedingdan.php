<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼƬ�̳���ҳ</title>
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
<h2 style="width: 1000px;height: 50px;font-size: 30px;text-align: center;line-height: 50px;color:#006600">�ҵĶ���</h2>
<div id="content" style="padding-top: 20px;"> 
  <form action="xiugai.php" method="get">
    <table width="1000" border="1" bordercolor='#006600' bgcolor="#FFFFFF"  cellspacing="0"  >
      <tr style="height: 80px;font-size: 16px">
        <th width="250">��Ʒ����</th>
        <th width="100">�ջ�������</th>
        <th width="150">�ջ��˵绰</th>
        <th width="100">�������</th>
        <th width="100">�۸�</th>
        <th width="200">��ַ</th>
        <th width="100">����</th>
      </tr>
      
    <?php
    //�����������ݿ��ļ�
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
          <td style="border-top:1px #F60 solid;">��<?php echo $row['total']?></td>
          <td style="border-top:1px #F60 solid;"><?php echo $row['address']?></td>
          <td style="border-top:1px #F60 solid; border-right:0px">
            <a href="dldiangdan.php?orderid=<?php echo $row['orderid']?>&ty=0">ɾ������</a>
          </td>
        </tr>
    
    <?php
        }
      }else{
        echo '<script>alert("����Ϊ�գ�");</script>';
			  echo '<script>location.href="index.php";</script>';
      }

    }else{
      echo '<script>alert("����û�е�¼�����¼��");</script>';
			echo '<script>location.href="login.php";</script>';
    }
		
	  ?>
    </table>
    <div id="ft">
      <p><a href="dldiangdan.php?ty=1">ɾ�����ж���</a></p>
    </div>
  </form>
</div>
</body>
</html>
