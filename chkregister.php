<?php
include("include/connect.php");

$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];

$mem_img=$_POST['mem_img'];

if ($username=='') {
    $i++;
    ?>
<script language="javascript">
alert("Please Enter Username");
window.location='register.php';
</script>
<?php
}if ($password=='') {
    $i++;
    ?>
<script language="javascript">
alert("Please Enter Password");
window.location='register.php';
</script>
<?php
}if ($fname=='') {
    $i++;
    ?>
<script language="javascript">
alert("Please Enter Firstname");
window.location='register.php';
</script>
<?php
}if ($lname=='') {
    $i++;
    ?>
<script language="javascript">
alert("Please Enter Lastname");
window.location='register.php';
</script>
<?php
}if ($tel=='') {
    $i++;
    ?>
<script language="javascript">
alert("Please Enter Telephone");
window.location='register.php';
</script>
<?php
}
$sql2="SELECT * FROM member";
$res2=mysqli_query($conn , $sql2);
while($row2=mysqli_fetch_assoc($res2)){
    if ($row2['username']==$username) {
        $i++;
        ?>
    <script language="javascript">
    alert(" Username นี้มีผู้ใช้แล้ว");
    window.location='register.php';
    </script>
<?php
    }if ($row2['fname']==$fname && $row2['lname']==$lname) {
        $i++;
        ?>
    <script language="javascript">
    alert(" ชื่อ - นามสกุล นี้มีผู้ใช้แล้ว");
    window.location='register.php';
    </script>
<?php
    }if ($row2['tel']==$tel) {
        $i++;
        ?>
    <script language="javascript">
    alert(" Telephone นี้มีผู้ใช้แล้ว");
    window.location='register.php';
    </script>
<?php
    }if ($username=='') {
        $i++;
        ?>
    <script language="javascript">
    alert("กรุณากรอก Username");
    window.location='register.php';
    </script>
<?php
    }
}

if($i==0){
$sql="INSERT INTO member values('','$username','$password','$fname','$lname','$tel','$mem_img','user')";
if($res=mysqli_query($conn , $sql)){
    ?>
<script language="javascript">
alert("เพิ่มข้อมูลสำเร็จ");
window.location='login.php';
</script>

    <?php

}else{
   
    ?>
    <script language="javascript">
    alert("เพิ่มข้อมูลไม่สำเร็จ");
    window.location='register.php';
    
    </script>
<?php
}
}

?>







