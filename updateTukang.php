<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $password = md5($_POST['password']);
    $id = $_POST['id'];

    $query = "SELECT * FROM tukang WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();

    if (pg_num_rows($get) == 0) {
        set_response(true, "Email sudah terdaftar", $data);
    } else {
        if (empty($_FILES['avatar_tukang'])) {
            set_response(false, "Foto harus diisi");
        } else {
            $query = "UPDATE tukang set name = '$name', email = '$email', address = '$address', handphone = '$handphone', avatar = '$avatar' WHERE id = '$id'";
            $update = pg_query($connect, $query);

            if ($update) {
                set_response(true, "Success update tukang");
            } else {
                set_response(false, "Failed update tukang");
            }
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
