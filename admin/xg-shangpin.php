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
	// if(fom.file.value==''){
	// 	alert("������ͼƬ");
	// 	fom.tp.select();
	// 	return false;
	// 	}
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
    include"include/conn.php";
    $bookid=$_GET['id'];
    $query="select * from tb_book where bookid='$bookid'";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_array($result);
    
  ?>
</div>
<div id="right" >
  <p style="background:#628e37; padding-left:10px; color:#FFF;">����ǰ��λ�ã���Ʒ�����������Ʒ</p>
  <form action="ggg-shangpin.php?bookid=<?php echo $row['bookid']?>" method="post" onsubmit="return sjyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>ͼ������:</div></td>
              <td  bgcolor="#FFFFFF"><input name="name" value="<?php echo $row['bookname']?>" type="text" id="name" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>���:</div></td>
              <td  bgcolor="#FFFFFF"><input name="sh" type="text" id="sh" value="<?php echo $row['isbn']?>"/></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>ͼ������:</div></td>
              <td  bgcolor="#FFFFFF">
                <select name="lx" style="margin-left:10px;">
                <?php
                  $query1="select * from tb_type";
                  $result1=mysqli_query($link,$query1);
                  while($row1=mysqli_fetch_array($result1)){
                    if($row1['typeid']==$row['typeid']){
                      echo "<option selected value=".$row1['typeid'].">".$row1['typename']."</option>";
                    }else{
                      echo "<option value=".$row1['typeid'].">".$row1['typename']."</option>";
                    }
                    
                  }
                ?>
                  
                </select>
                <!-- <option value="2">2</option>
        <option value="3">3</option>
         <option value="4">4</option>--></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>����:</div></td>
              <td  bgcolor="#FFFFFF"><input name="zz" type="text" value="<?php echo $row['author']?>" id="zz" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>������:</div></td>
              <td><input name="cbs" type="text" id="cbs" value="<?php echo $row['pubhouse']?>"/></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>����ʱ��:</div></td>
              <td><select name="nian" style="margin-left:10px;">
                  <?php 
                    $arr=array();
                    $arr=preg_split("/-/",$row['pubdate'],-1);
                    for($i=1995;$i<2019;$i++){
                      if($arr[0]==$i){
                        echo "<option selected>$i</option>";
                      }else{
                        echo "<option >$i</option>";
                      }
                    }
                  ?>
                </select>
                ��
                <select name="yue">
                  <?php 
                    for($i=1;$i<13;$i++){
                      if(isset($arr[1])){
                        if($arr[1]==$i){
                          echo "<option selected>$i</option>";
                        }
                      }else{
                        echo "<option>$i</option>";
                      }
                    }
                  ?>
                </select>
                ��
                <select name="ri">
                  <?php 
                    for($i=1;$i<31;$i++){
                      if(isset($arr[2])){
                        if($arr[2]==$i){
                          echo "<option selected>$i</option>";
                        }
                      }else{
                        echo "<option>$i</option>";
                      }
                    }
                  ?>
                </select>
                �� </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ��۸�:</div></td>
              <td><input name="jg" type="text" id="jg" value="<?php echo $row['bookprice']?>"/>
                <font color="#FF0000">Ԫ</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>�ۿ�:</div></td>
              <td><input name="zk" type="text" id="zk" value="<?php echo $row['vipprice']?>"/>
                <font style="color:#F00">��:����7.5���Ǵ�7.5��</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ��ͼƬ:</div></td>

              <td>
                <img src="<?php echo $row['photo']?>" while="25px" height="50px">
                <input name="file" type="file" id="tp"/>
              </td>

            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ����:</div></td>
              <td><textarea name="jj" cols="30" rows="5" style="margin-left:10px;" ><?php echo $row['introduction']?></textarea></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>�Ƿ��Ƽ�:</div></td>
              <td><input name="sftj" type="radio" value="1" <?php  if($row['recommend']==1){echo 'checked="checked"';} ?>/>
                ��
                <input name="sftj" type="radio" value="0" <?php  if($row['recommend']==0){echo 'checked="checked"';} ?>/>
                ��</td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>ͼ��Ԥ��:</div></td>
              <td><input name="newbook" type="radio" value="1" <?php  if($row['newbook']==1){echo 'checked="checked"';} ?>/>
                ��
                <input name="newbook" type="radio" value="0" <?php  if($row['newbook']==0){echo 'checked="checked"';} ?>/>
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
