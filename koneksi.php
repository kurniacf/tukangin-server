<?php
//local
// $host = "localhost";
// $port = "5432";
// $user = "";
// $password = "";
// $dbname = "";

//heroku
$host = "ec2-52-4-111-46.compute-1.amazonaws.com";
$user = "ejexbwyopvqhbx";
$password = "d61f62e3127022400fb6816ed6e5f400e0c4c099a8e27ab728f3f7bef201f6cf";
$dbname = "d1msbotm7r9qbo";
$port = "5432";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$connect = pg_connect($connection_string);

// if (!$connect) {
//     echo "Database connection failed.";
// } else {
//     echo "Database connection success.";
// }