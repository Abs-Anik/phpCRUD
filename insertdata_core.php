<?php
    require_once("connect.php");
    
    if(isset($_POST['submitBtn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contact = $_POST['contact'];
        
        $inserQuery = "INSERT INTO student(fname,lname,contact) VALUES('$fname','$lname','$contact')";
        
        $runQuery = mysqli_query($dbconnection,$inserQuery);
        if($runQuery == true){
            
            header("location: new.php?actiontrue");
            
        }else{
            
            header("location: insertdata.php?actionfalse");
            
        }
    }
?>