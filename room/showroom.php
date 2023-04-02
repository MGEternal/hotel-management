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
    <script language="javascript">
function del(mypage){
    var agree=confirm("คุณแน่ใจหรือไม่ว่าจะทำรายการนี้?");
if (agree){
    window.location="showroom.php";
}

}

</script>
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
        <div class="col-lg-9 mx-auto">
        <br>
        <h2>รายละเอียดห้องพัก <a href="insert_f.php"><button class="btn btn-primary">เพิ่มข้อมูล</button></a></h2><br>
            <table class="table table-responsive">
            <?Php while($row = mysqli_fetch_assoc($res)){ ?>
                <tbody>
                    <td><img src="../img/<?=$row['room_img']?>" width="200" height="150"></td>
                    <td><font size="4px">หมายเลขห้อง : <?=$row['room_num']?><br>
                    รายละเอียดห้องพัก : <?=$row['room_detail']?><br><br><br>
                    ราคาห้อง : <?=$row['room_price']?> บาท.<br>
                    </font></td>
                    <td><a href="edit_f.php?room_id=<?=$row['room_id']?>"><button class="btn btn-primary">แก้ไข</button></a>
                    <a href="delete.php?room_id=<?=$row['room_id']?>" onclick="del(this.href) ; return false;"><button class="btn btn-danger">ลบ</button></a></td>
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