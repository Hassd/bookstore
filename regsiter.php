<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>图片商城首页</title>
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
		alert('请输入用户名');
		fom.yhm.select();
		return false;
		}
	if(fom.dlmm.value==''){
		alert('请输入登录密码');
		fom.dlmm.select();
		return false;
		}
	if(!dlmmyz.test(dlmm)){
		alert('请输入0-9或a-z或A-Z并且长度为16');
		fom.dlmm.select();
		return false;
				   }
	if(fom.qrmm.value==''){
		alert('请输入确认密码');
		fom.qrmm.select();
		return false;
		}
	if(qrmm!=dlmm){
		alert('密码不一致');
		return false;
		}
	
	if(fom.lxdh.value==''){
		alert('请输入联系电话');
		fom.lxdh.select();
		return false;
		}
	if(fom.xydz.value==''){
		alert('请输入邮箱地址');
		fom.xydz.select();
		return false;
		}
	if(!yxdzyz.test(yxdz)){
		alert('请输入有效的邮箱地址');
		fom.xydz.select();
		return false;
		}
	if(fom.yhdz.value==''){
		alert('请输入用户地址');
		fom.yhdz.select();
		return false;
		}
	if(fom.yzm.value==''){
		alert('请输入验证码');
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
     <h1>天天注册</h1>
      <ul>
        <li><a href="#">1.填写注册信息</a></li>
        <li><a href="#">2.注册成功</a></li>
         
  </ul>
 <p style="font-size:12px; text-align:right; margin-right:100px;">以下<font style=" color:#F00;">*</font>为必填项</p>
    
    <table width="571" border="0" id="table2" >
      <tr>
        <td width="80" height="49"><font color="#FF0000">*</font>用 户 名：</td>
        <td width="166"><input name="yhm" type="text"  /></td>
        <td width="321" style="color:#8ec657; text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />请填写您常用的Emai地址或手机号码 方便您记忆</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>登录密码：</td>
        <td><input name="dlmm" type="password" /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />6-20位英文字母或者数字建议采用易记的英文数字组合</font></td>
      </tr>
      <tr>
        <td height="61"><font color="#FF0000">*</font>确认密码：</td>
        <td><input name="qrmm" type="password"  /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />必需与设置密码一致</font></td>
      </tr>
      
     <tr>
        <td height="49">联系电话：</td>
        <td><input name="lxdh" type="text" /></td>
        <td  style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />请正确填写</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>邮箱地址：</td>
        <td><input name="xydz" type="text"  /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />请务必真实，并确认是您最常用的电子邮箱</font></td>
      </tr>
      <tr>
      <td height="49">用户地址:</td>
      <td><input type="text" name="yhdz" /></td>
      <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="images/logintb.jpg" style="padding-right:5px;" />填写城市名、区、街道、门牌号。</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>验 证 码：</td>
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
  <p>互联网信息服务备案编号：冀ICP备06003045号 技术支持：现代教育技术部 </p>
<p>Copyright @2012-2014,All Rights Reserved  京ICP证041189号</p>
</div></body>
</html>
