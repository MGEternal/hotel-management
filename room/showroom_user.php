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
        $sql="SELECT * FROM room";
        $res=mysqli_query($conn,$sql);
        

    ?>
    <!-- เนื้อหา -->
        <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto">
        <br>
        <h2>รายละเอียดห้องพัก </h2><br>
            <table class="table table-responsive">
            <?Php while($row = mysqli_fetch_assoc($res)){ ?>
                <tbody>
                    <td><img src="../img/<?=$row['room_img']?>" width="200" height="150"></td>
                    <td><font size="3.5px">หมายเลขห้อง : <?=$row['room_num']?><br>
                    รายละเอียดห้องพัก : <?=$row['room_detail']?><br><br><br>
                    ราคาห้อง : <?=$row['room_price']?> บาท.<br>
                    </font></td>
                    <td><a href="../booking/chkbk.php?room_id=<?=$row['room_id']?>"><button class="btn btn-success">จอง</button></a>
                </tbody>
                <?php } ?>
            </table>
        </div>
        </div>
        </div>
        <br>
        <br>
        <br>

    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>