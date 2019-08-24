<?php
    require_once("connect.php");
    if(isset($_POST['submitBtn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contact = $_POST['contact'];
        $editId = $_POST['editId'];
        
        $updateQuery = "UPDATE student SET fname='$fname',lname='$lname',contact='$contact' WHERE id=$editId";
        
        $runQuery = mysqli_query($dbconnection,$updateQuery);
        if($runQuery == true){
            header("location: new.php?updatetrue");
        }else{
            header("location: new.php?updatefalse");
        }
    }
?>