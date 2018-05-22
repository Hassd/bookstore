<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看商品</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
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
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：类别管理－＞编辑类别</p>
 
  <form action="all-del-gonggao.php" method="get" >
    <span style="text-align:right; padding-right:10px;">
    
    </span>
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
				<tr>
        <td width="50" height="25" bgcolor="#FFFFFF"><div align="center">复选</div></td>
        <td width="520" bgcolor="#FFFFFF"><div align="center">广告标题</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">操作</div></td>
      </tr>
	<?php
	include"include/conn.php";
	$query="select * from tb_gonggao";
	$result=mysqli_query($link,$query);
	//总记录
	$num=mysqli_num_rows($result);
	//每页显示记录数
	$pagesize=13;
	//总页数
	if($num==0)
	{
		echo "暂无图书。";	
	}
	else
	{
		$total=ceil($num/$pagesize);//返回不小于 x 的下一个整数，x 如果有小数部分则进一位。ceil() 返回的类型仍然是 float，因为 float 值的范围通常比 integer 要大。
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
			$start=($page-1)*$pagesize;
		}
		else
		{
			$page=1;
			$start=0;
		}
	$query="select * from tb_gonggao limit $start,$pagesize";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_array($result))
	{
    ?>
			<tr>
				<td bgcolor="#FFFFFF" style="text-align:center;">
					<input type="checkbox" name="<?php echo $row['id']; ?>" value="1" />
				</td>
				<td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['title'];?></td>
	

				<td bgcolor="#FFFFFF" style="text-align:center;">
					<a href= "xg-gonggao.php?id=<?php echo $row['id']; ?>">查看</a>&nbsp;
					<a href= "del-gonggao.php?id=<?php echo $row['id']; ?>">删除</a>
				</td>
			</tr>
       <?php
	   }	}?>  
          </table></td>
      </tr>
     <td><table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td  style="text-align:left; padding-right:10px;" colspan="3" > 
	<input type="submit" value="删除选择项" class="buttoncss" style="margin-right:255px;" >

		 </td>   <td  style="text-align:right; padding-right:10px;" colspan="5"> 
	  <?php
		echo "共".$num."条&nbsp;";
		echo "每页".$pagesize."条&nbsp;";
		echo "第".$page."页/共".$total."页&nbsp;";
		if($page>=1 && $total>1){
		echo "<a href=?page=1>第一页&nbsp;</a>";
		}
		if($page>1 && $total>1){
		echo "<a href=?page=".($page-1).">上一页&nbsp;</a>";
		}
		if($page>=1 && $total>$page){
		echo "<a href=?page=".($page+1).">下一页&nbsp;</a>";
		}
		if($page>=1 && $total>1){
		echo "<a href=?page=".$total.">尾页</a>";
		}
	?>
	  
      
		 </td>
  </tr>
</table></td>
    </table>
   
 
  <p style=" text-align:right; margin-right:5px;">  

</p>
  </form></div>
  <div id="footer">
  <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div></body>

</html>
