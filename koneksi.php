<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "postgres";

// $connect = pg_connect($host, $user, $password, $dbname);

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


$db_handle = pg_connect("
        host=ec2-52-4-111-46.compute-1.amazonaws.com 
        dbname=d1msbotm7r9qbo 
        user=ejexbwyopvqhbx 
        password=d61f62e3127022400fb6816ed6e5f400e0c4c099a8e27ab728f3f7bef201f6cf
");
if ($db_handle) {
    echo 'Connection attempt succeeded.';
} else {
    echo 'Connection attempt failed.';
}
echo "<h3>Connection Information</h3>";

echo "DATABASE NAME:" . pg_dbname($db_handle) . "<br>";

echo "HOSTNAME: " . pg_host($db_handle) . "<br>";

echo "PORT: " . pg_port($db_handle) . "<br>";
