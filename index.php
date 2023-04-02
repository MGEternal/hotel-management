<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>U Khao Yai</title>

    <style>
video {
  max-width: 100%;
  height: auto;
}
</style>
</head>
<body>
    <?php 
    //หัว
        require("header.php");
        $sql="SELECT * FROM news";
        $res=mysqli_query($conn,$sql);
    ?>
    <!-- เนื้อหา -->
        <div class="container">
            <video autoplay="autoplay" loop>
                <source src="img/vdo/180hotel.mp4">
            </video>
        </div> 

        <div class="container">
        <div class="row">
        <div class="col-lg-10 mx-auto">
        <br>
        <h2>ข่าวสารประชาสัมพันธ์ </h2>
        <table class="table table-responsive-md">
        <?Php while($row=mysqli_fetch_assoc($res)){ ?>
            <tbody>
            <td>
                <div class="form-group">
                   <img src="img/<?=$row['news_img']?>"  width="300" hiegth="250">
                </div>
            </td>
            <td>    
                <div class="form-group row">
                    <label for="news_name" class="col-sm-4 col-form-label">หัวข้อข่าว</label>
                    <input class="form-control text-center col-sm-7 " type="text" name="news_name" id="news_name" value="<?=$row['news_name']?>">
                </div>

                <div class="form-group row">
                    <label for="news_detail" class="col-sm-4 col-form-label">รายละเอียดของข่าว</label>
                    <textarea class="form-control text-center col-sm-7" type="text" name="news_detail" id="news_detail"><?=$row['news_detail']?></textarea>
                </div>

                <div class="form-group row">
                    <label for="news_detail" class="col-sm-4 col-form-label">วันที่</label>
                    <input class="form-control text-center col-sm-7" type="text" name="news_detail" id="news_detail" value="<?=$row['news_date']?>">
                </div>
                </td>
                </tbody>       
        <?php } ?>
        </table>
        </div>
        </div>
        </div>
        <br><br><br><br>
    <?php 
    //ท้าย
        require("include/footer.php");
        function chrdate($x){
            $d=explode("-",$x);
            $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
            return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
        }
    ?>
</body>
</html>