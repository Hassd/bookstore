<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴��ϸ����</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/logo.gif" />�������ݺ�̨����ϵͳ </h1>
</div>
<div id="left">
<?php
  	include("include/nav-left.html");
?>
</div>
</div>
<div id="right" >

  <p style="background:#628e37; padding-left:10px; color:#FFF;">����ǰ��λ�ã������������鿴��ϸ����</p>

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
        <td width="156" height="20">�����ţ�<?php echo $row['orderid']?></td>
        <td width="320" height="20">&nbsp;&nbsp;
          <input name="zt" type="radio" value="���տ�" <?php if($row['zt']=='���տ�'){echo 'checked="checked"';}?>/>
          &nbsp;���տ�&nbsp;&nbsp;
          <input name="zt" type="radio" value="�ѷ���" <?php if($row['zt']=='�ѷ���'){echo 'checked="checked"';}?>/>
          &nbsp;�ѷ���&nbsp;&nbsp;
          <input name="zt" type="radio" value="���ջ�" <?php if($row['zt']=='���ջ�'){echo 'checked="checked"';}?>/>
          &nbsp;���ջ�</td>
        <td width="124"><input name="ok"  value="�޸�" type="submit" style="width:55px; height:20px;" /></td>
      </tr>
    </form>
    <tr>
      <td width="156" height="20">��Ʒ�б�(����)��</td>
    </tr>
  </table>
  <table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#666666"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr bgcolor="#628e37" style="color:#FFF">
            <td width="153" height="20">��Ʒ����</td>
            <td width="80">�г���</td>
            <td width="80">�ۿ�</td>
            <td width="80">����</td>
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
            <td height="20" colspan="4"> �ܼƷ���:<?php echo $row['total']?> </td>
          </tr>
        </table></td>
    </tr>
  </table>
  <table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="82" height="20">�µ��ˣ�</td>
      <td colspan="3"><?php echo $row['xiadanren']?></td>
    </tr>
    <tr>
      <td height="20">�ջ��ˣ�</td>
      <td height="20" colspan="3"><?php echo $row['shouhuoren']?></td>
    </tr>
    <tr>
      <td height="20">�ջ��˵�ַ��</td>
      <td height="20" colspan="3"><?php echo $row['address']?></td>
    </tr>
    <tr>
      <td height="20">��&nbsp;&nbsp;�ࣺ</td>
      <td width="136" height="20"><?php echo $row['youbian']?></td>
      <td width="79">��&nbsp;&nbsp;����</td>
      <td width="163"><?php echo $row['tel']?></td>
    </tr>
    <tr>
      <td height="20">E-mail:</td>
      <td height="20"><?php echo $row['email']?></td>
      <td height="20">�ͻ���ʽ��</td>
      <td height="20"><?php echo $row['shff']?></td>
    </tr>
  </table>
</div>
<div id="footer">
  <p>��ַ�������г�����***·***�� ��Ȩ���У����������������޹�˾</p>
  <p>��������Ϣ���񱸰���ţ���ICP��06001111��  ����֧�֣��������Ϣ����ϵ</p>
</div>
</body>
</html>