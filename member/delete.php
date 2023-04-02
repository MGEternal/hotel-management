<?php
    require("../include/header.php");
    $mem_id=$_GET['mem_id'];
    $sql="delete from member where mem_id ='".$mem_id."'";
    $res =mysqli_query($conn,$sql);

    header("location: showmember.php");
?>