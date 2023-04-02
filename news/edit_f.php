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
        $news_id = $_GET['news_id'];
        $sql="SELECT * FROM NEWS WHERE news_id='$news_id'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
    ?>
    <!-- เนื้อหา -->
    <div class="container col-lg-6">
        <br>
        <h1>เพิ่มข้อมูลข่าวสาร</h1>
            <form action="edit_p.php" method="post">
                <div class="form-group">
                    <label for="news_id"></label>
                    <input class="form-control" type="hidden" name="news_id" id="news_id" value="<?=$row['news_id']?>">
                </div>

                <div class="form-group">
                    <label for="news_name">หัวข้อข่าว</label>
                    <input class="form-control" type="text" name="news_name" id="news_name" value="<?=$row['news_name']?>">
                </div>

                <div class="form-group">
                    <label for="news_detail">รายละเอียดของข่าว</label>
                    <input class="form-control" type="text" name="news_detail" id="news_detail" value="<?=$row['news_detail']?>">
                </div>
                
                <div class="form-group">
                   <img src="../img/<?=$row['news_img']?>" width="200" hiegth="150">
                </div>
                <div class="form-group">
                    <label for="news_img">รูปห้องพัก</label>
                    <input class="form-control-file" type="file" name="news_img" id="news_img" value=<?=$row['news_img']?> >
                </div>

                <button class="btn btn-primary">บึนทึก</button>
                <a href="shownews.php"><button class="btn btn-danger" >cancel</button></a>
            </form>
    </div>
    <br> <br> <br> <br>
    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>