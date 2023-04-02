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
        $room_id = $_GET['room_id'];
        $sql = "select * from room where room_id=$room_id";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res)

    ?>
    <!-- เนื้อหา -->
        <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto">
        <br>
        <h1>แก้ไขห้องพัก</h1>
            <form action="edit_p.php" method="post">
            <div class="form-group">
                    <label for="room_id"></label>
                    <input class="form-control" type="hidden" name="room_id" id="room_id" value="<?=$row['room_id']?>">
                </div>
                <div class="form-group">
                    <label for="room_num">หมายเลขห้อง</label>
                    <input class="form-control" type="text" name="room_num" id="room_num" value="<?=$row['room_num']?>" >
                </div>

                <div class="form-group">
                    <label for="room_detail">ประเภทห้องพัก</label>
                    <select class="form-control" name="room_detail" id="room_detail" >
                    <option value="">----เลือกประเภทห้องพัก----</option>
                    <option <?php if($row['room_detail']=="ห้องเตียงคู่") echo "selected"?> value="ห้องเตียงคู่">ห้องเตียงคู่</option>
                    <option <?php if($row['room_detail']=="ห้องเตียงเดี่ยว") echo "selected"?> value="ห้องเตียงเดี่ยว">ห้องเตียงเดี่ยว</option>
                    <option <?php if($row['room_detail']=="ห้องครอบครัว") echo "selected"?> value="ห้องครอบครัว">ห้องครอบครัว</option>
                    
                    </select>
                </div>


                <div class="form-group">
                    <label for="room_price">ราคาห้องพัก</label>
                    <select class="form-control" name="room_price" id="room_price">
                    <option value="">----เลือกราคาห้องพัก----</option>
                    <option <?php if($row['room_price']=="1000") echo "selected"?> value="1000">1000</option>
                    <option <?php if($row['room_price']=="1500") echo "selected"?> value="1500">1500</option>
                    <option <?php if($row['room_price']=="2000") echo "selected"?> value="2000">2000</option>
                    <option <?php if($row['room_price']=="2500") echo "selected"?> value="2500">2500</option>
                    <option <?php if($row['room_price']=="5000") echo "selected"?> value="5000">5000</option>

                    </select>
                </div>

                
                <div class="form-group">
                   <img src="../img/<?=$row['room_img']?>" width="200" hiegth="150">
                </div>
                <div class="form-group">
                    <label for="room_img">รูปห้องพัก</label>
                    <input class="form-control-file" type="file" name="room_img" id="room_img" value=<?=$row['room_img']?> >
                </div>
                <button class="btn btn-primary col-lg-2" type="submit">แก้ไข</button>
                <br>
                <br>
                <br>
                <br>
              

            </form>
            </div>
            </div>
            </div>

    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>