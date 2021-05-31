<?php
//local
// $host = "localhost";
// $port = "5432";
// $user = "postgres";
// $password = "kcf170202";
// $dbname = "apk-pkm";

//heroku
$host = "ec2-52-4-111-46.compute-1.amazonaws.com";
$user = "ejexbwyopvqhbx";
$password = "d61f62e3127022400fb6816ed6e5f400e0c4c099a8e27ab728f3f7bef201f6cf";
$dbname = "d1msbotm7r9qbo";
$port = "5432";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$connect = pg_connect($connection_string);

//$connect = pg_connect($host, $user, $password, $dbname);

//$connect = new PDO("psql:host=localhost;dbname=apk-pkm", "postgres", "kcf170202");


// // if (mysqli_connect_errno()) {
// //     echo "Failed: " . mysqli_connect_errno;
// //     die();
// // } else {
// //     echo "Success";
// // }
// $host = "ec2-52-4-111-46.compute-1.amazonaws.com";
// $user = "ejexbwyopvqhbx";
// $password = "d61f62e3127022400fb6816ed6e5f400e0c4c099a8e27ab728f3f7bef201f6cf";
// $dbname = "d1msbotm7r9qbo";
// $port = "5432";

// try {
//     //Set DSN data source name
//     //$dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
//     // $db_handle = pg_connect("
//     //     host=ec2-52-4-111-46.compute-1.amazonaws.com 
//     //     dbname=d1msbotm7r9qbo 
//     //     user=ejexbwyopvqhbx 
//     //     password=d61f62e3127022400fb6816ed6e5f400e0c4c099a8e27ab728f3f7bef201f6cf
//     // ");

//     //create a pdo instance
//     $pdo = new PDO($dsn, $user, $password);
//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }

// $connect = "
//         host=localhost
//         dbname=apk-pkm 
//         user=postgres 
//         password=kcf170202
//         port=5432
// ";

// $connect = "
//         host=ec2-52-4-111-46.compute-1.amazonaws.com 
//         dbname=d1msbotm7r9qbo 
//         user=ejexbwyopvqhbx 
//         password=d61f62e3127022400fb6816ed6e5f400e0c4c099a8e27ab728f3f7bef201f6cf
// ";
// if (!$connect) {
//     echo "Database connection failed.";
// } else {
//     echo "Database connection success.";
// }

// if ($connect) {
//     echo "Connected to " . pg_host($dbconn);
// } else {
//     echo "Error in connecting to database.";
// }
