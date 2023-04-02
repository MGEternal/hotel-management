<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>U Khao Yai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    //หัว
        require("header.php")
    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-4">
    <br>
    <h2>LOGIN</h2>
    <form action="chklogin.php" method="post">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Enter username" class="form-control">
    </div>
    <div class="form-group">
    <label for="password">password</label>
    <input type="password" name="password" id="password" placeholder="Enter password" class="form-control">
    </div>
    <button class="btn btn-primary">Login</button>

    </div>
    </form>









    <?php 
    //ท้าย
        require("include/footer.php")
    ?>
</body>
</html>