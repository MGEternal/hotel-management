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
        $sql="SELECT * from payment";
        $res=mysqli_query($conn , $sql);
        
    ?>
    <!-- เนื้อหา -->

    <div class="container">
    <br>
    <h2>จัดการการยืนยันการชำระเงิน</h2>
    
    <table class="table table-responsive-md">
    
    <thead>
    
    <th> วันที่ชำระเงิน </th>
    <th> ชื่อธนาคาร</th>
    <th> รหัสการโอน</th>
    <th> ค่าบริการ</th>
    <th> ชื่อผู้จอง</th>
    <th> สถานะ</th>
    <th> ยืนยัน</th>
    
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
<td> <?= $row['payment_date']   ?></td>
<td> <?= $row['bank_name']   ?></td>
<td> <?= $row['id_tranfer']   ?></td>
<td> <?= $row['payment_price']   ?></td>
<td> <?= $name  ?></td>
<td> <?= $row['payment_status']   ?></td>
    <td><?php if($row['payment_status']!="ยืนยันแล้ว"){ ?> <a href="status.php?payment_id=<?=$row['payment_id']?>" onclick="del(this.href) ; return false;"><button class="btn btn-primary">ยืนยัน</button></a></td> <?php } ?>



</tbody>










    <?php  }   ?>
    </table>
    
    </div>









    <?php 
    //ท้าย
        require("../include/footer.php")
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