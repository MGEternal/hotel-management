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
        $mem_id = $_GET['mem_id'];
        $sql = "select * from member where mem_id= '".$mem_id."' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res)

    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-4">
    <br>
    <h2>แก้ไขข้อมูลสมาชิก</h2>
    <form action="edit_p.php" method="post">
    <div class="form-group">
    <label for="mem_id"></label>
    <input type="hidden" class="form-control" name="mem_id" id="mem_id" value="<?=$row['mem_id']?>">
    </div>
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" value=<?=$row['username']?> >
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" value="<?=$row['password']?>">
    </div>
    <div class="form-group">
    <label for="fname">Firstname</label>
    <input type="text" class="form-control" name="fname" id="fname" value="<?=$row['fname']?>">
    </div>
    <div class="form-group">
    <label for="lname">Lastname</label>
    <input type="text" class="form-control" name="lname" id="lname" value="<?=$row['lname']?>">
    </div>
    <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="number" class="form-control" name="tel" id="tel" value="<?=$row['tel']?>">
    </div>
    <div class="form-group">
    <label for="id_card">Identify card</label>
    <input type="number" class="form-control" name="id_card" id="id_card" value="<?=$row['id_card']?>">
    </div>
   
    <div class="form-group">
    <img src="../img/<?=$row['mem_img']?>" width="200" hiegth="150">
    </div>
    <div class="form-group">
    <label for="mem_img">Image</label>
    <input type="file" class="form-control-file" name="mem_img" id="mem_img" value="<?=$row['mem_img']?>">
    </div>
    
    <div class="form-group">
    <label for="mem_type">MEMBER TYPE</label>
    <select  class="form-control" name="mem_type" id="mem_type" >
        <option <?php if($row['mem_type']=="user") echo "selected"?> value="user">user</option>
        <option <?php if($row['mem_type']=="admin") echo "selected"?> value="admin">admin</option>
    </select>
    </div>
    
    
    <button class="btn btn-primary  col-md-2" type="submit">แก้ไข</button>
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