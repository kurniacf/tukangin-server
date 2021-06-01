<?php
include_once('koneksi.php');

$name = $_POST['name'];
$email = $_POST['email'];
$handphone = $_POST['handphone'];
$password = md5($_POST['password']);

if (empty($_FILES['avatar'])) {
    set_response(false, "Foto harus diisi");
} else {
    $avatar = $_FILES['avatar']['name'];
    $file = $_FILES['avatar']['tmp_name'];

    $dir = "avatar/";
    move_uploaded_file($file, $dir . $avatar);

    $query = "UPDATE customer set name = '$name', email = '$email', handphone = '$handphone', password = '$password', avatar = '$avatar' WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update customer");
    } else {
        set_response(false, "Failed update customer");
    }
}


function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
