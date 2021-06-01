<?php
include_once('koneksi.php');

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['handphone']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $handphone = $_POST['handphone'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM customer WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();

    if (pg_num_rows($get) > 0) {
        set_response(true, "Email sudah terdaftar", $data);
    } else {
        $query = "INSERT INTO customer(name, email, handphone, password) VALUES ('$name', '$email', '$handphone', '$password')";

        $insert = pg_query($connect, $query);

        if ($insert) {
            set_response(true, "Register customer success");
        } else {
            set_response(false, "Register customer Failed");
        }
    }
} else {
    set_response(false, "Tidak boleh kosong");
}

function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
