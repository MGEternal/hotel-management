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
    <script language="javascript">
        function del(mypage){
            var agree=confirm("คุณแน่ใจหรือไม่ว่าจะทำรายการนี้?");
        if (agree){
            
            window.location=mypage;
        }

        }

        </script>
</head>
<body>
    <?php 
    //หัว
        require("../include/header.php");
        $sql = "select * from member ";
        $res = mysqli_query($conn,$sql);
        

    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-10">
    <br>
    <h2>ข้อมูลสมาชิก <a href="insert_f.php"><button class="btn btn-primary">เพิ่มข้อมูล</button></a></h2><br>
        <table class="table table-responsive-md">
            <thead>
                <th>Member_ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Telephon</th>
                <th>Identify card</th>
                <th>Image</th>
                <th>Member_type</th>
                <th>Edit</th>
                <th>Delete</th>

            </thead>
            <? while($row=mysqli_fetch_assoc($res)){?>
            <tbody>
            
                <td><?=$row['mem_id']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['fname']?></td>
                <td><?=$row['lname']?></td>
                <td><?=$row['tel']?></td>
                <td><?=$row['id_card']?></td>
                <td><img src="../img/<?php if($mem_img_now=='') {echo "user.png";} else {echo $mem_img_now;}  ?>" width="150px" height="120px"></td>
                <td><?=$row['mem_type']?></td>
                <td><a href="edit_f.php?mem_id=<?=$row['mem_id']?>" > <button class="btn btn-primary">แก้ไข</button></a></td>
                <td><a href="delete.php?mem_id=<?=$row['mem_id']?>" onclick="del(this.href) ; return false;"> <button class="btn btn-danger">ลบ</button></a></td>
            
            </tbody>
            <?php } ?>
                
        </table>
        <br><br><br><br><br>
    
    
    
    </div>

    <?php 
    //ท้าย
        require("../include/footer.php")
    ?>
</body>
</html>