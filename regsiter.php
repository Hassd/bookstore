<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>ͼƬ�̳���ҳ</title>
<link rel="stylesheet" type="text/css" href="css/regsiter.css" />
</head>
<body>
<script language="javascript">
function zczy(fom){
     var qrmm=fom.qrmm.value;
	var dlmm=fom.dlmm.value;
	var yxdz=fom.xydz.value;
	var dlmmyz=/^[0-9a-zA-Z][0-9a-zA-Z]{0,16}$/;
	var yxdzyz=/^(?:\w+\.?)*\w+@(?:\w+\.)+\w+$/;
	if(fom.yhm.value==''){
		alert('�������û���');
		fom.yhm.select();
		return false;
		}
	if(fom.dlmm.value==''){
		alert('�������¼����');
		fom.dlmm.select();
		return false;
		}
	if(!dlmmyz.test(dlmm)){
		alert('������0-9��a-z��A-Z���ҳ���Ϊ16');
		fom.dlmm.select();
		return false;
				   }
	if(fom.qrmm.value==''){
		alert('������ȷ������');
		fom.qrmm.select();
		return false;
		}
	if(qrmm!=dlmm){
		alert('���벻һ��');
		return false;
		}
	
	if(fom.lxdh.value==''){
		alert('��������ϵ�绰');
		fom.lxdh.select();
		return false;
		}
	if(fom.xydz.value==''){
		alert('�����������ַ');
		fom.xydz.select();
		return false;
		}
	if(!yxdzyz.test(yxdz)){
		alert('��������Ч�������ַ');
		fom.xydz.select();
		return false;
		}
	if(fom.yhdz.value==''){
		alert('�������û���ַ');
		fom.yhdz.select();
		return false;
		}
	if(fom.yzm.value==''){
		alert('��������֤��');
		fom.yzm.select();
		return false;
		}
	
	}
</script>


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
 
<form id="zhuce" action="zhuce.php" method="post" style="background:url(images/bg.gif) no-repeat;" onsubmit="return zczy(this)">
     <h1>����ע��</h1>
      <ul>
        <li><a href="#">1.��дע����Ϣ</a></li>
        <li><a href="#">2.ע��ɹ�</a></li>
         
  </ul>
 <p style="font-size:12px; text-align:right; margin-right:100px;">����<font style=" color:#F00;">*</font>Ϊ������</p>
    
    <table width="571" border="0" id="table2" >
      <tr>
        <td width="80" height="49"><font color="#FF0000">*</font>�� �� ����</td>
        <td width="166"><input name="yhm" type="text"  /></td>
        <td width="321" style="color:#8ec657; text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />����д�����õ�Emai��ַ���ֻ����� ����������</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>��¼���룺</td>
        <td><input name="dlmm" type="password" /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />6-20λӢ����ĸ�������ֽ�������׼ǵ�Ӣ���������</font></td>
      </tr>
      <tr>
        <td height="61"><font color="#FF0000">*</font>ȷ�����룺</td>
        <td><input name="qrmm" type="password"  /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />��������������һ��</font></td>
      </tr>
      
     <tr>
        <td height="49">��ϵ�绰��</td>
        <td><input name="lxdh" type="text" /></td>
        <td  style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />����ȷ��д</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>�����ַ��</td>
        <td><input name="xydz" type="text"  /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />�������ʵ����ȷ��������õĵ�������</font></td>
      </tr>
      <tr>
      <td height="49">�û���ַ:</td>
      <td><input type="text" name="yhdz" /></td>
      <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />��д�������������ֵ������ƺš�</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>�� ֤ �룺</td>
        <td><input name="yzm" type="text" /></td>
        <td style="text-align:left;"><img src="admin/yzm.php" /></td>
      </tr>
      <tr>
        <td height="55" width="80"></td>
        <td> 
          <input type="submit" name="ok" id="ok" value="" style="background:url(images/bottom.gif); width:114px; height:51px; border:0px;" />
         </td>
         <td></td>
      </tr>
    </table>
    </form>

</div>
<div id="footer">
  <p>��������Ϣ���񱸰���ţ���ICP��06003045�� ����֧�֣��ִ����������� </p>
<p>Copyright @2012-2014,All Rights Reserved  ��ICP֤041189��</p>
</div></body>
</html>
