<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>填加商品</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function sjyz(fom){
	if(fom.name.value==''){
		alert("请输入图书名称");
		fom.name.select();
		return false;
		}
	if(fom.sh.value==''){
		alert("请输入书号");
		fom.sh.select();
		return false;
		}
	if(fom.zz.value==''){
		alert("请输入作者");
		fom.zz.select();
		return false;
		}
	if(fom.cbs.value==''){
		alert("请输入出版社");
		fom.cbs.select();
		return false;
		}
	if(fom.jg.value==''){
		alert("请输入图书价格");
		fom.jg.select();
		return false;
		}
	if(fom.zk.value==''){
		alert("请输入折扣");
		fom.zk.select();
		return false;
		}
	if(fom.file.value==''){
		alert("请输入图片");
		fom.tp.select();
		return false;
		}
	if(fom.jj.value==''){
		alert("请输入简介");
		fom.jj.select();
		return false;
		}
	}
	
</script>
<body>
<div id="header">
  <h1><img src="images/logo.gif" />天天书屋后台管理系统</h1>
</div>

<div id="left">
 <?php
  	include("include/nav-left.html");
  ?>
</div>
<div id="right" >
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞填加商品</p>
  <form action="add-shangpin.php" method="post" onsubmit="return sjyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>图书名称:</div></td>
              <td  bgcolor="#FFFFFF"><input name="name" type="text" id="name" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>书号:</div></td>
              <td  bgcolor="#FFFFFF"><input name="sh" type="text" id="sh" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>图书类型:</div></td>
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
              <td  bgcolor="#FFFFFF"><div>作者:</div></td>
              <td  bgcolor="#FFFFFF"><input name="zz" type="text" id="zz" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>出版社:</div></td>
              <td><input name="cbs" type="text" id="cbs" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>出版时间:</div></td>
              <td><select name="nian" style="margin-left:10px;">
                  <?php
                    for($i=1995;$i<2019;$i++){
                      echo "<option>$i</option>";
                    }
                  ?>
                </select>
                年
                <select name="yue">
                  <?php
                    for($i=1;$i<13;$i++){
                      echo "<option>$i</option>";
                    }
                  ?>
                </select>
                月
                <select name="ri">
                  <?php
                    for($i=1;$i<32;$i++){
                      echo "<option>$i</option>";
                    }
                  ?>
                </select>
                日 </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书价格:</div></td>
              <td><input name="jg" type="text" id="jg" />
                <font color="#FF0000">元</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>折扣:</div></td>
              <td><input name="zk" type="text" id="zk" />
                <font style="color:#F00">例:如是7.5就是打7.5折</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书图片:</div></td>
              <td><input name="file" type="file" id="tp" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书简介:</div></td>
              <td><textarea name="jj" cols="30" rows="5" style="margin-left:10px;" ></textarea></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>是否推荐:</div></td>
              <td><input name="sftj" type="radio" value="1`" checked="checked"/>
                是
                <input name="sftj" type="radio" value="0" />
                否</td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书预售:</div></td>
              <td><input name="newbook" type="radio" value="1`" checked="checked"/>
                是
                <input name="newbook" type="radio" value="0" />
                否</td>
            </tr>
            <tr style="text-align:center;">
              <td colspan="2" bgcolor="#FFFFFF";><input type="submit" name="ok"  value="提&nbsp;交" style=" margin-right:10px;"/>
                <input type="reset"  value="重&nbsp;置"/></td>
            </tr>
          </table></td>
      </tr>
    </table>
  </form>
</div>
<div id="footer">
 <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div>
</body>
</html>
