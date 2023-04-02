<?php
    require("../include/connect.php");

    $news_name=$_POST['news_name'];
    $news_detail=$_POST['news_detail'];
    $news_date=$datenow;
    $news_img=$_POST['news_img'];
    $sql2="SELECT * FROM room";
    $res2=mysqli_query($conn,$sql2);

    if ($news_name=='') {
        ?>
    <script language="javascript">
    alert("กรุณากรอก หัวข้อข่าว");
    window.history.back();
    </script>
<?php
    }if ($news_detail=='') {
        ?>
    <script language="javascript">
    alert("กรุณากรอก รายละเอียดข่าว");
    window.history.back();
    </script>
<?php
    }

    $sql="INSERT INTO news VALUES('0','$news_name','$news_detail','$news_date','$news_img')";
        if($res=mysqli_query($conn,$sql)){
            ?>
            <script language="javascript">
            alert("เพิ่มข้อมูลสำเร็จ");
            window.location='shownews.php';
            </script>
            
    <?php
        }
        else{
        ?>
        <script language="javascript">
        alert("เพิ่มข้อมูลไม่สำเร็จ");
        window.history.back();
        </script>
        <?php } ?>