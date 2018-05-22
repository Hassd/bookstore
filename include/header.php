  <div id="login">
  <?php
  	session_start();
	if(isset($_SESSION['userid'])){
	echo '<p><span class="p1">欢迎'.$_SESSION['username'].'来天天书屋！<a href="tuichu.php"><img  src="images/login1.gif" />退出！</a></span><span class="p2"> <a href="gouwuche.php"><img  src="images/login2.gif" />购物车</a> <a href="wodedingdan.php"><img  src="images/login2.gif" />我的订单</a></span></a> </p>';
	}else{
	echo ' <p><span class="p1">欢迎来天天书屋！<a href="login.php"><img  src="images/login1.gif" />请登录</a> <a href="regsiter.html"><img  src="images/login1.gif" />免费注册</a></span><span class="p2"> <a href="gouwuche.php"><img  src="images/login2.gif" />购物车</a> <a href="wodedingdan.php"><img  src="images/login2.gif" />我的订单</a></span></a> </p>';	
	}
  ?>
    
  </div>
  <div id="logo">
    <h1><img src="images/logo.gif" />各种好看的图书尽在天天书屋</h1>
	
  </div>
  <form action="search.php" method="get" style="background-color:#0C6; width:300px; height:30px; margin:20px 30px 0px 0px; padding-top:10px; float:right; padding-left:10px;">
    <select name="select" >
    	<option value="bookname">书名</option>
        <option value="author">作者</option>
    </select>
    <input name="text" type="text"  />
    <input type="submit" id="搜索" value="搜索" />
  </form>