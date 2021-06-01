<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    if (empty($_FILES['image'])) {
        set_response(false, "Foto harus diisi");
    } else {
        $image = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];

        $dir = "image/";
        move_uploaded_file($file, $dir . $image);

        $query = "UPDATE mitra set name = '$name', email = '$email', handphone = '$handphone', password = '$password', image = '$image' WHERE id = '$id'";
        $update = pg_query($connect, $query);

        if ($update) {
            set_response(true, "Success update mitra");
        } else {
            set_response(false, "Failed update mitra");
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
