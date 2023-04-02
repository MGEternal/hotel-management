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

    <SCRIPT LANGUAGE="JavaScript">
function printpage() {
if (window.print)
window.print()
else
alert("Sorry, your browser doesn't support this feature.");
}
</SCRIPT>
</head>
<body>
<?php 
    //หัว
        require("../include/connect.php");
        $name=$ffname." ".$llname;

    ?>
    <!-- เนื้อหา -->
    <div class="container">
        <div class="row">
        <div class="col-lg-6 mx-auto">
        <br>
    <h1><img src="../img/logo.png" width="70px" hiegth="50px">  ใบรับรองการจอง</h1>
    <br>


    <?php
    

    $mem_id=$mem_id_now;
    $sql2="SELECT * FROM member where mem_id='$mem_id'";
    $res2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($res2);
    $name1=$row2['fname' ]&& $row2['lname'];
    $sql="SELECT * from payment where mem_id = '$mem_id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    
    
?>
<table class="table table-responsive-md">
<tbody>
    <th class="col-lg-auto">รหัสการจอง </th>
    <td ><?php echo $row['booking_id'];?></td>
</tbody>

<tbody>
    <th>ชื่อลูกค้า</th>
    <td><?php echo $name;?></td>
</tbody>

<tbody>
    <th>วันที่ชำระเงิน</th>
    <td><?php echo chrdate($row['payment_date']);?></td>
</tbody>

<tbody>
    <th >ชื่อธนาคาร</th>
    <td><?php echo $row['bank_name'];?></td>
</tbody>

<tbody>
    <th > หมายเลขการโอน</th>
    <td><?php echo $row['id_tranfer'];?></td>
</tbody>

<tbody>
    <th >ค่าบริการ </th>
    <td><?php echo $row['payment_price'];?></td>
</tbody>

<tbody>
    <th>สถานะการชำระเงิน</th>
    <td><?php echo $row['payment_status'];?></td>
</tbody>

<tbody>
    <th></th>
    <td></td>
</tbody>
    
    </table>
    <input type="button" name="Button" value="พิมพ์เอกสาร" onclick="javascript:this.style.display='none';printpage();">
    </div>
    </div>
    </div>

    <?php
    //ท้าย

    function chrdate($x){
        $d=explode("-",$x);
        $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
    
    }
?>