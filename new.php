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
            <h2 class="text-center">PHP - CRUD : DISPLAY DATA IN PHP</h2>
            <hr>
            <div class="row">
                <a href="insertdata.php" class="btn btn-success" style="margin-left:80%;">ADD DATA</a>
            </div>
            <?php
                if(isset($_GET['actiontrue'])){
                    echo "<h4 class='text-center text-success'>Data Successfully Inserted</h4>";
                }elseif(isset($_GET['actionfalse'])){
                    echo "<h4 class='text-center text-warning'>Data Not Inserted</h4>";
                }
            
            ?>
            
            <?php
                if(isset($_GET['updatetrue'])){
                    echo "<h4 class='text-center text-success'>Data Successfully Updated</h4>";
                }elseif(isset($_GET['updatefalse'])){
                    echo "<h4 class='text-center text-warning'>Data Not Updated</h4>";
                }
            
            ?>
            
            <?php
                if(isset($_GET['deletetrue'])){
                    echo "<h4 class='text-center text-success'>Data Successfully Deleted</h4>";
                }elseif(isset($_GET['deletefalse'])){
                    echo "<h4 class='text-center text-warning'>Data Not Deleted</h4>";
                }
            
            ?>
            <br>
            <?php
                require_once("connect.php");
                $showQuery = "SELECT * FROM student";
                $runQuery = mysqli_query($dbconnection,$showQuery);
                if($runQuery == true ){?>
                  <table class="table table-bordered" style="background-color:white">
                      <thead class="table-dark">
                          <tr>
                              <th>ID</th>
                              <th>FIRST NAME</th>
                              <th>LAST NAME</th>
                              <th>CONTACT</th>
                              <th>EDIT</th>
                              <th>DELETE</th>
                          </tr>
                      </thead>
                  
                   <?php
                    while($fetchdata = mysqli_fetch_array($runQuery)){?>
                       <tbody>
                           <tr>
                               <td><?php echo $fetchdata['id'];?></td>
                               <td><?php echo $fetchdata['fname']; ?></td>
                               <td><?php echo $fetchdata['lname']; ?></td>
                               <td><?php echo $fetchdata['contact']; ?></td>
                                <form action="update.php" method="post">
                                   <input type="hidden" name="id" value="<?php echo $fetchdata['id'];?>">
                                   <td><input type="submit" name="submitBtn" class="btn btn-primary" value="EDIT"></td>
                               </form>
                               
                               <form action="delete.php" method="post">
                                   <input type="hidden" name="id" value="<?php echo $fetchdata['id'];?>">
                                   <td><input type="submit" name="submitBtn" class="btn btn-danger" value="DELETE"></td>
                               </form>
                               
                           </tr>
                       </tbody>
                       <?php
                    }
                }
                else
                {
                    echo "No record found";
                }
            ?>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/proper.js"></script>
    <script src=""js/bootstrap.min.js></script>
  </body>
</html>