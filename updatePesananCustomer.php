<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $address = $_POST['address'];
    $description = $_POST['description'];
    $jadwal = $_POST['jadwal'];
    $id = $_POST['id'];


    if (empty($_FILES['foto'])) {
        set_response(false, "Foto harus diisi");
    } else {
        $foto = $_FILES['foto']['name'];
        $file = $_FILES['foto']['tmp_name'];

        $dir = "foto/";
        move_uploaded_file($file, $dir . $foto);

        $query = "UPDATE mitra set address = '$address', description = '$description', jadwal = '$jadwal', foto = '$foto' WHERE id = '$id'";
        $update = pg_query($connect, $query);

        if ($update) {
            set_response(true, "Success update");
        } else {
            set_response(false, "Failed update");
        }
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
