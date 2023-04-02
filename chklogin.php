<?php
include("include/connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
if ($username=='') {
    ?>
<script language="javascript">
alert("กรุณากรอก Username");
window.location='login.php';
</script>

    <?php
}if ($password=='') {
    ?>
<script language="javascript">
alert("กรุณากรอก Password");
window.location='login.php';
</script>

    <?php
}
$sql="SELECT * from member where username='$username' and password='$password'";

$res=mysqli_query($conn , $sql);
if($num=mysqli_num_rows($res)=='1'){
$row=mysqli_fetch_assoc($res);
session_start();
$_SESSION['username']=$row['username'];
$_SESSION['mem_id']=$row['mem_id'];
$_SESSION['mem_type']=$row['mem_type'];
$_SESSION['mem_img']=$row['mem_img'];
echo "<meta http-equiv='refresh' content='0;url=index.php'>";

}else{
?>
<script language="javascript">
alert("Username or Password not ture");
window.history.back();
</script>



<?php
}




?>