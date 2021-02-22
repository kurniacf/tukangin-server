<?php
    include_once('koneksi.php');

    if(!empty($_POST['nama']) && !empty($_POST['deskripsi']) && !empty($_POST['sarat']) && !empty($_POST['durasi'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $sarat = $_POST['sarat'];
        $durasi = $_POST['durasi'];

        $query = "UPDATE produk set nama = '$nama', deskripsi = '$deskripsi', sarat = '$sarat', durasi = '$durasi' WHERE id = '$id'";
        $update = mysqli_query($connect, $query);

        if($update){
            set_response(true, "Success update");
        }else{
            set_response(false, "Failed update");
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


