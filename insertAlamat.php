<?php
include_once('koneksi.php');

if (!empty($_POST['customer_id'])) {
    $customer_id = $_POST['customer_id'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $jalan = $_POST['jalan'];
    $nomor_rumah = $_POST['nomor_rumah'];
    $kode_pos = $_POST['kode_pos'];


    $query = "INSERT INTO alamat(customer_id, provinsi, kabupaten, kecamatan, kelurahan, jalan, nomor_rumah, kode_pos) VALUES ('$customer_id', '$provinsi', '$kabupaten', '$kecamatan', '$kelurahan', '$jalan', '$nomor_rumah', '$kode_pos')";

    $insert = pg_query($connect, $query);

    if ($insert) {
        set_response(true, "Success insert alamat");
    } else {
        set_response(false, "Failed insert alamat");
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
