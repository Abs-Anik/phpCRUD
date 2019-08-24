<?php
    require_once("connect.php");
    if(isset($_POST['submitBtn'])){
        $getId = $_POST['id'];
        
        $deleteQuery = "DELETE FROM student WHERE id=$getId";
        $runQuery = mysqli_query($dbconnection,$deleteQuery);
        if($runQuery == true){
            header("location: new.php?deletetrue");
        }else{
            header("location: new.php?deletefalse");
        }
    }
?>