<?php
    include_once('koneksi.php');

    if(!empty($_POST['id']) && !empty($_POST['user_id']) && !empty($_POST['judul']) && !empty($_POST['deskripsi'])){
        $id = $_POST['id'];
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
        
            $query = "UPDATE Content set user_id = '$user_id', judul = '$judul', deskripsi = '$deskripsi', image = '$image' WHERE id = '$id'";
            $update = mysqli_query($connect, $query);
        
            if($update){
                set_response(true, "Success update");
            }else{
                set_response(false, "Failed update");
            }
        }
    }else{
        set_response(false, "harus diisi");
    }

    function set_response($isSuccess, $message){
        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }
?>


