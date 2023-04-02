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
    session_start();
    //หัว
        require("../include/header.php");
        include("../include/connect.php");
        $mem_id=$mem_id_now;
        $booking_id=$_SESSION['booking_id'];
        $sql="SELECT * FROM booking_detail where mem_id = '$mem_id' and booking_id = '$booking_id'";
        $res=mysqli_query($conn , $sql);
        
    ?>
    <!-- เนื้อหา -->
    <div class="container">
    <br>
    <h2>ยืนยันการจองห้องพัก</h2>
        <table class="table table-responsive-md">
        <thead>
        <th>วันที่เข้าอยู่ </th>
        <th>วันที่ออก </th>
        <th>หมายเลขห้อง </th>
        <th>ชื่อผู้ใช้ </th>
        <th>ค่าบริการ</th>
        <th>สถานะ </th>
        
        </thead>
        <?php  
        while($row=mysqli_fetch_assoc($res)){
            $booking_id=$row['booking_id'];
            $checkin=$row['checkin'];
            $checkout=$row['checkout'];
        $room_id=$row['room_id'];
        $mem_id=$row['mem_id'];
        $sql2="SELECT * from room where room_id = '$room_id'";
            $res2=mysqli_query($conn , $sql2);
                $row2=mysqli_fetch_assoc($res2);
        $sql3="SELECT * from member where mem_id = '$mem_id'";
            $res3=mysqli_query($conn , $sql3);
                $row3=mysqli_fetch_assoc($res3); 
                $room_price=$row2['room_price'] ;
                $sum=datediff($checkin,$checkout,$room_price);
                $x=0;
                if($sum=='0'){
                    $sum='800';
                    
                }if($row['booking_status']=='รอการยกเลิก' or $row['booking_status']=='ยืนยันแล้ว'){
                    
                $x++;
                }
                $summary=$summary+$sum;
                
        ?>
        <tbody>
        <td><?php echo chrdate($row['checkin']) ;  ?> </td>
        <td><?php echo chrdate($row['checkout']) ;  ?> </td>
        <td><?php echo $row2['room_num'] ;  ?> </td>
        <td><?php echo $row3['fname']." ".$row3['lname'] ;  ?> </td>
        <td><?= $sum ;  ?></td>
        <td><?php echo $row['booking_status'] ;  ?> </td>
       
        
        </tbody>
        
        <?php }  ?>
        </table>
            <div>
            <?php if($x==0 && $booking_id!='0') echo "<a href='../payment/new_f.php?booking_id=$booking_id&sum=$summary'><button class='btn btn-primary'>ยืนยันการชำระเงิน</button></a>"  ?>
             <a href="wdelete.php?booking_id=<?=$booking_id?>" onclick="del(this.href) ; return false;"><button class="btn btn-danger">ยกเลิกการจอง</button></a>
            </div>
                
            
    </div>
    <?php 
    //ท้าย
        require("../include/footer.php");
        function chrdate($x){
            $d=explode("-",$x);
            $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
            return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
        }
        function datediff($ci,$co,$r){
            $d1=date_create($ci);
            $d2=date_create($co);
            $da=date_diff($d1,$d2)->format("%a days");
            //return $res=$da*$r;
            $res=$da*$r;
            return $res;
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