<?php
    include_once('koneksi.php');

    if(!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM Users WHERE email = '$email'";
        $get = mysqli_query($connect, $query);

        $data = array();

        if(mysqli_num_rows($get) > 0){
            set_response(true, "Email sudah terdaftar", $data);
        }else{
            $query = "INSERT INTO Users(nama, email, password) VALUES ('$nama', '$email', '$password')";

            $insert = mysqli_query($connect, $query);

            if($insert){
                set_response(true, "Register success");
            }else{
                set_response(false, "Register Failed");
            }
        }
    }
    else{
        set_response(false, "Tidak boleh kosong");
    }

    function set_response($isSuccess, $message){
        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }

?>