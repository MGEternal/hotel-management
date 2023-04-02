<?php
    require("../include/header.php");
    $room_id=$_GET['room_id'];
    $sql="delete from room where room_id ='".$room_id."'";
    $res =mysqli_query($conn,$sql);

    header("location: showroom.php");
?>