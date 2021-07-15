<?php
include_once('koneksi.php');

if (!empty($_POST['tukang_id'])) {
    $tukang_id = $_POST['tukang_id'];
    $nama_divisi = $_POST['nama_divisi'];

    $query = "INSERT INTO divisi(tukang_id, nama_divisi) VALUES ('$tukang_id', '$nama_divisi')";

    $insert = pg_query($connect, $query);

    if ($insert) {
        set_response(true, "Success insert divisi");
    } else {
        set_response(false, "Failed insert divisi");
    }
} else {
    set_response(false, "Harus diisi");
}

function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
