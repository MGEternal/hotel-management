<?php 
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['mem_type']);
unset($_SESSION['mem_id']);
unset($_SESSION['booking_id']);
header("location:index.php");
?>
