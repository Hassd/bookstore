<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function lbyz(fom){
	if(fom.mc.value==''){
		alert('�������������');
		fom.mc.select();
		return false;
		}
	if(fom.ms.value==''){
		alert('�������������');
		fom.ms.select();
		return false;
		}
	}
</script>
<body>
<div id="header">
  <h1><img src="images/logo.gif" />�������ݺ�̨����ϵͳ</h1>
</div>
<div id="left">
  <?php
  	include("include/nav-left.html");
  ?>
</div>
<div id="right" >
<?php
  include"include/conn.php";
  $typeid=$_GET['typeid'];
  $query="select * from tb_type where typeid=$typeid";
  $result=mysqli_query($link,$query);
  $row=mysqli_fetch_array($result);
?>
  <p style="background:#628e37; padding-left:10px; color:#FFF;">����ǰ��λ�ã���Ʒ������������</p>
  <form action="ggg-type.php?typeid=<?php echo $row['typeid']?>" method="post" onsubmit="return lbyz(this)" >
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="103"  bgcolor="#FFFFFF"><div>�������:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><input type="text" value="<?php echo $row['typename']?>" name="mz" /></td>
            </tr> 
            <tr>
             <td width="103"  bgcolor="#FFFFFF"><div>�������:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><textarea name="ms" cols="" rows="" style=" margin-left:10px; width:350px; height:200px;"><?php echo $row['typedes']?></textarea></td>
            </tr>
             <tr>
              <td colspan="4"  bgcolor="#FFFFFF">
                <input type="submit" name="ok" value="���" style="width:55px; height:30px;" />                
                <input type="reset"  value="����"style="width:55px; height:30px;"  /><div></div>
            </td>
            </tr>         
          </table></td>
      </tr>
    </table>
    
  </form>
</div>
<div id="footer">
 <p>��ַ�������г�����***·***�� ��Ȩ���У����������������޹�˾</p>
  <p>��������Ϣ���񱸰���ţ���ICP��06001111��  ����֧�֣��������Ϣ����ϵ</p>
</div>
</body>
</html>
