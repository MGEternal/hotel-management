    
    //การเรียกใช้ js และ css 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
    </body>
    </html>

    //ส่วนท้ายเว็บ
    <footer class="fixed-bottom bg-dark">
            <div class="container my-auto">
                <div class="copyright text-center text-white my-auto py-3">
                    <span> copy © InformationTechnologyChonburiTechnicalCollege</span>
                </div>
            </div>
    </footer>

    //เมนู navbar
    <nav class="navbar navbar-expand-md bg-dark navbar-bark ticky-top">
        <a class="navbar-brand "  href=""></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target> 
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end"> 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
            </ul>
        </div>
    </nav>

    //การใช้ javascript การสั่งปริ้น
    <script LANGUAGE="JavaScript">
    function print(){
        if (window.print)
        window.print()
    }

    </script>

    <input type="button" value="พิมพ์เอกสาร" onclick="javascript:this.style.display='none';printpage();">



    //การใช้ฟอร์มกรุ๊ป ในการทำกล่องข้อความ
    <div class="form-group">
        <label for=""></label>
        <input class="form-control" type="text" name="" id="">    
    </div>



    //การ delete
    <?
        require("../include/header.php");
        $room_id=$_GET['room_id'];
        $sql="delete from room where room_id ='".$room_id."'";
        $res =mysqli_query($conn,$sql);
    
        header("location: showroom.php");
    ?>

    //การ แก้ไข sql
    <?
        $sql="UPDATE room SET room_num='$room_num' WHERE room_id='room_id'" ;
    ?>

    //การ เพิ่ม sql
    <?
        $sql="INSERT INTO room VALUES('0','$room_num','$room_detail','$room_price','$room_img')";
    ?>

    //การเช็คค่าว่าง 
        <input type="text" name="" id="" required>