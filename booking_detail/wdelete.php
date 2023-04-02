<?php
include("../include/connect.php");
$booking_id=$_GET['booking_id'];
$sql="UPDATE booking_detail SET booking_status='รอการยกเลิก' where booking_id='$booking_id'";
if($res=mysqli_query($conn , $sql)){
   echo $sql ;
     ?>
    <script language="javascript">
    alert("ทำรายการสำเร็จ กรุณารอการยืนยันจากผู้ดูแลระบบ");
    window.location='view.php';
    </script>
    <?php
}


?>