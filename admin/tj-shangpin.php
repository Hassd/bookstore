<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����Ʒ</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function sjyz(fom){
	if(fom.name.value==''){
		alert("������ͼ������");
		fom.name.select();
		return false;
		}
	if(fom.sh.value==''){
		alert("���������");
		fom.sh.select();
		return false;
		}
	if(fom.zz.value==''){
		alert("����������");
		fom.zz.select();
		return false;
		}
	if(fom.cbs.value==''){
		alert("�����������");
		fom.cbs.select();
		return false;
		}
	if(fom.jg.value==''){
		alert("������ͼ��۸�");
		fom.jg.select();
		return false;
		}
	if(fom.zk.value==''){
		alert("�������ۿ�");
		fom.zk.select();
		return false;
		}
	if(fom.file.value==''){
		alert("������ͼƬ");
		fom.tp.select();
		return false;
		}
	if(fom.jj.value==''){
		alert("��������");
		fom.jj.select();
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
  <p style="background:#628e37; padding-left:10px; color:#FFF;">����ǰ��λ�ã���Ʒ�����������Ʒ</p>
  <form action="add-shangpin.php" method="post" onsubmit="return sjyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>ͼ������:</div></td>
              <td  bgcolor="#FFFFFF"><input name="name" type="text" id="name" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>���:</div></td>
              <td  bgcolor="#FFFFFF"><input name="sh" type="text" id="sh" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>ͼ������:</div></td>
              <td  bgcolor="#FFFFFF"><select name="lx" style="margin-left:10px;">
              <?php
                  include"include/conn.php";
                  $query1="select * from tb_type";
                  $result1=mysqli_query($link,$query1);
                  while($row1=mysqli_fetch_array($result1)){
                    echo "<option value=".$row1['typeid'].">".$row1['typename']."</option>";
                  }
                ?>
                </select>
                <!-- <option value="2">2</option>
        <option value="3">3</option>
         <option value="4">4</option>--></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>����:</div></td>
              <td  bgcolor="#FFFFFF"><input name="zz" type="text" id="zz" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>������:</div></td>
              <td><input name="cbs" type="text" id="cbs" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>����ʱ��:</div></td>
              <td><select name="nian" style="margin-left:10px;">
                  <?php
                    for($i=1995;$i<2019;$i++){
                      echo "<option>$i</option>";
                    }
                  ?>
                </select>
                ��
                <select name="yue">
                  <?php
                    for($i=1;$i<13;$i++){
                      echo "<option>$i</option>";
                    }
                  ?>
                </select>
                ��
                <select name="ri">
                  <?php
                    for($i=1;$i<32;$i++){
                      echo "<option>$i</option>";
                    }
                  ?>
                </select>
                �� </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ��۸�:</div></td>
              <td><input name="jg" type="text" id="jg" />
                <font color="#FF0000">Ԫ</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>�ۿ�:</div></td>
              <td><input name="zk" type="text" id="zk" />
                <font style="color:#F00">��:����7.5���Ǵ�7.5��</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ��ͼƬ:</div></td>
              <td><input name="file" type="file" id="tp" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ����:</div></td>
              <td><textarea name="jj" cols="30" rows="5" style="margin-left:10px;" ></textarea></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>�Ƿ��Ƽ�:</div></td>
              <td><input name="sftj" type="radio" value="1`" checked="checked"/>
                ��
                <input name="sftj" type="radio" value="0" />
                ��</td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ��Ԥ��:</div></td>
              <td><input name="newbook" type="radio" value="1`" checked="checked"/>
                ��
                <input name="newbook" type="radio" value="0" />
                ��</td>
            </tr>
            <tr style="text-align:center;">
              <td colspan="2" bgcolor="#FFFFFF";><input type="submit" name="ok"  value="��&nbsp;��" style=" margin-right:10px;"/>
                <input type="reset"  value="��&nbsp;��"/></td>
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
