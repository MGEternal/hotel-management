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
        require("../include/connect.php");
    ?>
    <!-- เนื้อหา -->
    <div class="container">
    <h2>ห้องพักที่ว่าง</h2>
    

        <?php
        $checkin=$_POST['checkin'];
        $checkout=$_POST['checkout'];
        if($checkin==''){
            ?>
                <script language="javascript">
                    alert("กรุณากรอก checkin");
                    window.location='chkbk.php';
                </script>
            <?php
        }if($checkout==''){
            ?>
                <script language="javascript">
                    alert("กรุณากรอก checkout");
                    window.location='chkbk.php';
                </script>
            <?php
        }
        
            $sql="SELECT * FROM room ";
            $res=mysqli_query($conn , $sql);
            while($row=mysqli_fetch_assoc($res)){
                    $chkroom=$row['room_id'];
                    $room=chkroom($checkin,$checkout,$chkroom);
                    
                    if($room==''){
                        //ใส่ห้องไว้ในนี้นะ
                        ?>
                    <table class="table table-responsive-md">
                    
                        <tbody>
                            <td><img src="../img/<?=$row['room_img']?>" width="200" height="150"></td>
                            <td><font size="3.5px">หมายเลขห้อง : <?=$row['room_num']?><br>
                            รายละเอียดห้องพัก : <?=$row['room_detail']?><br><br><br>
                            ราคาห้อง : <?=$row['room_price']?><br>
                            </font></td>
                            <td><a href="../booking/booking_sql.php?room_id=<?=$row['room_id']?>&checkin=<?php echo $checkin ?>&checkout=<?php echo $checkout ?>"><button class="btn btn-success">จอง</button></a>
                        </tbody>
                        
                    </table>
                    <br><br><br><br>
                
                
        <?php
                        //ใส่ห้องไว้ในนี้นะ
                    }
            }


        ?>
    
    </div>










    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>
<?php

function chkroom($date1,$date2,$room){
    global $conn ;
    $sql="SELECT * from booking_detail where room_id = '$room' and (checkin between '$date1' and '$date2' or checkout between '$date1' and '$date2') ";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($res);
    return $row['room_id'];
}

?>