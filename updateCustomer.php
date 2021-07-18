<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $handphone = $_POST['handphone'];
    $akun_bank = $_POST['akun_bank'];
    $idfirebase = $_POST['idfirebase'];
    $id = $_POST['id'];

    $query = "SELECT * FROM customer WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();


    $query = "UPDATE customer set name = '$name', email = '$email', handphone = '$handphone', akun_bank = '$akun_bank', idfirebase = '$idfirebase'  WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update customer");
    } else {
        set_response(false, "Failed update customer");
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
