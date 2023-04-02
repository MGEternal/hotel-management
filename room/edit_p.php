<?php
require("../include/connect.php");

    $room_id=$_POST['room_id'];
    $room_num=$_POST['room_num'];
    $room_detail=$_POST['room_detail'];
    $room_price=$_POST['room_price'];
    $room_img=$_POST['room_img'];
    $sql2="SELECT * FROM room";
    $res2=mysqli_query($conn,$sql2);
        if($room_img!=""){
 
    $sql="UPDATE room SET room_num='$room_num',room_detail= '$room_detail',room_price= '$room_price',room_img= '$room_img' WHERE room_id='$room_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลสำเร็จ");
    window.location='showroom.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลไม่สำเร็จ");
    window.location='edit_f.php';
    </script>
    <?php } 
        }else{
            $sql="UPDATE room SET room_num='$room_num',room_detail= '$room_detail',room_price= '$room_price'  WHERE room_id='$room_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลสำเร็จ");
    window.location='showroom.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลไม่สำเร็จ");
    window.location='edit_f.php';
    </script>
    <?php } 
        }
 ?>
   
    
