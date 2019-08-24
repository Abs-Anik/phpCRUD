<?php
    $dbhost = "localhost";
    $dbusername = "student";
    $dbuserpwd = "studentdb";
    $dbname = "phpcrud";

    $dbconnection = mysqli_connect($dbhost,$dbusername,$dbuserpwd,$dbname);

    if($dbconnection == false){
        echo "<h1>database connection not established</h1>";
    }
?>