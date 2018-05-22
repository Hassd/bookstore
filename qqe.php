<?php
    include("include/conn.php");
    $query="delete from tb_dingdan where userid=0";
    $result=mysqli_query($link,$query);
?>