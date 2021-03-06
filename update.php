<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>CRUD APP</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2 class="text-center">PHP - CRUD : UPDATE DATA IN PHP</h2>
            <hr>
            <?php
                require_once("connect.php");
                if(isset($_POST['submitBtn'])){
                    $getid = $_POST['id'];
                    $showQuery = "SELECT * FROM student WHERE id=$getid";
                    $runQuery = mysqli_query($dbconnection,$showQuery);
                    if($runQuery == true){
                        while($fetchdata = mysqli_fetch_array($runQuery)){?>

                <form action="update_core.php" method="post">
                    <div class="form-group">
                        <label for="fname">First Name </label>
                        <input type="text" name="fname" placeholder="Enter First Name" id="fname" class="form-control" value="<?php echo $fetchdata['fname'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name </label>
                        <input type="text" name="lname" placeholder="Enter Last Name" id="lname" class="form-control" value="<?php echo $fetchdata['lname'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number </label>
                        <input type="text" name="contact" placeholder="Enter Contact Number" id="contact" class="form-control" value="<?php echo $fetchdata['contact'];?>" required>
                    </div>
                    <input type="hidden" name="editId" value="<?php echo $fetchdata['id'];?>">
                    <input type="submit" value="EDIT DATA" class="btn btn-primary" name="submitBtn">
                    <button type="reset" name="resetBtn" class="btn btn-warning">RESET DATA</button>
                    <a href="new.php" class="btn btn-danger">CANCEL</a>
                </form>




                <?php    }
                    }
                }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/proper.js"></script>
    <script src="" js/bootstrap.min.js></script>
</body>

</html>