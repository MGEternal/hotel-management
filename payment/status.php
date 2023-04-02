<?php

include('../include/connect.php');
$payment_id=$_GET['payment_id'];
$sql="UPDATE payment SET payment_status='ยืนยันแล้ว' where payment_id='$payment_id'";

if($res=mysqli_query($conn ,$sql)){
unset($_SESSION['booking_id']);
?>
    <script language="javascript">
    alert("ยืนยันข้อมูลสำเร็จ");
    window.location='view_admin.php';
    </script>
<?php

}else{
    ?>
    <script language="javascript">
    alert("ยืนยันข้อมูลไม่สำเร็จ");
    window.location='view_admin.php';
    </script>
<?php

}
?>