<?php
include_once('koneksi.php');

if (!empty($_POST['id'])) {
    $customer_id = $_POST['customer_id'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $jalan = $_POST['jalan'];
    $nomor_rumah = $_POST['nomor_rumah'];
    $kode_pos = $_POST['kode_pos'];
    $id = $_POST['id'];

    $query = "UPDATE alamat set customer_id = '$customer_id', provinsi = '$provinsi', kabupaten = '$kabupaten', kelurahan = '$kelurahan', jalan = '$jalan', nomor_rumah = '$nomor_rumah', kode_pos = '$kode_pos' WHERE id = '$id'";
    $update = pg_query($connect, $query);

    if ($update) {
        set_response(true, "Success update alamat");
    } else {
        set_response(false, "Failed update alamat");
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
