<?php
require("../include/connect.php");

$mem_id=$_POST['mem_id'];
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];
$id_card=$_POST['id_card'];
$mem_img=$_POST['mem_img'];
$mem_type=$_POST['mem_type'];
    $res2=mysqli_query($conn,$sql2);
        if($mem_img!=""){
 
    $sql="UPDATE member SET username='$username',password='$password',fname='$fname',lname= '$lname',tel= '$tel',id_card= '$id_card',mem_img= '$mem_img',mem_type= '$mem_type' WHERE mem_id='$mem_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลสำเร็จ");
    window.location='showmember.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลไม่สำเร็จ");
    window.location='edit_f.php';
    </script>
    <?php } 
        }else{
            $sql="UPDATE member SET username='$username',password='$password',fname='$fname',lname= '$lname',tel= '$tel',id_card= '$id_card',mem_type= '$mem_type'  WHERE mem_id='$mem_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลสำเร็จ1");
    window.location='showmember.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("แก้ไขข้อมูลไม่สำเร็จ1");
    window.location='edit_f.php';
    </script>
    <?php } 
        }
 ?>
   
    
