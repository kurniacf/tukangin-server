<?php

include_once('koneksi.php');

if (!empty($_GET['tukang_id'])) {
    $tukang_id = $_GET['tukang_id'];
    $query = "SELECT * FROM divisi WHERE tukang_id = '$tukang_id'";
} else {
    $query = "SELECT * FROM divisi";
}

$get = pg_query($connect, $query);
$data = array();

if (pg_num_rows($get) > 0) {
    while ($row = pg_fetch_assoc($get)) {
        $data[] = $row;
    }

    set_response(true, "Data divisi ditemukan", $data);
} else {
    set_response(false, "Data divisi tidak ditemukan", $data);
}

function set_response($isSuccess, $message, $data)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message,
        'data' => $data
    );

    echo json_encode($result);
}
