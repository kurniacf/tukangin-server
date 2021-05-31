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
        move_uploaded_file($file, $dir . $avatar);

        $query = "INSERT INTO mitra(name, description, image) VALUES ('$name', '$description', '$image')";

        $insert = pg_query($connect, $query);

        if ($insert) {
            set_response(true, "Success insert mitra");
        } else {
            set_response(false, "Failed insert mitra");
        }
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
