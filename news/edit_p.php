<?php
require("../include/connect.php");

        $news_id=$_POST['news_id'];
        $news_name=$_POST['news_name'];
        $news_detail=$_POST['news_detail'];
        $news_date=$datenow;
        $news_img=$_POST['news_img'];
        
    $sql2="SELECT * FROM news";
    $res2=mysqli_query($conn,$sql2);
        if($news_img!=""){
 
    $sql="UPDATE news SET news_name='$news_name',news_detail= '$news_detail',news_date= '$news_date',news_img= '$news_img' WHERE news_id='$news_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลสำเร็จ");
    window.location='shownews.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลไม่สำเร็จ");
    window.history.back()';
    </script>
    <?php } 
        }else{
            $sql="UPDATE news SET news_name='$news_name',news_detail= '$news_detail',news_date= '$news_date'  WHERE news_id='$news_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลสำเร็จ");
    window.location='shownews.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลไม่สำเร็จ");
    window.history.back()';
    </script>
    <?php } 
        }
 ?>
   
    
