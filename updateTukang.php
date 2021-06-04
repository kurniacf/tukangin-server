<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $id = $_POST['id'];

    $query = "SELECT * FROM tukang WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();


    $query = "UPDATE tukang set name = '$name', email = '$email', address = '$address', handphone = '$handphone' WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update tukang");
    } else {
        set_response(false, "Failed update tukang");
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
