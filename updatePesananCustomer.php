<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $address = $_POST['address'];
    $description = $_POST['description'];
    $jadwal = $_POST['jadwal'];
    $id = $_POST['id'];
    $jumlah_tukang = $_POST['jumlah_tukang'];
    $harga = $_POST['harga'];


    if (!empty($_POST['harga'])) {
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

            $query = "UPDATE pesanan set address = '$address', description = '$description', jadwal = '$jadwal', foto = '$foto', jumlah_tukang = '$jumlah_tukang', harga = '$harga'  WHERE id = '$id'";
            $update = pg_query($connect, $query);

            if ($update) {
                set_response(true, "Success update");
            } else {
                set_response(false, "Failed update");
            }
        }
    } else {
        set_response(false, "Harga diisi sistem");
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
