<?php
    require("../include/header.php");
    $news_id=$_GET['news_id'];
    $sql="delete from news where news_id ='".$news_id."'";
    $res=mysqli_query($conn,$sql);

    header("location: shownews.php");
        