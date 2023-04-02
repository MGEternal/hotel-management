<?php 
session_start();
include("../include/connect.php");
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$room_id=$_GET['room_id'];
$mem_id=$mem_id_now;
$date=$datenow;
$booking_id=$_SESSION['booking_id'];
$sql="SELECT * FROM booking where booking_id = '$booking_id'";
$res=mysqli_query($conn , $sql);
$row=mysqli_fetch_assoc($res);
if($num=mysqli_num_rows($res)=='0'){
    $sql3="INSERT INTO booking values(0,'$date','$mem_id')";
    $res3=mysqli_query($conn , $res3);
    $sql2="SELECT * from booking_detail group by booking_id asc";
    $res2=mysqli_query($conn , $sql2);
    while($row2=mysqli_fetch_assoc($res2)){
        $booking_id=$row2['booking_id'];
        $_SESSION['booking_id']=$booking_id;
    }
    $sql4="INSERT into booking_detail values(0,'$booking_id','$checkin','$checkout','$room_id','$mem_id','ยังไม่ยืนยัน')";
    $res4=mysqli_query($conn , $sql4);
    ?>
    <script>
    alert("ทำการจองห้องสำเร็จ");
    window.location='../booking_detail/view.php';
    </script>

    <?php
    

}else{
   
    $sql4="INSERT into booking_detail values(0,'$booking_id','$checkin','$checkout','$room_id','$mem_id','ยังไม่ยืนยัน')";
    $res4=mysqli_query($conn , $sql4);
    echo $sql4;
    ?>
    <script>
    alert("ทำการจองห้องสำเร็จ");
    window.location='../booking_detail/view.php';
    </script>

    <?php
}
  


?>