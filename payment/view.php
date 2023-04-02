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
        $sql="SELECT * from payment where mem_id = '$mem_id_now'";
        $res=mysqli_query($conn , $sql);
        
    ?>
    <!-- เนื้อหา -->

    <div class="container  col-lg-8">
    <br>
    <h2>ประวัติการชำระเงิน</h2>
    <table class="table table-responsive-md">
    
    <thead>
    
    <th> วันที่ชำระเงิน </th>
    <th> ชื่อธนาคาร</th>
    <th> รหัสการโอน</th>
    <th> ค่าบริการ</th>
    <th> ชื่อผู้จอง</th>
    <th> สถานะ</th>
    <th> ใบเสร็จ</th>
    
    </thead>

    <?php   
    while ($row=mysqli_fetch_assoc($res)) {
    $mem_id=$row['mem_id'];
    $sql2="SELECT * FROM member where mem_id = '$mem_id'";
        $res2=mysqli_query($conn , $sql2);
            $row2=mysqli_fetch_assoc($res2);
            $name = $row2['fname'] . "  ".$row2['lname'];
    ?>
<tbody>
<td> <?= chrdate($row['payment_date'])   ?></td>
<td> <?= $row['bank_name']   ?></td>
<td> <?= $row['id_tranfer']   ?></td>
<td> <?= $row['payment_price']   ?></td>
<td> <?= $name  ?></td>
<td> <?= $row['payment_status']   ?></td>
<td> <?php if($row['payment_status']=="ยืนยันแล้ว"){   ?><a href="report_pay.php?payment_id=<?= $row['payment_id'] ?>"><button class="btn btn-primary">Print</button></a><?php }  ?></td>



</tbody>










    <?php  }  
    
    function chrdate($x){
        $d=explode("-",$x);
        $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
    }
    ?>
    </table>
    
    </div>









    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>