<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ﳵ</title>
<link rel="stylesheet" type="text/css" href="css/dingdan.css" />
</head>
       <script language="javascript">
		   function chkinput(form){
			   if(form.name.value==""){
				  alert("�������ջ�������!");
				  form.name.select();
				  return(false);
				}
				if(form.dz.value==""){
				  alert("�������ջ��˵�ַ!");
				  form.dz.select();
				  return(false);
				}
				if(form.yb.value==""){
				  alert("�������ջ����ʱ�!");
				  form.yb.select();
				  return(false);
				}
				if(form.tel.value==""){
				  alert("�������ջ�����ϵ�绰!");
				  form.tel.select();
				  return(false);
				}
				if(form.email.value==""){
				  alert("�������ջ���E-mail��ַ!");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0){
				    alert("�ջ���E-mail��ַ��ʽ�������!");
				    form.email.select();
				    return(false);
				 }
				return(true);
			 }
		 </script>
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
<img src="images/dingd.jpg"  />

<div id="content">
  <div id="dingdan">
    <h3 style="color:#FFF; font-size:15px;">����д�ջ�����Ϣ</h3>

    <form action="adddingdan.php?"  method="post"    name="form1">
      <table width="261" border="0" bordercolor="#FF9900" id="tianxie" cellspacing="0" cellpadding="0" >
        <tr>
          <td width="88" height="35"><p>�ջ��������� </p></td>
          <td width="166"><input  name="name" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td width="88" height="35"><p>�ջ����Ա� </p></td>
          <td width="166"><input type="radio" name="sex" value="Ů"  checked="checked"/>Ů<input type="radio" name="sex" value="��" />��</td>
        </tr>
                <tr>
          <td height="34">�ջ��˵�ַ��</td>
          <td><input name="dz" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">  </td>
        </tr>
        <tr>
          <td height="34"><p>�� �ࣺ</p></td>
          <td><input name="yb" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p>��ϵ�绰��</p></td>
          <td><input name="tel" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p> �����ַ��</p></td>
          <td><input name="email" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p> �µ���������</p></td>
          <td><input name="xm" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p>�ͻ���ʽ:</p></td>
          <td><select name="shff">
            <option selected="selected">��ͨ���</option>
            <option>ƽ��</option>
            <option>�ؿ�ר��</option>
            <option>Բͨ</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2"> <div align="center">
            <input name="ok" type="submit" class="buttoncss" value="�ύ����">      
            <input name="input" type="reset" value="���ö���" />
          </div></td>
        </tr>
      </table>
    </form>
     </div>
</div>
<div id="footer">
  <p>��������Ϣ���񱸰���ţ���ICP��06001111�� ����֧�֣������ϵ</p>
<p>Copyright @2012-2019,All Rights Reserved  ��ICP֤041189��</p>
</div>

</body>
</html>
