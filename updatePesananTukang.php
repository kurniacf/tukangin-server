<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $isactive = $_POST['isactive'];
    $selesai = $_POST['selesai'];
    $id = $_POST['id'];

    $query = "UPDATE pesanan set isactive = '$isactive', selesai = '$selesai' WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update");
    } else {
        set_response(false, "Failed update");
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
