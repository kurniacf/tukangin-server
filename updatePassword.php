<?php
include_once('koneksi.php');

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query1 = "SELECT * FROM customer WHERE email = '$email'";
    $get1 = pg_query($connect, $query1);

    $query2 = "SELECT * FROM tukang WHERE email = '$email'";
    $get2 = pg_query($connect, $query2);

    if (pg_num_rows($get1)) {
        $query1 = "UPDATE customer set password = '$password' WHERE email = '$email'";
        $update = pg_query($connect, $query1);
    } else if (pg_num_rows($get2)) {
        $query2 = "UPDATE customer set password = '$password' WHERE email = '$email'";
        $update = pg_query($connect, $query2);
    } else {
        set_response(false, "email salah");
    }



    if ($update) {
        set_response(true, "Success update password");
    } else {
        set_response(false, "Failed update password");
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
