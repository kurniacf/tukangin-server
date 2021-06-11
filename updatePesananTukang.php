<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $isactive = $_POST['isactive'];
    $tukang_id = $_POST['tukang_id'];
    $id = $_POST['id'];

    $query = "UPDATE pesanan set isactive = '$isactive', tukang_id = '$tukang_id' WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Berhasil diambil");
    } else {
        set_response(false, "Sedang dikerjakan");
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
