<?php
include_once('koneksi.php');

if (!empty($_POST['tukang_id'])) {
    $tukang_id = $_POST['tukang_id'];
    $nama_divisi = $_POST['nama_divisi'];
    $harga = $_POST['harga'];

    $query = "UPDATE divisi set tukang_id = '$tukang_id', nama_divisi = '$nama_divisi', harga = '$harga' WHERE id = '$id'";

    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update divisi");
    } else {
        set_response(false, "Failed update divisi");
    }
} else {
    set_response(false, "harus diisi");
}

function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
