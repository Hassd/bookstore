<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴��Ʒ</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
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
  <p style="background:#628e37; padding-left:10px; color:#FFF;">����ǰ��λ�ã���Ʒ�������鿴��Ʒ</p>
 
  <form action="all-del-book.php" method="get" >
    <span style="text-align:right; padding-right:10px;">
    
    </span>
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="33"  bgcolor="#FFFFFF"><div>��ѡ</div></td>
              <td width="99"  bgcolor="#FFFFFF"><div>ͼ������</div></td>
              <td width="61"  bgcolor="#FFFFFF"><div>����</div></td>
              <td width="115"  bgcolor="#FFFFFF"><div>������</div></td>
              <td width="59"  bgcolor="#FFFFFF"><div>�۸�</div></td>
              <td width="77"  bgcolor="#FFFFFF"><div>�Ƿ��Ƽ�</div></td>
               <td width="77"  bgcolor="#FFFFFF"><div>ͼ��Ԥ��</div></td>
              <td width="126"  bgcolor="#FFFFFF"><div>����</div></td>
            </tr>
	<?php
	include"include/conn.php";
	$query="select * from tb_book";
	$result=mysqli_query($link,$query);
	//�ܼ�¼
	$num=mysqli_num_rows($result);
	//ÿҳ��ʾ��¼��
	$pagesize=13;
	//��ҳ��
	if($num==0)
	{
		echo "����ͼ�顣";	
	}
	else
	{
		$total=ceil($num/$pagesize);//���ز�С�� x ����һ��������x �����С���������һλ��ceil() ���ص�������Ȼ�� float����Ϊ float ֵ�ķ�Χͨ���� integer Ҫ��
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
	$query="select * from tb_book limit $start,$pagesize";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_array($result))
	{
    ?>
            <tr>
              <td  bgcolor="#FFFFFF" style="text-align:center;"><input type="checkbox" name="<?php echo $row['bookid']; ?>" value="1" /></td>
              <td  bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['bookname']; ?> </td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['author']; ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['pubhouse']; ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['bookprice']; ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['recommend']; ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['newbook']; ?></td>
              <td bgcolor="#FFFFFF" style="text-align:center;">
								<a href="xg-shangpin.php?id=<?php echo $row['bookid']; ?>">�޸�</a>&nbsp;
								<a href= "del-book.php?id=<?php echo $row['bookid']; ?>">ɾ��</a></td>
            </tr>
       <?php
	   }	}?>  
          </table></td>
      </tr>
     <td><table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td  style="text-align:left; padding-right:10px;" colspan="3" > 
	<input type="submit" value="ɾ��ѡ����" class="buttoncss" style="margin-right:255px;" >

		 </td>   <td  style="text-align:right; padding-right:10px;" colspan="5"> 
	  <?php
		echo "��".$num."��&nbsp;";
		echo "ÿҳ".$pagesize."��&nbsp;";
		echo "��".$page."ҳ/��".$total."ҳ&nbsp;";
		if($page>=1 && $total>1){
		echo "<a href=?page=1>��һҳ&nbsp;</a>";
		}
		if($page>1 && $total>1){
		echo "<a href=?page=".($page-1).">��һҳ&nbsp;</a>";
		}
		if($page>=1 && $total>$page){
		echo "<a href=?page=".($page+1).">��һҳ&nbsp;</a>";
		}
		if($page>=1 && $total>1){
		echo "<a href=?page=".$total.">βҳ</a>";
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
  <p>��ַ�������г�����***·***�� ��Ȩ���У����������������޹�˾</p>
  <p>��������Ϣ���񱸰���ţ���ICP��06001111��  ����֧�֣��������Ϣ����ϵ</p>
</div></body>

</html>
