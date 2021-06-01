<?php
include_once('koneksi.php');

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['handphone']) && !empty($_POST['ktp']) && !empty($_POST['selfie_ktp']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $ktp = $_POST['ktp'];
    $selfie_ktp = $_POST['selfie_ktp'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM tukang WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();

    if (pg_num_rows($get) > 0) {
        set_response(true, "Email sudah terdaftar", $data);
    } else {
        $ktp = $_FILES['ktp']['name'];
        $file = $_FILES['ktp']['tmp_name'];

        $dir = "ktp/";
        move_uploaded_file($file, $dir . $ktp);

        $query = "INSERT INTO tukang(name, email, handphone, password, ktp) VALUES ('$name', '$email', '$handphone', '$password', '$ktp')";

        $insert = pg_query($connect, $query);


        if ($insert) {
            set_response(true, "Register success");
        } else {
            set_response(false, "Register Failed");
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
