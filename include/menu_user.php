<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
<a class="navbar-brand" href="">U Khao Yai</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">


    <ul class="navbar-nav ">

        <li class="nav-item">
            <img class="rounded-circle" src="../img/<?php if($mem_img_now=='') {echo "user.png";} else {echo $mem_img_now;}  ?>" width="40px" hiegth="40px">    
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../profile_f.php"><?=$username_now ?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../room/show.php">ห้องพัก</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../booking/chkbk.php">จองห้องพัก</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../booking_detail/view.php">ยืนยันการจองห้อง</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../booking_detail/view_detail.php">ประวัติการจองห้องพัก</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../payment/view.php">ประวัติการชำระเงิน</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../help.php">ติดต่อสอบถาม</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../logout.php" onclick="dellog(this.href) ; return false;">ออกจากระบบ</a>
        </li>
    </ul>
    </div>
    </nav>
    <script language="javascript">
function dellog(mypage){
    var agree=confirm("คุณแน่ใจหรือไม่ว่าจะออกจากระบบ?");
if (agree){
     
    window.location=mypage;
}

}

</script>