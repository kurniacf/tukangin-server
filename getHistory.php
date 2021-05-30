<?php

<<<<<<< HEAD
    include_once('koneksi.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM Content WHERE id = '$id'";
        
    }else if(!empty($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $query = "SELECT * FROM Content WHERE user_id = '$user_id'";
    }

    $get = mysqli_query($connect, $query);
    $data = array();

    if(mysqli_num_rows($get) > 0){
        while($row = mysqli_fetch_assoc($get)){
            $data[] = $row;
        }

        set_response(true, "Data ditemukan", $data);

    }else{
        set_response(false, "Data tidak ditemukan", $data);
    }

    function set_response($isSuccess, $message, $data){
        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message,
            'data' => $data
        );

        echo json_encode($result);
    }
?>
=======
include_once('koneksi.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM Content WHERE id = '$id'";
} else if (!empty($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM Content WHERE user_id = '$user_id'";
}

$get = mysqli_query($connect, $query);
$data = array();

if (mysqli_num_rows($get) > 0) {
    while ($row = mysqli_fetch_assoc($get)) {
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
>>>>>>> 189c1558bfc0f15ecf3a2f5ff45d31215047a4ad
