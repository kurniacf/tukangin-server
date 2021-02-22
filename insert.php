<?php
    include_once('koneksi.php');

    if(!empty($_POST['nama']) && !empty($_POST['deskripsi']) && !empty($_POST['sarat']) && !empty($_POST['durasi'])){
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $sarat = $_POST['sarat'];
        $durasi = $_POST['durasi'];

        $query = "INSERT INTO produk(nama, deskripsi, sarat, durasi) VALUES ('$nama', '$deskripsi', '$sarat', '$durasi')";

        $insert = mysqli_query($connect, $query);

        if($insert){
            set_response(true, "Success insert");
        }else{
            set_response(false, "Failed insert");
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

?>