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
        $avatarTukang = $_FILES['avatarTukang']['name'];
        $file = $_FILES['avatarTukang']['tmp_name'];

        $dir = "avatarTukang/";
        move_uploaded_file($file, $dir . $avatarTukang);

        $query = "UPDATE tukang set name = '$name', email = '$email', address = '$address', handphone = '$handphone', avatarTukang = '$avatarTukang', password = '$password', nik = '$nik' WHERE id = '$id'";

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
