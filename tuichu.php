<?php
session_start();
if(isset($_SESSION['userid'])){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	header("Location:index.php");
	session_destroy();
}else{
	header("Location:index.php");
}

?>