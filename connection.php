<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login_and_register";

    $con = mysqli_connect($servername, $username, $password, $database);

    if(!($con)){
        echo "Connection faild";
    }
    

?>