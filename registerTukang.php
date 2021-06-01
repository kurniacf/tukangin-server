<?php
include_once('koneksi.php');

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['handphone']) && !empty($_POST['ktp']) && !empty($_POST['selfie_ktp']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM customer WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();

    if (pg_num_rows($get) > 0) {
        set_response(true, "Email sudah terdaftar", $data);
    } else {
        if (empty($_FILES['ktp']) || empty($_FILES['selfie_ktp'])) {
            set_response(false, "Foto harus diisi");
        } else {
            $ktp = $_FILES['ktp']['name'];
            $file = $_FILES['ktp']['tmp_name'];
            $dir = "ktp/";
            move_uploaded_file($file, $dir . $ktp);

            $ktp = $_FILES['selfie_ktp']['name'];
            $file = $_FILES['selfie_ktp']['tmp_name'];
            $dir = "selfie_ktp/";
            move_uploaded_file($file, $dir . $selfie_ktp);

            $query = "INSERT INTO tukang(name, email, address, handphone, ktp, selfie_ktp, password) VALUES ('$name', '$email', '$address','$handphone', '$ktp', '$selfie_ktp', '$password')";

            $insert = pg_query($connect, $query);

            if ($insert) {
                set_response(true, "Register tukang success");
            } else {
                set_response(false, "Register tukang failed");
            }
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
