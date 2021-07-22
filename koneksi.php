<?php
// $host = "";
// $port = ";
// $user = "";
// $password = "";
// $dbname = "";

//
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$connect = pg_connect($connection_string);

// if (!$connect) {
//     echo "Database connection failed.";
// } else {
//     echo "Database connection success.";
// }
