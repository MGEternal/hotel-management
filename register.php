<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>U Khao Yai</title>

</head>
<body>
    <?php 
    //หัว
        require("header.php")
    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-4">
    <br>
    <h2>REGISTER</h2>
    <form action="chkregister.php" method="post">
    
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required ="4">
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required ="4">
    </div>
    <div class="form-group">
    <label for="fname">Firstname</label>
    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Firstname" required ="2">
    </div>
    <div class="form-group">
    <label for="lname">Lastname</label>
    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Lastname" required ="1">
    </div>
    <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="number" class="form-control" name="tel" id="tel" placeholder="Enter Telephone" required ="8">
    </div>
    
    
    <div class="form-group">
    <div class="custom-file">
    <label class="custom-file-label" for="mem_img">Image</label>
    <input type="file" class="custom-file-input" name="mem_img" id="mem_img" placeholder="Enter Image">
    </div>
    </div>
    
    
    
    <button class="btn btn-primary  col-md-2" type="submit">OK</button>
    <button class="btn btn-danger  col-md-2" type="reset">cancel</button>
    </form>
    
    
    <br>
    <br>
    <br>
    <br>
    
    
    </div>





<script>
$(function(){
    $("#tel").submit(){
if(("#tel")!=>length(10)){
    alert("GGWP");
}


};
});

</script>




    <?php 
    //ท้าย
        require("include/footer.php")
    ?>
</body>
</html>