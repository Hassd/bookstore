  <div id="login">
  <?php
  	session_start();
	if(isset($_SESSION['userid'])){
	echo '<p><span class="p1">��ӭ'.$_SESSION['username'].'���������ݣ�<a href="tuichu.php"><img  src="images/login1.gif" />�˳���</a></span><span class="p2"> <a href="gouwuche.php"><img  src="images/login2.gif" />���ﳵ</a> <a href="wodedingdan.php"><img  src="images/login2.gif" />�ҵĶ���</a></span></a> </p>';
	}else{
	echo ' <p><span class="p1">��ӭ���������ݣ�<a href="login.php"><img  src="images/login1.gif" />���¼</a> <a href="regsiter.html"><img  src="images/login1.gif" />���ע��</a></span><span class="p2"> <a href="gouwuche.php"><img  src="images/login2.gif" />���ﳵ</a> <a href="wodedingdan.php"><img  src="images/login2.gif" />�ҵĶ���</a></span></a> </p>';	
	}
  ?>
    
  </div>
  <div id="logo">
    <h1><img src="images/logo.gif" />���ֺÿ���ͼ�龡����������</h1>
	
  </div>
  <form action="search.php" method="get" style="background-color:#0C6; width:300px; height:30px; margin:20px 30px 0px 0px; padding-top:10px; float:right; padding-left:10px;">
    <select name="select" >
    	<option value="bookname">����</option>
        <option value="author">����</option>
    </select>
    <input name="text" type="text"  />
    <input type="submit" id="����" value="����" />
  </form>