<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $lunas = $_POST['lunas'];
    $id = $_POST['id'];

    $query = "UPDATE pesanan set lunas = '$lunas' WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update lunas");
    } else {
        set_response(false, "Failed update lunas");
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
