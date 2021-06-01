<?php
include_once('koneksi.php');

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['handphone']) && !empty($_POST['password'])) {
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

        $query = "INSERT INTO customer(name, email, handphone, password, avatar) VALUES ('$name', '$email', '$handphone', '$password', '$avatar')";

        $insert = pg_query($connect, $query);

        if ($insert) {
            set_response(true, "Success insert customer");
        } else {
            set_response(false, "Failed insert customer");
        }
    }
} else {
    set_response(false, "Harus diisi");
}

function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
