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

</head>
<body>
    <?php 
    //หัว
        require("../include/header.php");
        require("../include/connect.php");


    $booking_id=$_GET['booking_id'];
    $sum=$_GET['sum'];
    echo $booking_id;
    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-4">
    <br>
    <h2>ชำระค่าบริการ</h2>
    <form action="new_p.php" method="post">
    <div class="form-group">
    <label for="payment_date">วันที่</label>
    <input type="date" class="form-control" name="payment_date" id="payment_date" placeholder="Enter วันที่" value=<?php echo  $datenow ?>>
    <input type="hidden" name="booking_id" value="<?php echo $booking_id ?>">
    </div>
    <div class="form-group">
    <label for="bank_name">ธนาคาร</label>
    <select  class="form-control" name="bank_name" id="bank_name" placeholder="Enter ธนาคาร">
        <option value="กรุงศรี">กรุงศรี</option>
        <option value="กรุงไทย">กรุงไทย</option>
        <option value="กรุงเทพ">กรุงเทพ</option>
    </select>
    </div>
    <div class="form-group">
    <label for="id_tranfer">รหัสการโอน</label>
    <input type="number" class="form-control" name="id_tranfer" id="id_tranfer" placeholder="Enter รหัสการโอน" required>
    </div>
    <div class="form-group">
    <label for="payment_price">ค่าบริการ</label>
    <input type="text" class="form-control" name="payment_price" id="payment_price"  value=<?php echo $sum  ;?> readonly>
    </div>
    <div class="form-group">
    <label for="mem_f">ชื่อผู้ใช้</label>
    <input type="text" class="form-control" name="" id="mem_f"  value=<?php echo $ffname  ;?> readonly>
    </div>
    <div class="form-group">
    <label for="mem_l">นามสกุล</label>
    <input type="text" class="form-control" name="mem_l" id="mem_l"  value=<?php echo $llname  ;?> readonly>
    </div>
    

    
    
    
    
    <button class="btn btn-primary  col-md-2" type="submit">OK</button>
   
    </form>
    
    
    <br>
    <br>
    <br>
    <br>
    
    </div>

    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>