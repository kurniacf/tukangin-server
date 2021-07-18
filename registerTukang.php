<?php
include_once('koneksi.php');

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['handphone']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $nik = $_POST['nik'];
    $password = md5($_POST['password']);
    $idfirebase = $_POST['idfirebase'];

    $query = "SELECT * FROM tukang WHERE email = '$email'";
    $get = pg_query($connect, $query);

    $data = array();

    if (pg_num_rows($get)) {
        set_response(true, "Email sudah terdaftar", $data);
    } else {
        if (empty($_FILES['ktp']) || empty($_FILES['selfie_ktp'])) {
            set_response(false, "Foto harus diisi");
        } else {
            $ktp = $_FILES['ktp']['name'];
            $file1 = $_FILES['ktp']['tmp_name'];
            $dir1 = "ktp/";
            move_uploaded_file($file1, $dir1 . $ktp);

            $selfie_ktp = $_FILES['selfie_ktp']['name'];
            $file2 = $_FILES['selfie_ktp']['tmp_name'];
            $dir2 = "selfie_ktp/";
            move_uploaded_file($file2, $dir2 . $selfie_ktp);

            $query = "INSERT INTO tukang(name, email, address, handphone, ktp, selfie_ktp, password, nik, idfirebase) VALUES ('$name', '$email', '$address','$handphone', '$ktp', '$selfie_ktp', '$password', '$nik', '$idfirebase')";

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
