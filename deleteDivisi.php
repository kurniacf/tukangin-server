<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM divisi WHERE id = '$id'";
    $delete = pg_query($connect, $query);

    if ($delete) {
        set_response(true, "Success delete divisi");
    } else {
        set_response(false, "Failed delete divisi");
    }
} else {
    set_response(false, "Tidak boleh kosong!");
}

function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
