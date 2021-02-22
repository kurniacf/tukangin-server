<?php
    include_once('koneksi.php');

    if(!empty($_POST['nama']) && !empty($_POST['password']) && !empty($_POST['nohp']) && !empty($_POST['email'])){
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM user WHERE user_email = '$email'";
        $get = mysqli_query($connect, $query);

        $data = array();

        if(mysqli_num_rows($get) > 0){
            set_response(true, "Email sudah terdaftar", $data);
        }else{
            $query = "INSERT INTO user(user_nama, user_email, user_hp, user_password) VALUES ('$nama', '$email', '$nohp', '$password')";

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