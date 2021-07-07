<?php

include_once('koneksi.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pesanan WHERE id = '$id'";
} else if (!empty($_GET['tukang_id'])) {
    $tukang_id = $_GET['tukang_id'];
    $query = "SELECT * FROM pesanan WHERE tukang_id = '$tukang_id' AND selesai = 'TRUE'";
}

$get = pg_query($connect, $query);
$data = array();

if (pg_num_rows($get) > 0) {
    while ($row = pg_fetch_assoc($get)) {
        $data[] = $row;
    }

    set_response(true, "Data ditemukan", $data);
} else {
    set_response(false, "Data tidak ditemukan", $data);
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
