<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼƬ�̳���ҳ</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
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
<div id="content">
  <div id="left">
    <div id="subnav">
      <?php
        include("include/nav2.html");
      ?>
    </div>
    <div id="bottom">
      <h3><img src="images/left.gif" />���칫��</h3>
      <ul>
      <?php
        //�����������ݿ��ļ�
        include("include/conn.php");
        //��ѯ
        $query="select * from tb_gonggao limit 0,9";
        $result=mysqli_query($link,$query);
        //ѭ����ʾ
        while($row=mysqli_fetch_array($result)){

      ?>
        <li><a href="gonggao.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></li>
        <?php
        } 
       
       
        ?>
      </ul>
    </div>
  </div>
  <div id="con">
    <div id="banner">
      <script language="javascript" src="js/pptBox.js"></script>
      <script>
     var box =new PPTBox();
     box.width = 510; //���
     box.height = 314;//�߶�
     box.autoplayer = 3;//�Զ����ż��ʱ��

     //box.add({"url":"ͼƬ��ַ","title":"��������","href":"���ӵ�ַ"})
     box.add({"url":"images/js4.png","href":"","title":"������ʾ����1"})//urlΪ��ͼƬ hrefΪ��������ӵĵ�ַ
     box.add({"url":"images/js2.png","href":"","title":"������ʾ����2"})//urlΪ��ͼƬ hrefΪ��������ӵĵ�ַ
     box.add({"url":"images/js3.png","href":"","title":"������ʾ����3"})//urlΪ��ͼƬ hrefΪ��������ӵĵ�ַ
     box.add({"url":"images/js.png","href":"","title":"������ʾ����4"})//urlΪ��ͼƬ hrefΪ��������ӵĵ�ַ
     box.show();
    </script>
    </div>
    <div id="right">
    <h3><img src="images/right.gif" /><span>ͼ�鳩����</span></h3>
    <?php
    $query="select * from tb_book where recommend=1 and newbook=1 order by bookid desc limit 0,10 ";
    $result=mysqli_query($link,$query);
    //ѭ����ʾ
    $ew=1;
    while($row=mysqli_fetch_array($result)){
    
    ?>
      <p id="<?php if($ew==1){echo "rp";} ?>"><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"><img src="images/<?php echo $ew ?>.gif" /><?php echo $row['bookname']?> </a></p>
    <?php
    $ew++;
    }
    ?>
    </div>
    <div id="confooter">
      <h3><span class="hl"><img id="conimg" src="images/right5.gif" />�Ƽ�ͼ��</span><span class="hr">�����Ƽ�ͼ��>></span></h3>
      <ul>
        <?php
       
        //��ѯ
        $query="select * from tb_book where recommend=1 limit 0,9 ";
        $result=mysqli_query($link,$query);
        //ѭ����ʾ
        while($row=mysqli_fetch_array($result)){

        ?>
        <li><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"> <img src="admin/<?php echo $row['photo']?>"  width="50px" height="50px"  /></a>
          <h5><span>ͼ�����ƣ�</span><a href="tushuchangxiao.php?id=<?php echo $row['bookid']?>"><?php echo $row['bookname']?></a></h5>
          <p><?php echo $row['author']?></p>
          <p>�۸�<span><?php echo $row['bookprice']?></span></p>
        </li>
        <?php 
          } 
          //�ر����ݿ�
          mysqli_close($link);
        ?>
      </ul>
    </div>
  </div>
</div>
<div id="footer"> 
  <p>��������Ϣ���񱸰���ţ���ICP��06001111�� ����֧�֣������ϵ</p>
  <p>Copyright @2012-2019,All Rights Reserved  ��ICP֤041189��</p>
</div>

</body>
</html>
