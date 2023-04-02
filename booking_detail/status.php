<?php
session_start();
include("../include/connect.php");
$booking_id=$_GET['booking_id'];
$sql="SELECT * from booking_detail where booking_id='$booking_id'";
$res=mysqli_query($conn , $sql);
$row=mysqli_fetch_assoc($res);
$booking_id=$row['booking_id'];
$sql2="SELECT * from booking_detail where booking_id='$booking_id'";
$res2=mysqli_query($conn , $sql2);
$row2=mysqli_fetch_assoc($res2);

    $sql3="DELETE FROM booking_detail where booking_id='$booking_id'";
    $res3=mysqli_query($conn ,$sql3);
    $sql4="DELETE FROM booking where booking_id='$booking_id'";
    $res4=mysqli_query($conn ,$sql4);
    
   unset($_SESSION['booking_id']);
     
    echo "session=".$_SESSION['booking_id'];
  
    ?>
    <script language="javascript">
    alert("ทำรายการสำเร็จ");
   window.location='view_admin.php';
    </script>
    <?php


    
    