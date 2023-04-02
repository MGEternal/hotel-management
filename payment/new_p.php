<?php
include('../include/connect.php');
$payment_date=$_POST['payment_date'];
$bank_name=$_POST['bank_name'];
$id_tranfer=$_POST['id_tranfer'];
$payment_price=$_POST['payment_price'];
$booking_id=$_POST['booking_id'];
$mem_id=$mem_id_now;
$sql="INSERT INTO payment values(0,'$payment_date','$bank_name','$id_tranfer','$payment_price','$booking_id','$mem_id','รอการยืนยัน') ";
if($res=mysqli_query($conn , $sql)){
    $sql2="UPDATE booking_detail SET booking_status = 'ยืนยันแล้ว'";
    $res2=mysqli_query($conn , $sql2);
    unset($_SESSION['booking_id']);
    ?>
    <script language="javascript">
    alert("ทำรายการสำเร็จ");
    window.location='view.php';
    </script>
    
        <?php


}else{
    
    ?>
    <script language="javascript">
    alert("ทำรายการไม่สำเร็จ");
    window.location='view.php';
    </script>
    
        <?php

}



?>