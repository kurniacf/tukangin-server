<?php

include_once('koneksi.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pesanan WHERE id = '$id'";
} else if (!empty($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
    $query1 = "UPDATE pesanan set selesai = 'TRUE' WHERE customer_id = '$customer_id'";
    $update = pg_query($connect, $query1);
    $query = "SELECT * FROM pesanan WHERE customer_id = '$customer_id'";
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
