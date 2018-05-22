<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>填加类别</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function lbyz(fom){
	if(fom.mc.value==''){
		alert('请输入类别名称');
		fom.mc.select();
		return false;
		}
	if(fom.ms.value==''){
		alert('请输入类别描述');
		fom.ms.select();
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
<?php
  include"include/conn.php";
  $typeid=$_GET['typeid'];
  $query="select * from tb_type where typeid=$typeid";
  $result=mysqli_query($link,$query);
  $row=mysqli_fetch_array($result);
?>
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞填加类别</p>
  <form action="ggg-type.php?typeid=<?php echo $row['typeid']?>" method="post" onsubmit="return lbyz(this)" >
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="103"  bgcolor="#FFFFFF"><div>类别名称:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><input type="text" value="<?php echo $row['typename']?>" name="mz" /></td>
            </tr> 
            <tr>
             <td width="103"  bgcolor="#FFFFFF"><div>类别描述:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><textarea name="ms" cols="" rows="" style=" margin-left:10px; width:350px; height:200px;"><?php echo $row['typedes']?></textarea></td>
            </tr>
             <tr>
              <td colspan="4"  bgcolor="#FFFFFF">
                <input type="submit" name="ok" value="添加" style="width:55px; height:30px;" />                
                <input type="reset"  value="重置"style="width:55px; height:30px;"  /><div></div>
            </td>
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
