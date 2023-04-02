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
    alert("URL : "+mypage);
    window.location=mypage;
}

}

</script>
</head>
<body>
    <?php 
    //หัว
        require("../include/header.php");
        $sql="SELECT * FROM news";
        $res=mysqli_query($conn,$sql);
        

    ?>
    <!-- เนื้อหา -->
        <div class="container">
        <div class="row">
        <div class="col-lg-10 mx-auto">
        <br>
        <h2>ข่าวสารประชาสัมพันธ์ <a href="insert_f.php"><button class="btn btn-primary">เพิ่มข้อมูล</button></a></h2><br>
            <table class="table table-responsive-md">
            <?Php while($row=mysqli_fetch_assoc($res)){ ?>
                <tbody>
                    <td><img src="../img/<?=$row['news_img']?>" width="200" height="150"></td>
                    <td><font size="4px">หัวข้อข่าว : <?=$row['news_name']?><br>
                    รายละเอียด : <?=$row['news_detail']?><br><br><br>
                   วันที่ : <?php echo chrdate($row['news_date'])?><br>
                    </font></td>
                    <td><a href="edit_f.php?news_id=<?=$row['news_id']?>"><button class="btn btn-primary">แก้ไข</button></a></td>
                    <td><a href="delete.php?news_id=<?=$row['news_id']?>" onclick="del(this.href) ; return false;"><button class="btn btn-danger">ลบ</button></a></td>
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
        require("../include/footer.php");
        function chrdate($x){
            $d=explode("-",$x);
            $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
            return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
        }
    ?>
</body>
</html>