<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "kotlin_basic";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    // if(mysqli_connect_errno()){
    //     echo "Failed: " . mysqli_connect_errno; die();
    // }else{
    //     echo "Success";
    // }
?>