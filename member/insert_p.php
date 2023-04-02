<?php
include("../include/connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];
$id_card=$_POST['id_card'];
$mem_img=$_POST['mem_img'];
$mem_type=$_POST['mem_type'];
if ($username=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก Username");
window.location='insert_f.php';
</script>
<?php
}if ($password=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก Password");
window.location='insert_f.php';
</script>
<?php
}if ($fname=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก Firstname");
window.location='insert_f.php';
</script>
<?php
}if ($lname=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก Lastname");
window.location='insert_f.php';
</script>
<?php
}if ($tel=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก Telephone");
window.location='insert_f.php';
</script>
<?php
}if ($id_card=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก Identelseify card");
window.location='insert_f.php';
</script>
<?php
}if ($mem_type=='') {
    $i++;
    ?>
<script language="javascript">
alert("กรุณากรอก MemberType");
window.location='insert_f.php';
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
    window.location='insert_f.php';
    </script>
<?php
    }if ($row2['fname']==$fname && $row2['lname']==$lname) {
        $i++;
        ?>
    <script language="javascript">
    alert(" ชื่อ - นามสกุล นี้มีผู้ใช้แล้ว");
    window.location='insert_f.php';
    </script>
<?php
    }if ($row2['tel']==$tel) {
        $i++;
        ?>
    <script language="javascript">
    alert(" Telephone นี้มีผู้ใช้แล้ว");
    window.location='insert_f.php';
    </script>
<?php
    }if ($row2['id_card']==$id_card) {
        $i++;
        ?>
    <script language="javascript">
    alert(" Identelseify card นี้มีผู้ใช้แล้ว");
    window.location='insert_f.php';
    </script>
<?php
    }
}

if($i==0){
$sql="INSERT INTO member values('0','$username','$password','$fname','$lname','$tel','$id_card','$mem_img','$mem_type')";
if($res=mysqli_query($conn,$sql)){
    ?>
<script language="javascript">
alert("เพิ่มข้อมูลสำเร็จ");
window.location='showmember.php';
</script>

    <?php

}else{
    ?>
    <script language="javascript">
    alert("เพิ่มข้อมูลไม่สำเร็จ");
    window.location='showmember.php';
    </script>
<?php
}
}

?>







