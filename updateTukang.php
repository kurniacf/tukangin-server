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

    if (empty($_FILES['ktp']) && empty($_FILES['selfie_ktp'])) {
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

        $query = "UPDATE tukang set name = '$name', email = '$email', address = '$address', handphone = '$handphone', ktp = '$ktp', selfie_ktp = '$selfie_ktp', password = '$password', nik = '$nik' WHERE id = '$id'";

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
