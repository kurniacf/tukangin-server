<?php
    include_once('koneksi.php');

    if(!empty($_POST['user_id']) && !empty($_POST['judul']) && !empty($_POST['deskripsi'])){
        $user_id = $_POST['user_id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        if(empty($_FILES['image'])){
            set_response(false, "Foto harus diisi");
        }else{
            $image = $_FILES['image']['name'];
            $file = $_FILES['image']['tmp_name'];

            $dir = "image/";
            move_uploaded_file($file, $dir.$image);

            $query = "INSERT INTO Content(user_id, judul, deskripsi, image) VALUES ('$user_id', '$judul', '$deskripsi', '$image')";

            $insert = mysqli_query($connect, $query);

            if($insert){
                set_response(true, "Success insert");
            }else{
                set_response(false, "Failed insert");
            }
        }

        
    }else{
        set_response(false, "Harus diisi");
    }

    function set_response($isSuccess, $message){
        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }
