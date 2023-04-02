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

        $name=$ffname." ".$llname;
    ?>
    <!-- เนื้อหา -->
    <div class="container col-lg-6">
    <br>
    <h2>การจองห้องพัก</h2>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="date">วันที่จอง</label>
        <input type="text" class="form-control" name="date" id="date" value="<?php echo chrdate($datenow) ?>" readonly>
    </div>
    <div class="form-group col-md-6">
        <label for="name">ชื่อ</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name ; ?>" readonly>
    </div>
    </div>

    <form action="select_room.php" method="post">
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="checkin">วันที่ Checkin</label>
        <input type="date" class="form-control" name="checkin" id="checkin" min="<?php echo $datenow ; ?>" >
    </div>
    <div class="form-group col-md-6">
        <label for="checkout">วันที่ Checkout</label>
        <input type="date" class="form-control" name="checkout" id="checkout" min="<?php echo $datenow ; ?>">
    </div>
    </div>
    


    <button class="btn btn-primary">OK</button>
    <a href="../index.php"><button class="btn btn-danger" type="button">cancel</button></a>
    </form>
    
    </div>










    <?php 
    //ท้าย
        require("../include/footer.php");
        function chrdate($x){
            $d=explode("-",$x);
            $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
            return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
        }
    ?>
    
    <script>
    $(function(){
        $("#checkout").change(function(){
        //    alert($("#checkout").val());
         //  $("#checkout").val('');
         //  var in=$("#checkin").val();
          // var out =$("#checkout").val();


          if ($("#checkin").val() > $("#checkout").val()){
              //alert("111111");
              $("#checkout").val('');
              alert("กรุณากรอกวันที่ให้ถูกต้อง");
          }
            
        });
    });
    
    </script>
</body>
</html>