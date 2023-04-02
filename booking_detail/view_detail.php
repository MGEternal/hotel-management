<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>U Khao Yai</title>

</head>
<body>
    <?php 
    //หัว
        require("../include/header.php");
        include("../include/connect.php");
        
        $mem_id=$mem_id_now;
        $sql="SELECT * FROM booking_detail where mem_id = '$mem_id'";
        $res=mysqli_query($conn , $sql);
        
    ?>
    <!-- เนื้อหา -->
    <div class="container">
    <br>
    <h2>ประวัติการจองห้องพัก</h2>
        <table class="table table-responsive-md">
        <thead>
        <th>วันที่เข้าอยู่ </th>
        <th>วันที่ออก </th>
        <th>หมายเลขห้อง </th>
        <th> ค่าบริการ</th>
        <th>ชื่อผู้ใช้ </th>
        <th>สถานะ </th>
        
        </thead>
        <?php  
        while($row=mysqli_fetch_assoc($res)){
        $room_id=$row['room_id'];
        $mem_id=$row['mem_id'];
        $sql2="SELECT * from room where room_id = '$room_id'";
            $res2=mysqli_query($conn , $sql2);
                $row2=mysqli_fetch_assoc($res2);
                    
                
        $sql3="SELECT * from member where mem_id = '$mem_id'";
            $res3=mysqli_query($conn , $sql3);
                $row3=mysqli_fetch_assoc($res3);    
        $booking_id=$row['booking_id'];
        $sql4="SELECT * from payment where booking_id = '$booking_id'";
        $res4=mysqli_query($conn , $sql4);
        $row4=mysqli_fetch_assoc($res4);

        ?>
        <tbody>
        <td><?php echo chrdate($row['checkin']) ;  ?> </td>
        <td><?php echo chrdate($row['checkout']) ;  ?> </td>
        <td><?php echo $row2['room_num'] ;  ?> </td>
        <td> <?= $row4['room_price'] ;?></td>
        <td><?php echo $row3['fname']." ".$row3['lname'] ;  ?> </td>
        <td><?php echo $row['booking_status'] ;  ?> </td>
       
        
        </tbody>
        <?php }  ?>
        </table>

    </div>
    <?php 
    //ท้าย
        require("../include/footer.php");
        function chrdate($x){
            $d=explode("-",$x);
            $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
            return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
        }
    ?>
</body>
</html>
<script language="javascript">
function del(mypage){
    var agree=confirm("คุณแน่ใจหรือไม่ว่าจะทำรายการนี้?");
if (agree){

    window.location=mypage;
}

}

</script>