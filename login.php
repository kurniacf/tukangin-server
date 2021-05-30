<?php
include_once('koneksi.php');

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
    $get = pg_query($connect, $query);
    $data = array();

    if (pg_num_rows($get) > 0) {
        while ($row = pg_fetch_assoc($get)) {
            $data[] = $row;
        }

        set_response(true, "Login success", $data);
    } else {
        set_response(false, "Login failed", $data);
    }
} else {
    set_response(false, "tidak boleh kosong", $data);
}

function set_response($isSuccess, $message, $data)
{
    $resul = array(
        'isSuccess' => $isSuccess,
        'message' => $message,
        'data' => $data
    );

    echo json_encode($resul);
}
