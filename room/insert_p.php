<?php
require("../include/connect.php");

    $room_num=$_POST['room_num'];
    $room_detail=$_POST['room_detail'];
    $room_price=$_POST['room_price'];
    $room_img=$_POST['room_img'];
    $sql2="SELECT * FROM room";
    $res2=mysqli_query($conn,$sql2);

    if ($room_num=='') {
        ?>
    <script language="javascript">
    alert("กรุณากรอก เลขห้อง");
    window.location='insert_f.php';
    </script>
<?php
    }if ($room_detail=='') {
        ?>
    <script language="javascript">
    alert("กรุณากรอก ประเภทห้อง");
    window.location='insert_f.php';
    </script>
<?php
    }if ($room_price=='') {
        ?>
    <script language="javascript">
    alert("กรุณากรอก ราคาห้อง");
    window.location='insert_f.php';
    </script>
    <?php  }

    while($row2=mysqli_fetch_assoc($res2)){
        if ($row2['room_num']==$room_num) {
            ?>
        <script language="javascript">
        alert(" หมายเลขห้องนี้มีแล้ว");
        window.location='insert_f.php';
        </script>
    <?php
        } }?>
    
        <?php
        
        $sql="INSERT INTO room VALUES('0','$room_num','$room_detail','$room_price','$room_img')";
        
        if($res=mysqli_query($conn,$sql)){
            ?>
            <script language="javascript">
            alert("เพิ่มข้อมูลสำเร็จ");
            window.location='showroom.php';
            </script>
            
    <?php
        }
        else{
        ?>
        <script language="javascript">
        alert("เพิ่มข้อมูลไม่สำเร็จ");
        window.location='insert_f.php';
        </script>
        <?php } 
    ?>
