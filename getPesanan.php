<?php

include_once('koneksi.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pesanan WHERE id = '$id'";
} else if (!empty($_GET['tukang_id'])) {
    $tukang_id = $_GET['tukang_id'];
    $query = "SELECT * FROM pesanan WHERE tukang_id = '$tukang_id'";
} else if (!empty($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
    $query = "SELECT * FROM pesanan WHERE customer_id = '$customer_id'";
} else {
    $query = "SELECT * FROM pesanan";
}

$get = pg_query($connect, $query);
$data = array();

if (pg_num_rows($get) > 0) {
    while ($row = pg_fetch_assoc($get)) {
        $data[] = $row;
    }

    set_response(true, "Data pesanan ditemukan", $data);
} else {
    set_response(false, "Data pesanan tidak ditemukan", $data);
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
