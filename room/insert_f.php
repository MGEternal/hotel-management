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
        require("../include/header.php")
    ?>
    <!-- เนื้อหา -->
        <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto">
        <br>
        <h1>เพิ่มห้องพัก</h1>
            <form action="insert_p.php" method="post">
                <div class="form-group">
                    <label for="room_num">หมายเลขห้อง</label>
                    <input class="form-control" type="text" name="room_num" id="room_num" placeholder="หมายเลขห้อง">
                </div>

                <div class="form-group">
                    <label for="room_detail">ประเภทห้องพัก</label>
                    <select class="form-control" name="room_detail" id="room_detail">
                    <option value="">----เลือกประเภทห้องพัก----</option>
                    <option value="ห้องเตียงคู่">ห้องเตียงคู่</option>
                    <option value="ห้องเตียงเดี่ยว">ห้องเตียงเดี่ยว</option>
                    <option value="ห้องครอบครัว">ห้องครอบครัว</option>
                    
                    </select>
                </div>


                <div class="form-group">
                    <label for="room_price">ราคาห้องพัก</label>
                    <select class="form-control" name="room_price" id="room_price">
                    <option value="">----เลือกราคาห้องพัก----</option>
                    <option value="1000">1000</option>
                    <option value="1500">1500</option>
                    <option value="2000">2000</option>
                    <option value="2500">2500</option>
                    <option value="5000">5000</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="room_img">รูปห้องพัก</label>
                    <input class="form-control-file" type="file" name="room_img" id="room_img" >
                </div>
                <button class="btn btn-primary col-lg-2" type="submit">บันทึก</button>
                <button class="btn btn-danger col-lg-2" type="reset">cancel</button>
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