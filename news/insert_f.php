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
    <div class="container col-lg-8">
        <br>
        <h1>เพิ่มข้อมูลข่าวสาร</h1>
            <form action="insert_p.php" method="post">
                <div class="form-gourp">
                    <label for="news_name">หัวข้อข่าว</label>
                    <input class="form-control" type="text" name="news_name" id="news_name" placeholder="ENTER NEWSNAME">
                </div>

                <div class="form-gourp">
                    <label for="news_detail">รายละเอียดของข่าว</label>
                    <input class="form-control" type="text" name="news_detail" id="news_detail" placeholder="ENTER NEWSNAME">
                </div>
                
                <div class="form-gourp">
                    <label for="news_img">image</label>
                    <input class="form-control-file" type="file" name="news_img" id="news_img" >
                </div>

                <button class="btn btn-primary">บึนทึก</button>
                <button class="btn btn-danger" type="reset">cancel</button>
            </form>
    </div>
    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>