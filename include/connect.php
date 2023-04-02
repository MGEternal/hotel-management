<?php
$host="localhost";
$user="root";
$pws="12345678";
$db="chontech";
if($conn = mysqli_connect($host,$user,$pws,$db)){
    mysqli_set_charset($conn , "utf-8");
}else{
   echo "ERROR : ".mysqli_connect_error($conn);
}
$datenow=date_default_timezone_set("Asia/Bangkok");
$datenow=date_create("now")->format("Y-m-d");
session_start();


    $mem_id_now=$_SESSION['mem_id'];

    $mem_type_now=$_SESSION['mem_type'];

$sss="SELECT * FROM member where mem_id='$mem_id_now'";
$rrres=mysqli_query($conn, $sss);
$rrrow=mysqli_fetch_assoc($rrres);
$ffname=$rrrow['fname'];
$llname=$rrrow['lname'];
$username_now=$rrrow['username'];
$mem_img_now=$rrrow['mem_img'];

?>