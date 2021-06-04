<?php
include_once('koneksi.php');

if (!empty($_POST['address']) && !empty($_POST['description']) && !empty($_POST['jadwal'])) {
    $address = $_POST['address'];
    $description = $_POST['description'];
    $jadwal = $_POST['jadwal'];
    $isactive = $_POST['isactive'];
    $selesai = $_POST['selesai'];
    $customer_id = $_POST['customer_id'];
    $tukang_id = $_POST['tukang_id'];
    $jumlah_tukang = $_POST['jumlah_tukang'];
    $harga = $_POST['harga'];


    if (empty($_POST['harga'])) {
        if (empty($_FILES['foto'])) {
            set_response(false, "Foto harus diisi");
        } else {
            $foto = $_FILES['foto']['name'];
            $file = $_FILES['foto']['tmp_name'];

            $dir = "foto/";
            move_uploaded_file($file, $dir . $foto);

            $harga = 0;
            for ($i = 0; $i < $jumlah_tukang; $i++) {
                $harga += 100000;
            }

            $query = "INSERT INTO pesanan(address, description, jadwal, isactive, selesai, customer_id, tukang_id, foto, jumlah_tukang, harga) VALUES ('$address', '$description', '$jadwal', '$isactive', '$selesai', '$customer_id', '$tukang_id', '$foto', '$jumlah_tukang', '$harga')";

            $insert = pg_query($connect, $query);

            if ($insert) {
                set_response(true, "Success insert pesanan");
            } else {
                set_response(false, "Failed insert pesanan");
            }
        }
    } else {
        set_response(false, "Harga diisi sistem");
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
