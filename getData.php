<?php

include_once('koneksi.php');

<<<<<<< HEAD
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM Content WHERE id = '$id'";
} else {
    $query = "SELECT * FROM Content";
}
=======
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM Content WHERE id = '$id'";
    }else{
        $query = "SELECT * FROM Content";
    }

    $get = mysqli_query($connect, $query);
    $data = array();

    if(mysqli_num_rows($get) > 0){
        while($row = mysqli_fetch_assoc($get)){
            $data[] = $row;
        }
>>>>>>> 189c1558bfc0f15ecf3a2f5ff45d31215047a4ad

$get = pg_query($connect, $query);
$data = array();

if (pg_num_rows($get) > 0) {
    while ($row = pg_fetch_assoc($get)) {
        $data[] = $row;
    }

    set_response(true, "Data ditemukan", $data);
} else {
    set_response(false, "Data tidak ditemukan", $data);
}

function set_response($isSuccess, $message, $data)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message,
        'data' => $data
    );

    echo json_encode($result);
}
