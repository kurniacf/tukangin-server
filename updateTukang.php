<?php
include_once('koneksi.php');

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['handphone']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $handphone = $_POST['handphone'];
    $password = md5($_POST['password']);

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

        $query = "UPDATE tukang set name = '$name', email = '$email', address = '$address', handphone = '$handphone', ktp = '$ktp', selfie_ktp = '$selfie_ktp', password = '$password' WHERE id = '$id'";

        $update = pg_query($connect, $query);

        if ($update) {
            set_response(true, "Success update customer");
        } else {
            set_response(false, "Failed update customer");
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
