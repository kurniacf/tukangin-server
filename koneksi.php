<?php
$hostname = "localhost";
$username = "postgres";
$password = "kcf170202";
$database = "apk-pkm";

$connect = new PDO($hostname, $username, $password, $database);

    // if(mysqli_connect_errno()){
    //     echo "Failed: " . mysqli_connect_errno; die();
    // }else{
    //     echo "Success";
    // }
