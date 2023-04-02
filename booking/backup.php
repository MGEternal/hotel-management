<?php 
session_start();
include('../include/connect.php');
$room_id=$_GET['room_id'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$date=$datenow;
$mem_id=$mem_id_now;
$booking_id=$_SESSION['booking_id'];
$sql5="SELECT * from booking where booking_id = '$booking_id' ";
$res5=mysqli_query($conn , $sql5);
$row5=mysqli_fetch_assoc($res5);
if($num=mysqli_num_rows($res5)=='0'){
    echo "87654321";
    $sql="INSERT into booking values(0,'$date','$mem_id') ";
$res=mysqli_query($conn ,$sql);
    $sql2="SELECT * from  booking GROUP BY booking_id ASC";
    $res2=mysqli_query($conn , $sql2);
    while($row2=mysqli_fetch_assoc($res2)){
        $booking_id=$row2['booking_id'];
    }
    $sql6="SELECT * from booking where mem_id = '$mem_id'";
    $_SESSION['booking_id']=$booking_id;
    $sql3="INSERT INTO booking_detail values(0,'$booking_id','$checkin','$checkout','$room_id','$mem_id','ยังไม่ยืนยัน')";
    $res3=mysqli_query($conn , $sql3);
    
    
    ?>
        <script>
            alert("ทำการเลือกห้องดังกล่าวแล้ว2");
            window.location='../booking_detail/view.php';
        </script>
    <?php

    
}else{
    

    $sql4="INSERT INTO booking_detail values(0,'$booking_id','$checkin','$checkout','$room_id','$mem_id','ยังไม่ยืนยัน')";
    $res4=mysqli_query($conn , $sql4);
    echo "1";


    ?>
        <script>
            alert("ทำการเลือกห้องดังกล่าวแล้ว1");
            window.location='../booking_detail/view.php';
        </script>
    <?php

}
?>
