<?php

include_once('koneksi.php');

if (!empty($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
    $query = "SELECT * FROM alamat WHERE customer_id = '$customer_id'";
} else {
    $query = "SELECT * FROM alamat";
}

$get = pg_query($connect, $query);
$data = array();

if (pg_num_rows($get) > 0) {
    while ($row = pg_fetch_assoc($get)) {
        $data[] = $row;
    }

    set_response(true, "Data alamat ditemukan", $data);
} else {
    set_response(false, "Data alamat tidak ditemukan", $data);
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
