<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $nik = $_POST['nik'];
    $password = md5($_POST['password']);
    $id = $_POST['id'];

    if (empty($_FILES['avatar_tukang'])) {
        set_response(false, "Foto harus diisi");
    } else {
        $avatar_tukang = $_FILES['avatar_tukang']['name'];
        $file = $_FILES['avatar_tukang']['tmp_name'];

        $dir = "avatar_tukang/";
        move_uploaded_file($file, $dir . $avatar_tukang);

        $query = "UPDATE tukang set name = '$name', email = '$email', address = '$address', handphone = '$handphone', avatar_tukang = '$avatar_tukang', password = '$password', nik = '$nik' WHERE id = '$id'";

        $update = pg_query($connect, $query);

        if ($update) {
            set_response(true, "Success update tukang");
        } else {
            set_response(false, "Failed update tukang");
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
